@extends('admin.layouts.app')

@section('title')
Ajouter une batterie - Données géographiques 
@endsection

@section('script')
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/modalEffects.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/classie.js')}}"></script>
    <script data-cfasync="false" src="{{  asset('assetsadmin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
     <!-- jquery file upload js -->
     <script src="{{ asset('assetsadmin/files/assets/pages/jquery.filer/js/jquery.filer.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/assets/pages/filer/custom-filer.js')}}" type="text/javascript"></script>
     <script src="{{ asset('assetsadmin/files/assets/pages/filer/jquery.fileuploads.init.js')}}" type="text/javascript"></script> 
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
    <!-- jquery file upload Frame work -->
    <link href="{{ asset('assetsadmin/files/assets/pages/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assetsadmin/files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/sweetalert/css/sweetalert.css')}}">
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
                    <h4>Matériels</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('batteries.index') }}">Liste des batteries</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('batteries.create') }}">Ajouter</a>
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
                <h5>Ajouter une batterie</h5>
                <span>Bien vouloir<code>remplir tous</code>les<code>champs</code>!</span>

            </div>
            <div class="card-block">
                <form id="main" method="POST" action="{{ route('batteries.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Type de batterie</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="nom">
                            @error('name')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Valeur Courant</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="courant" id="name" placeholder="nom">
                            @error('courant')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Valeur Tension</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tension" id="name" placeholder="nom">
                            @error('tension')
                                <li style="color:red;">{{ $message }}</li>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Durée de vie</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="duree_de_vie" id="name" placeholder="nom">
                            @error('duree_de_vie')
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
    <div class="col-sm-12">
        <!-- HTML5 Export Buttons table start -->
        <div class="card">
            <div class="card-header table-card-header row">
                <div class="col-9">
                    <h5>Batteries</h5>
                </div>

                @include('admin.flash-message')
            
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="basic-btn" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Type de batterie</th>
                                <th>Courant</th>
                                <th>Tension</th>
                                <th>Durée de vie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($batteries as $batterie)
                                <tr>
                                    <td>{{ $batterie->name }}</td>
                                    <td>{{ $batterie->courant }}</td>
                                    <td>{{ $batterie->tension }}</td>
                                    <td>{{ $batterie->duree_de_vie }}</td>
                                    <td text-align="align-items-center" >
                                        <a href="{{ route('batteries.edit', $batterie->id )}}">
                                            <button class="btn btn-success mr-2" title="Modifier"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        <a href="{{ route('batteries.destroy', $batterie->id )}}">
                                            <button class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- HTML5 Export Buttons end -->
    </div>
</div>

@endsection

