@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Gallery</div>

                    <div class="panel-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('dashboard.gallery.update', $gallery->id) }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-2 control-label">Title *</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ? old('title') : $gallery->title }}" placeholder="Enter title">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                                <label for="priority" class="col-md-2 control-label">Priority *</label>
                                <div class="col-md-8">
                                    <input type="text" name="priority" id="priority" class="form-control" value="{{ old('priority') ? old('priority') : $gallery->priority  }}" placeholder="In which order your gallery should visible ( Ex: 1 )">
                                    @if ($errors->has('priority'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('taken_at') ? ' has-error' : '' }}">
                                <label for="taken_at" class="col-md-2 control-label">Taken At</label>
                                <div class="col-md-8">
                                    <input type="date" name="taken_at" id="taken_at" value="{{ old('taken_at') ? old('taken_at') : $gallery->taken_at ? date('Y-m-d', strtotime($gallery->taken_at)) :"" }}" class="form-control">
                                    @if ($errors->has('taken_at'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('taken_at') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-10">
                                <div class="text-center">
                                    <a href="{{ route('dashboard.gallery.details', $gallery->id) }}" class="btn btn-danger mar-r-10">Cancel</a>
                                    <button type="submit" class="btn btn-success">Save Gallery</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection