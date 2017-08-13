@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Personal Information</div>
                        <div class="pull-right">
                            <a href="{{ route('dashboard.info.edit') }}" class="btn btn-sm btn-primary">Edit Info</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        @if($userInfo)
                            <div class="form-group">
                                <label class="col-md-2 no-mar-l control-label">About</label>
                                <div class="col-md-8">
                                {!!  $userInfo->about ? $userInfo->about : "--" !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 no-mar-l control-label">Facebook Url</label>
                                <div class="col-md-8">
                                    @if($userInfo->facebook_url) <a href="{{ $userInfo->facebook_url }}" target="_blank">{{ $userInfo->facebook_url }}</a>@else -- @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2 control-label no-mar-l">Instagram Url</label>
                                <div class="col-md-8">
                                    @if($userInfo->instagram_url) <a href="{{ $userInfo->instagram_url }}" target="_blank">{{ $userInfo->instagram_url }}</a>@else -- @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2  no-mar-l">Sayat.me Url</label>
                                <div class="col-md-8">
                                    @if($userInfo->sayat_url) <a href="{{ $userInfo->sayat_url }}" target="_blank">{{ $userInfo->sayat_url }}</a>@else -- @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @else
                            <div class="col-md-10 alert alert-danger">
                                Sorry! No data available. For adding personal information, click <b>Edit Info</b> Button Above.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
