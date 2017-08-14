@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">All Galleries</div>
                        <div class="pull-right">
                            <a href="{{ route('dashboard.gallery.create') }}" class="btn btn-sm btn-primary">Add Gallery</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                       <div class="col-md-12">
                           <div>
                               @if($galleries->count())
                                   @foreach($galleries as $gallery)
                                     <div class="col-md-4">
                                         <div class="gallery-wrapper">
                                             <a href="{{ route('dashboard.gallery.details', $gallery->id) }}"><img src="{{ $gallery->getCoverImage() }}" title="{{ $gallery->title }}"></a>
                                             <div class="gallery-bottom">
                                                 <div class="title">{{ str_limit($gallery->title, 15)  }} </div>
                                                 <div class="status @if($gallery->is_live) status-live @else status-non-live @endif">
                                                     @if($gallery->is_live) Live @else Not Live @endif
                                                 </div>
                                                 <div class="clearfix"></div>
                                             </div>
                                        </div>
                                    </div>
                                   @endforeach
                               @else
                                   <div class="alert alert-danger">
                                       Sorry! No galleries has been created yet. Click <b> Add Gallery</b> Button to add one.
                                   </div>
                               @endif
                               <div class="clearfix"></div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
