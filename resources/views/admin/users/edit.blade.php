@extends('admin.layouts.app')

@section('title')
Ajouter un utilisateur 
@endsection

@section('script')
    <script data-cfasync="false" src="{{ asset('assetsadmin/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/popper.js')}}/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/chart.js')}}/js/Chart.js')}}"></script>
    <!-- amchart js -->
    <script src="{{ asset('assetsadmin/files/assets/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{ asset('assetsadmin/files/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{ asset('assetsadmin/files/assets/pages/widget/amchart/light.js')}}"></script>
    <script src="{{ asset('assetsadmin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/SmoothScroll.js')}}"></script>
    <script src="{{ asset('assetsadmin/files/assets/js/pcoded.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('assetsadmin/files/assets/js/vartical-layout.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/pages/dashboard/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/script.min.js')}}"></script>
    <!-- Global site tag (gtag) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

@endsection

@section('style')
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assetsadmin/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/feather/css/feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/css/jquery.mCustomScrollbar.css')}}">

@endsection


@section('header')
<!-- Page-header start -->
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Modifier un utilisateur</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Liste des utilisateurs</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Modifier un utilisateur</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->

@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Basic Inputs Validation start -->
        <div class="card">
            <div class="card-header">
                <h5>Editer un compter</h5>

            </div>
            <div class="card-block">
                <form id="main" method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" name="avatar" class="form-control">
                            @error('avatar')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                            @error('name')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            @error('email')
                            <li style="color:red;">{{ $message }}</li>
                             @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe ">
                            @error('password')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Repeat Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="repeat-password" name="password_confirmation" placeholder="Confirmé mot de passe">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Roles</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control">
                                <option value="" selected >-- Selectionner un role --</option>
                                <option value="0" @if($user->is_admin == 0) selected @endif >User</option>
                                <option value="1" @if($user->is_admin == 1) selected @endif >Admin</option>
                            </select>
                            @error('role')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Active</label>
                        <div class="col-sm-10">
                            <select name="active" class="form-control">
                                <option value="" selected >-- Selectionner un etat --</option>
                                <option value="0" @if($user->is_active == 0) selected @endif >Activé</option>
                                <option value="1" @if($user->is_active == 1) selected @endif >Desactivé</option>
                            </select>
                            @error('role')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Basic Inputs Validation end -->
    </div>
</div>

@endsection

