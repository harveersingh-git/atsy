@extends('admin.layout.head')

@section('content')




<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Etsy Config</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Etsy Config</li>
                </ul>
                <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a> -->
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('etsyConfig') }}">
                        {{ csrf_field() }}
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>App Url</label>
                                    <input type="text" class="form-control" name="app_url" placeholder="" value="{{isset($user->app_url)?($user->app_url):''}}">

                                    @if ($errors->has('app_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('app_url') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label>Key String<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="key_string" placeholder="" value="{{isset($user->key_string)?($user->key_string):''}}" required>

                                    @if ($errors->has('key_string'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('key_string') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Shared Secret<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="shared_secret" placeholder="" value="{{isset($user->shared_secret)?($user->shared_secret):''}}" required>

                                    @if ($errors->has('shared_secret'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shared_secret') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label>Access Token Secret</label>
                                    <input type="text" class="form-control" name="access_token_secret" placeholder="" value="{{isset($user->access_token_secret)?($user->access_token_secret):''}}">

                                    @if ($errors->has('access_token_secret'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('access_token_secret') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Access Token</label>
                                    <input type="text" class="form-control" name="access_token" value="{{isset($user->access_token)?($user->access_token):''}}">

                                    @if ($errors->has('access_token'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('access_token') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    <label>Shop Name<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="shop_name" value="{{isset($user->shop_name)?($user->shop_name):''}}" required>

                                    @if ($errors->has('shop_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label>User Name<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="user_name" placeholder="" value="{{isset($user->user_name)?($user->user_name):''}}" required>

                                    @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label>Country<span style="color: red;">*</span></label>
                                    <select name="country_id" id="country" class="form-control" required>
                                        <option value="">--select--</option>
                                        <option value="1" {{isset($user->country_id) == '1' ? 'selected' : ''}}>Afghanistan</option>
                                        <option value="2" {{isset($user->country_id)== '2' ? 'selected' : ''}}>Albania</option>
                                        <option value="3" {{isset($user->country_id)== '3' ? 'selected' : ''}}>Algeria</option>
                                        <option value="4" {{isset($user->country_id)== '4' ? 'selected' : ''}}>Australia</option>

                                    </select>
                                    @error('country')
                                    <p class="alert alert-danger"> {{ $errors->first('country') }} </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Store</label>
                                    <input type="text" class="form-control" name="store" placeholder="" value="{{isset($user->store)?($user->store):''}}">

                                    @if ($errors->has('store'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('store') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>




                            <div class="row" style="margin-top: 10px;">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>

                                <div class="col-lg-3">
                                    <button type="button" class="btn btn-primary">
                                        Generate Token And Authorize
                                    </button>
                                </div>
                                <div class="col-lg-3">
                                    <button type="button" class="btn btn-primary">
                                      Download CSV
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