<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GalleryController extends DashboardController
{
    private $imagePath;
    public function __construct()
    {
        $this->imagePath = storage_path('gallery');
    }
    public function showGallery()
    {
        $galleries = $this->getGalleries();
        return view('dashboard.gallery', compact('galleries'));
    }

    public function createGallery()
    {
        return view('dashboard.add_gallery');
    }

    public function saveGallery(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:4',
            'priority' => 'required|integer',
            'taken_at' => 'date'
        ]);

        Gallery::create([
            'title' => $request->input('title'),
            'priority' => $request->input('priority'),
            'taken_at' => $request->input('date') ? $request->input('date') :null
        ]);

        return redirect()->route('dashboard.gallery')
            ->with('success', 'Gallery created successfully');
    }

    public function editGallery($galleryId)
    {
        $gallery = Gallery::findOrFail($galleryId);

        return view('dashboard.edit_gallery', compact('gallery'));
    }

    public function updateGallery(Request $request, $galleryId)
    {
        $gallery = Gallery::findOrFail($galleryId);

        $this->validate($request, [
            'title' => 'required|min:4',
            'priority' => 'required|integer',
            'taken_at' => 'date'
        ]);

        $gallery->update([
            'title' => $request->input('title'),
            'priority' => $request->input('priority'),
            'taken_at' => $request->input('date') ? $request->input('date') :null
        ]);

        return redirect()->route('dashboard.gallery.details', $galleryId)
            ->with('success', 'Gallery updated successfully');
    }

    public function galleryDetails($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('dashboard.gallery_details', compact('gallery'));
    }

    public function uploadImages(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $images = $request->file('images');

        if(!count($images)) {
            return redirect()->back()->with('error', 'Please select atleast one image to upload.');
        }

        foreach ($images as $image) {

            $rules = ['image' => 'image|mimes:jpeg,jpg,png|max:2048'];
            $message = [
                'image.image' => 'One of your images are not valid.',
                'imgae.mime' => 'One of your images are not valid, only jpeg, jpg and png format is allowed.',
                'image.max' => 'One of your images are more than 2 MB. please upload images less than 2 MB.'
            ];

            $validator = validator(['image' => $image], $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $imageCount = count($images);
        $uploadCount = 0;

        foreach ($images as $img) {
            $imageUrl = $img->getClientOriginalName() . '-' . time() . '-.' . $img->getClientOriginalExtension();
            $imageFolderPath = $this->imagePath . '/' . $gallery->title;
            $imageFullPath = $imageFolderPath . '/' . $imageUrl;
            $resizeImageFullPath = $imageFolderPath . '/resize-' . $imageUrl;

            if (!file_exists($imageFolderPath)) {
                mkdir($imageFolderPath, 0777, true);
            }
            // upload image
            Image::make($img)->resize(400, 500)->save($resizeImageFullPath);
            Image::make($img)->save($imageFullPath);

            $imageName = pathinfo($img, PATHINFO_FILENAME);

            Images::create([
                'gallery_id' => $gallery->id,
                'url' => $imageUrl,
                'title' => $imageName
            ]);

            $uploadCount++;
        }

        if($imageCount == $uploadCount) {
            return redirect()->back()->with('success', 'Images uploaded successfully');
        }
        else {
            return redirect()->back()->with('errorMessage', 'Some of the images couldn\'t uploaded successfully');
        }
    }

    public function deleteImage($imageId)
    {
        $image = Images::findOrFail($imageId);
        $paths = $image->getFilePaths();

        if($image->delete()) {
            foreach ($paths as $path) {
                File::delete($path);
            }
            return redirect()->back()->with('success', 'Image deleted successfully');
        }else {
            return redirect()->back()->with('errorMessage', 'Couldn\'t delete the image, please try again');
        }
    }

    public function makeProfilePicture($imageId)
    {
        $image = Images::findOrFail($imageId);
        $gallery = $image->gallery;

        Images::where('gallery_id', $gallery->id)->where('id','!=', $imageId)->update(['is_cover'=> 0]);
        $image->update(['is_cover' => 1]);

        return redirect()->back()->with('success', 'Gallery cover picture updated successfully');
    }

    public function setGalleryStatus($galleryId)
    {
        $gallery = Gallery::findOrFail($galleryId);
        $status = $gallery->is_live ? 0 : 1;
        $message = !$gallery->is_live ? 'Gallery made visible on website successfully' : 'Gallery made invisible from website successfully';

        if($gallery->update(['is_live' => $status])) {

            return redirect()->back()->with('success', $message);
        }else {
            return redirect()->back()->with('errorMessage', 'Couldn\'t make gallery visible, please try again');
        }
    }

}
