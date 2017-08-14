<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends DashboardController
{
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

    public function galleryDetails($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('dashboard.gallery_details', compact('gallery'));
    }

    public function uploadImages(Request $request)
    {
        $images = $request->file('images');

        foreach ($images as $image) {

            $rules = ['image' => 'image|mimes:jpeg,jpg,png|max:2048'];

            $validator = validator($request->all(), ['image' => 'image|mimes:jpeg,jpg,png|max:2048']);
            $this->validate($request, [
            ], [], ['image' => $image]);
        }

        // image validate

        return 'ok';
    }

    public function deleteImage()
    {
        
    }

    public function makeProfilePicture()
    {
        
    }

}
