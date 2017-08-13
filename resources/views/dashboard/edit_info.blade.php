@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Information</div>

                    <div class="panel-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('dashboard.info.update') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                <label for="about" class="col-md-2 control-label">About</label>
                                <div class="col-md-8">
                                    <textarea id="about" class="form-control" name="about" rows="10"  autofocus>@if(old('about')) {{ old('about') }} @elseif($userInfo && $userInfo->about){{  $userInfo->about }}@endif</textarea>
                                    @if ($errors->has('about'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('facebook_url') ? ' has-error' : '' }}">
                                <label for="facebook_url" class="col-md-2 control-label">Facebook Url</label>

                                <div class="col-md-8">
                                    <input id="facebook_url" type="text" class="form-control" name="facebook_url"  value="@if(old('facebook_url')) {{ old('facebook_url') }}@elseif($userInfo && $userInfo->facebook_url){{ $userInfo->facebook_url }}@endif">

                                    @if ($errors->has('facebook_url'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('facebook_url') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('instagram_url') ? ' has-error' : '' }}">
                                <label for="instagram_url" class="col-md-2 control-label">Instagram Url</label>

                                <div class="col-md-8">
                                    <input id="instagram_url" type="text" class="form-control" name="instagram_url"  value="@if(old('instagram_url')) {{ old('instagram_url') }}@elseif($userInfo && $userInfo->instagram_url){{ $userInfo->instagram_url }}@endif">

                                    @if ($errors->has('instagram_url'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('instagram_url') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('sayat_url') ? ' has-error' : '' }}">
                                <label for="sayat_url" class="col-md-2 control-label">Satat.me Url</label>

                                <div class="col-md-8">
                                    <input id="sayat_url" type="text" class="form-control" name="sayat_url" required value="@if(old('sayat_url')) {{ old('sayat_url') }}@elseif($userInfo && $userInfo->sayat_url){{ $userInfo->sayat_url }}@endif">

                                    @if ($errors->has('sayat_url'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sayat_url') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 20px">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="text-center">
                                        <a href="{{ route('dashboard.info') }}" class="btn btn-danger" style="margin-right: 10px">
                                            Cancel
                                        </a>

                                        <button type="submit" class="btn btn-success">
                                            Save Information
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
