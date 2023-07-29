@extends('admin.layouts.app')

@section('title')
Liste des utilisateurs
@endsection

@section('style')
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assetsadmin/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/sweetalert/css/sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/css/component.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/feather/css/feather.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css')}}">
    <!-- Style.css')}} -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/css/jquery.mCustomScrollbar.css')}}">
@endsection

@section('script')
  <!-- Required Jquery -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
  <!-- modernizr js -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/modernizr/js/modernizr.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
  <!-- sweet alert js -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/modal.js')}}"></script>
  <!-- sweet alert modal.js intialize js -->
  <!-- modalEffects js nifty modal window effects -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/modalEffects.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/classie.js')}}"></script>
  <!-- data-table js -->
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/js/jszip.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
  <!-- i18next.min.js')}} -->
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next/js/i18next.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
  <!-- Custom js -->
  <script src="{{ asset('assetsadmin/files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/js/pcoded.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/js/vartical-layout.min.js')}}"></script>
  <script src="{{ asset('assetsadmin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/js/script.js')}}"></script>
<!-- Global site tag (gtag.js')}}) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
@endsection

@section('header')
<!-- Page-header start -->
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Liste des utilisateurs</h4>
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
        <!-- HTML5 Export Buttons table start -->
        <div class="card">
            <div class="card-header table-card-header row">
                <div class="col-9">
                    <h5>Utilisateurs</h5>
                </div>
                <div class="col-3"> <a href="{{ route('users.create')}}">
                    <button class="btn btn-primary mr-2" title="Ajouter un utilisateur"> <i class="fa fa-user-plus"></i> </button>
                </a></div>

                @include('admin.flash-message')
            
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="basic-btn" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Est_actif</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><img src="{{ Storage::url($user->avatar) }}" alt="" data-toggle="lightbox" class="img-fluid img-60"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->is_admin === 0)
                                            <span class="label label-lg label-primary label-inline">User</span>
                                        @else 
                                            <span class="label label-lg label-primary label-inline">Administrator</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->is_active === 1 )
                                            <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:/wamp64/www/keenthemes/themes/metronic/theme/html/demo1/dist/src/media/svg/icons/Code/Error-circle.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                                        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            @else
                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:/wamp64/www/keenthemes/themes/metronic/theme/html/demo1/dist/src/media/svg/icons/Code/Done-circle.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                                        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        @endif
                                    </td>
                                    <td text-align="align-items-center" >
                                        <a href="{{ route('users.edit', $user->id )}}">
                                            <button class="btn btn-success mr-2" title="Modifier"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        
                                        <button type="button" class="btn btn-danger waves-effect md-trigger" data-modal="modal-9"><i class="fa fa-trash"></i></button>
                                        <div class="md-modal md-effect-9" id="modal-9">
                                            <div class="md-content">
                                                <h3 >Êtes-vous sûre de vouloir supprimer ?</h3>
                                                <div>
                                                    <p class="text-center">Cet utilisateur ne pourra plus être restaurer </p>
                                                    
                                                    <a href="{{ route('users.destroy', $user->id )}}">
                                                        <button class="btn btn-primary" title="Supprimer">Valider</button>
                                                    </a>
                                                    <br>
                                                    <button type="button" class="btn btn-default waves-effect md-close">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
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

