@extends('admin.layouts.app')

@section('title')
Création d'un projet
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
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/chart.js/js/Chart.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js'"></script>
    <script type="text/javascript" src="{{ asset('assetsadmin/files/assets/pages/form-validation/validate.js')}}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assetsadmin/files/assets/pages/forms-wizard-validation/form-wizard.js')}}"></script>
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
    
    <script type="text/javascript">

        $(document).ready(function() {

            // Rechercher une region
            $('select[name="pays"]').on('change', function() {
                var paysID = $(this).val();
                if(paysID) {
                    $.ajax({
                        url: '/region/'+paysID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {                      
                            $('select[name="region"]').empty();
                            $.each(data, function(key, value) {
                            $('select[name="region"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="region"]').empty();
                }
            });

            // Rechercher une ville
            $('select[name="region"]').on('change', function() {
                var regionID = $(this).val();
                if(regionID) {
                    $.ajax({
                        url: '/ville/'+regionID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {                      
                            $('select[name="ville"]').empty();
                            $.each(data, function(key, value) {
                            $('select[name="ville"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="ville"]').empty();
                }
            });

        });
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Enregistrer";
            } else {
                document.getElementById("nextBtn").innerHTML = "Suivant";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            e = x[currentTab].getElementsByTagName("select");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
                }
            }
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" bg-primary", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " bg-primary";
        }

        $(document).ready(function() {
            let tbody = $('#tbody');
            let add = $('#add_row');
            
            $(add).click(function(e) {
                e.preventDefault();
                //Add row
                row = '';
                row += '<tr><td><input type="text" class="form-control"></td><td ><input type="date" class="form-control"></td><td><input type="date" class="form-control"></td><td><input type="number" class="form-control"></td><td><input type="number" class="form-control"></td>';
                row += '<td><button class="btn btn-outline-danger delete_row">remove</button></td></tr>';
                
                var result = tbody.children('.td')[0].outerHTML
                tbody.append(result);
            })

            $("#add_table").on('click', '.delete_row', function() {
                $(this).closest('tr').remove();
            });

        });

        $(document).ready(function(){
            let btn = $('#plus');
            let section = $('#elm');
            let minus = $('#minus');
            minus.hide();

            var i;
            // var add = "<div class='row' id='elm'><div class='col-12-xl col-lg-6 col-12 form-group'><label>Teachings Name *</label><input type='text' value='{{old('name.*')}}' name='name' placeholder='' class='form-control'></div><div class='col-12 form-group mg-t-8'>@error('name.*')<span class='form-text text-muted mr-5' role='alert'><strong class='text-danger'>{{ $message }}</strong></span>@enderror";
            $(btn).click(function(e){
                i++;
                e.preventDefault();
                var result = section.children('.row')[0].outerHTML;
                section.append(result);
                minus.show();
            })

        

            $(minus).click(function(e){
                // i--;
                e.preventDefault();
                $result = $('#elm').children();
                $result.last().remove();
                if($result.length < 3){
                    minus.hide();
                    console.log($result.length);
                }
                // console.log($result.length);
                
            })
        })

    </script>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

    {{-- ADD REMOVE --}}
    <link rel="stylesheet" href="{{asset('asset/css/normalize.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('asset/fonts/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('asset/css/select2.min.css')}}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/jquery.dataTables.min.css')}}">


    {{-- END ADD REMOVE --}}
    <style>
        /* Hide all steps by default: */
        .tab {
        display: none;
        }

        /* Mark the active step: */
        .step.active {
        opacity: 1;
        }

        select.invalid {
            background-color: #ffdddd;
        }

        input.invalid {
            background-color: #ffdddd;
        }
        /* Mark the steps that are finished and valid: */
        .step.finish {
        background-color: #ade6d1;
        } 
    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/assets/icon/feather/css/feather.css')}}">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsadmin/files/bower_components/jquery.steps/css/jquery.steps.css')}}">
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
                    <h4>Création d'un projet</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('projets.index') }}">Liste des projets</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('projets.create') }}">Ajouter un projet</a>
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
                <h5>Dimensionnement D'une Installation Solaire</h5>
                <span>Bien vouloir<code>remplir tous</code>les<code>champs</code>!</span>
            </div>
            <div class="card-block box-list">
                <div class="row">
                    <div class="col-4 m-0 bg-primary step">
                        <h3>1. <span class="f-22">Données géographiques</span></h3>
                    </div>
                    <div class="col-4 m-0 step">
                        <h3>2. <span class="f-22">Appareillage</span></h3>
                    </div>
                    <div class="col-4 m-0 step">
                        <h3>3. <span class="f-22">Choix du matériel</span></h3>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <form id="regForm" method="POST" action="{{ route('projets.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="tab">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pays</label>
                            <div class="col-sm-10">
                                <select name="pays"  class="form-control">
                                    <option value="" selected >-- Selectionner un pays --</option>
                                    @foreach ($pays as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('pays')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Region</label>
                            <div class="col-sm-10">
                                <select name="region"  class="form-control">
                                    <option value="" selected >-- Selectionner une region --</option>
                                </select>
                                @error('region')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ville</label>
                            <div class="col-sm-10">
                                <select name="ville"  class="form-control">
                                    <option value="" selected >-- Selectionner une ville --</option>
                                </select>
                                @error('ville')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="m-3">
                            <table id="add_table" class="table" data-toggle="table" data-mobile-responsive="true">
                              <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Nom</th>
                                    <th>Puissance</th>
                                    <th>Temps</th>
                                    {{-- <th>Valeur (Wh)</th> --}}
                                  <th>
                                    <button class="btn btn-success" id="add_row" class="add"> <i class="fa fa-plus"></i></button>
                                  </th>
                                </tr>
                              </thead>
                              
                              <tbody id="tbody">
                                <tr class="td">
                                  <td>
                                    <input type="number" name="nombre[]" class="form-control">
                                  </td>
                                  <td>
                                    <input type="text"  name="name[]" class="form-control">
                                  </td>
                                  <td>
                                    <input type="text"  name="puissance[]" class="form-control">
                                  </td>
                                  <td>
                                    <input type="text" name="temps[]" class="form-control">
                                  </td>
                                  {{-- <td>
                                    <p>360 Wh</p>
                                  </td> --}}
                                  <td>
                                    <button class="btn btn-danger delete_row"><i class="fa fa-minus"></i></button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type de batterie</label>
                            <div class="col-sm-10">
                                <select name="batterie" class="form-control">
                                    <option value="" selected >-- Selectionner une batterie --</option>
                                    <option value="0">Lithuim</option>
                                    <option value="1">LiPo</option>
                                </select>
                                @error('role')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tension</label>
                            <div class="col-sm-10">
                                <select name="tension_batterie" class="form-control">
                                    <option value="" selected >-- Selectionner un pays --</option>
                                    <option value="0">12V</option>
                                    <option value="1">24V</option>
                                </select>
                                @error('role')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type de PV</label>
                            <div class="col-sm-10">
                                <select name="pv" class="form-control">
                                    <option value="" selected >-- Selectionner un PV --</option>
                                    <option value="0">Aluminium</option>
                                    <option value="1">Carbone</option>
                                </select>
                                @error('role')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tension</label>
                            <div class="col-sm-10">
                                <select name="tension_pv" class="form-control">
                                    <option value="" selected >-- Selectionner une tension --</option>
                                    <option value="0">12V</option>
                                    <option value="1">24V</option>
                                </select>
                                @error('role')
                                    <li style="color:red;">{{ $message }}</li>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" class="btn btn-inverse" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                          <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
        <!-- Basic Inputs Validation end -->
    </div>
</div>

@endsection

