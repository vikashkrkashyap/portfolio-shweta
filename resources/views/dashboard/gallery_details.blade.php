@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Gallery Details</div>
                        <div class="pull-right">
                            <a href="" class="btn btn-sm btn-primary">Edit Gallery</a>
                            @if($gallery->is_live)
                                <a href="{{ route('dashboard.gallery.status', $gallery->id) }}" class="btn btn-sm btn-danger mar-l-10">Make Inactive</a>
                            @else
                                <a href="{{ route('dashboard.gallery.status', $gallery->id) }}" class="btn btn-sm btn-success mar-l-10">Make Active</a>
                            @endif
                            <a href=""></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div>
                                <img src="{{ url('image/logo.png') }}" alt="" height="250" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><b>Title :</b> {{ $gallery->title }}</li>
                                <li><b>Priority :</b> {{ $gallery->priority }}</li>
                                <li><b>Taken At :</b> {{ $gallery->taken_at ? date('d M Y', strtotime($gallery->taken_at)) : "N/A" }}</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-10">
                            <div class="alert alert-info pad-20">
                                <form action="{{ route('dashboard.gallery.uploads', $gallery->id) }}" enctype="multipart/form-data" method="post">
                                    @if($errors->has('image'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                    <div class="in-blk mar-b-10">
                                        <input type="file" name="images[]" multiple="true">
                                    </div>
                                    <div class="in-blk">
                                        <button type="submit" class="btn btn-primary"> Upload Images</button>
                                    </div>
                                    <div class="mar-t-10"><b> Upload images ( Maximum size: 2 MB, Format : JPG, JPEG, PNG only )</b></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                @if($gallery->images->count())
                                    @foreach($gallery->images as $image)
                                        <div class="col-md-4">
                                            <div class="gallery-wrapper">
                                                <a href=""><img src="{{ url('image/logo.png') }}" title="{{ $image->title }}"></a>
                                                <div class="gallery-bottom">
                                                    <div class="text-center">
                                                        <div class="in-blk mar-b-10">
                                                            <a href="{{ route('dashboard.image.cover', $image->id) }}" class="btn btn-xs btn-warning">
                                                                Set Profile Pic
                                                            </a>
                                                        </div>
                                                        <div class="in-blk">
                                                            <a href="{{ route('dashboard.image.delete', $image->id) }}" class="btn btn-xs btn-danger mar-l-10">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger">
                                        Sorry! No Images uploaded yet for this gallery, click <b>Upload Image</b> button to upload one.
                                    </div>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
