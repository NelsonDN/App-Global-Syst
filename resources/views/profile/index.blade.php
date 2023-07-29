@extends('admin.layouts.app')

@section('title')
Profil - {{ $user->name }}
@endsection

@section('script')
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
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    
    
     <!-- Bootstrap date-time-picker js -->
     <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>
     <!-- Date-range picker js -->
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
     <!-- Date-dropper js -->
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/datedropper/js/datedropper.min.js')}}"></script>
     <!-- data-table js -->
     <script src="{{ asset('assetsadmin/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
     <!-- ck editor -->
     <script src="{{ asset('assetsadmin/files/assets/pages/ckeditor/ckeditor.js')}}"></script>
     <!-- echart js -->
     <script src="{{ asset('assetsadmin/files/assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>
     <!-- i18next.min.js -->
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next/js/i18next.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/assets/pages/user-profile.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/assets/js/pcoded.min.js')}}"></script>
     <script src="{{ asset('assetsadmin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/chart.js/js/Chart.js')}}"></script>
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
    <!-- Required Fremwork -->

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/datedropper/css/datedropper.min.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/icofont/css/icofont.css')}}">

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
                    <h4>Profil Utilisateur</h4>
                    <span>Consultez l'ensemble de vos informations personnels ici :)</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">User Profile</a>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->

@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="cover-profile">
            <div class="profile-bg-img">
                <img class="profile-bg-img img-fluid" src="{{ asset('assetsadmin/files/assets/images/user-profile/ibg1.jpg')}}" alt="bg-img">
                <div class="card-block user-info">
                    <div class="col-md-12">
                        <div class="media-left">
                            <a href="#" class="profile-image">
                                <img class="user-img img-radius" src="{{ Storage::url($user->avatar) }}" height="90px" alt="user-img">
                            </a>
                        </div>
                        <div class="media-body row">
                            <div class="col-lg-12">
                                <div class="user-title">
                                    <h2>{{ $user->name }}</h2>
                                    <span class="text-white">
                                        @if($user->is_admin === 0)
                                            Statut : Membre de la communauté GlobalSyst
                                        @else 
                                            Statut : Administrateur
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="pull-right cover-btn">
                                    <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--profile cover end-->
<div class="row">
    <div class="col-lg-12">
        <!-- tab header start -->
        <div class="tab-header card">
            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Infos personnels</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Carnets de notes</a>
                    <div class="slide"></div>
                </li>

            </ul>
        </div>
        <!-- tab header end -->
        <!-- tab content start -->
        <div class="tab-content">
            <!-- tab panel personal start -->
            <div class="tab-pane active" id="personal" role="tabpanel">
                <!-- personal card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">A Propos de moi</h5>
                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
    <i class="icofont icofont-edit"></i>
</button>
                    </div>
                    <div class="card-block">
                        <div class="view-info">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="general-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Nom complet</th>
                                                                <td>{{ $user->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Mot de passe</th>
                                                                <td>******</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end of table col-lg-6 -->
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>{{ $user->email }}</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end of table col-lg-6 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of general info -->
                                </div>
                                <!-- end of col-lg-12 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of view-info -->
                        <div class="edit-info">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="general-info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <table class="table">
                                                    <tbody>
                                                        <form method="POST" action="{{ route('profile.update', $user->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                        <tr>
                                                            <td>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-ssl-security"></i></span>
                                                                    <input type="password" name="password" class="form-control" placeholder="password">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-shield"></i></span>
                                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end of table col-lg-6 -->
                                            <div class="col-lg-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-at"></i></span>
                                                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end of table col-lg-6 -->
                                        </div>
                                        <!-- end of row -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20">Save</button>
                                            <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- end of edit info -->
                                </div>
                                <!-- end of col-lg-12 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of edit-info -->
                    </div>
                    <!-- end of card-block -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Description à propos de moi</h5>
                                <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
            <i class="icofont icofont-edit"></i>
        </button>
                            </div>
                            <div class="card-block user-desc">
                                <div class="view-desc">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                                </div>
                                <div class="edit-desc">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- personal card end-->
            </div>
            <!-- tab pane personal end -->
            <!-- tab pane info start -->
            <div class="tab-pane" id="binfo" role="tabpanel">
                <!-- info card start -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Carnet de notes</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            @foreach($notes as $note)
                            <div class="col-md-6">
                                <div class="card b-l-success business-info services m-b-20">
                                    <div class="card-header">
                                        <div class="service-header">
                                            <a href="#">
                                                <h5 class="card-header-text">{{ $note->titre }}</h5>
                                            </a>
                                        </div>
                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                            </span>
                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                            <button type="button" class="btn dropdown-item btn-default waves-effect" data-toggle="modal" data-target="#default-Modal-{{ $note->id }}"><i class="icofont icofont-edit"></i> Edit</button>
                                            <a class="dropdown-item" href="{{ route('notes.destroy', $note->id) }}"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-eye-alt"></i> View</a>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="task-detail">{{ $note->description }}</p>
                                            </div>
                                            <!-- end of col-sm-8 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    
                                    <!-- end of card-block -->
                                </div>
                            </div>
                            @endforeach

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center m-l-0">
                                            <button type="button" class="btn center btn-default waves-effect" data-toggle="modal" data-target="#default-Modal"><i class="icofont icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div>
                                <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ajouter une note</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('notes.store') }}" >
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Titre</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="titre" >
                                                        @error('titre')
                                                            <li style="color:red;">{{ $message }}</li>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="description" >
                                                        @error('description')
                                                            <li style="color:red;">{{ $message }}</li>
                                                        @enderror
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Enregistrer</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info card end -->
            </div>
            <!-- tab pane info end -->
           
        </div>
        <!-- tab content end -->
    </div>
</div>


@endsection

