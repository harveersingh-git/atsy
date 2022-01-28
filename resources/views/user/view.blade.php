@extends('admin.layout.head')

@section('content')




<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Edit Profile</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ul>
                <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a> -->
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
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
                   
                    <form class="form-horizontal" method="POST" action="{{ route('editProfile') }}">
                        {{ csrf_field() }}
                        <div class="body">

                            <div class="input-group mb-3">

                                <input  type="email" class="form-control" name="email" placeholder="abc@gmail.com" value="{{$user->email}}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <input  type="text" class="form-control" name="name" placeholder="abc" value="{{$user->name}}" required>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

           


                            <div class="input-group mb-3">
                                <button type="submit" class="btn btn-primary">
                                Update
                                </button>
                            </div>




                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection