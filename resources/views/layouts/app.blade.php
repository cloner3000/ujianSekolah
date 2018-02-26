<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('image/tercyduk.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('image/tercyduk.png')}}" type="image/x-icon">

    <title>{{ config('app.name', 'U-LAH') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- DataTable Plugin -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">

    {{-- Icon --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">

    {{-- TimePicker --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/timingfield.css')}}">

    {{-- DateTimePicker --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.min.css')}}">

    {{-- Froala --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_style.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/froala_editor.pkgd.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/froala_style.min.css') }}"> --}}


    {{-- PleaseWait.js Preloader  --}}
    {{-- <link href="{{ asset('css/please-wait.css') }}" rel="stylesheet"> --}}

    {{-- Select Picker --}}
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sample.css') }}">

    {{-- <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> --}}
    {{-- <script src="//cdn.ckeditor.com/4.5.10/standard-all/ckeditor.js"></script>
    <script src="{{ asset('js/ckfinder.js') }}"></script> --}}

    <style type="text/css">
        .close-btn{
            color: red;
            position: absolute;
            top: 10px;
            right: 30px;
        }

        #app {
            visibility: hidden;
        }

        .loading {
            width: 60px;
            height: 60px;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 60px;
            margin: auto;
            z-index: 99999999999999999;
            background : transparent;
        }
        .sk-folding-cube {
          margin: 20px auto;
          width: 40px;
          height: 40px;
          position: relative;
          -webkit-transform: rotateZ(45deg);
                  transform: rotateZ(45deg);
        }

        .sk-folding-cube .sk-cube {
          float: left;
          width: 50%;
          height: 50%;
          position: relative;
          -webkit-transform: scale(1.1);
              -ms-transform: scale(1.1);
                  transform: scale(1.1);
        }
        .sk-folding-cube .sk-cube:before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: cyan;
          -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
                  animation: sk-foldCubeAngle 2.4s infinite linear both;
          -webkit-transform-origin: 100% 100%;
              -ms-transform-origin: 100% 100%;
                  transform-origin: 100% 100%;
        }
        .sk-folding-cube .sk-cube2 {
          -webkit-transform: scale(1.1) rotateZ(90deg);
                  transform: scale(1.1) rotateZ(90deg);
        }
        .sk-folding-cube .sk-cube3 {
          -webkit-transform: scale(1.1) rotateZ(180deg);
                  transform: scale(1.1) rotateZ(180deg);
        }
        .sk-folding-cube .sk-cube4 {
          -webkit-transform: scale(1.1) rotateZ(270deg);
                  transform: scale(1.1) rotateZ(270deg);
        }
        .sk-folding-cube .sk-cube2:before {
          -webkit-animation-delay: 0.3s;
                  animation-delay: 0.3s;
        }
        .sk-folding-cube .sk-cube3:before {
          -webkit-animation-delay: 0.6s;
                  animation-delay: 0.6s;
        }
        .sk-folding-cube .sk-cube4:before {
          -webkit-animation-delay: 0.9s;
                  animation-delay: 0.9s;
        }
        @-webkit-keyframes sk-foldCubeAngle {
          0%, 10% {
            -webkit-transform: perspective(140px) rotateX(-180deg);
                    transform: perspective(140px) rotateX(-180deg);
            opacity: 0;
          } 25%, 75% {
            -webkit-transform: perspective(140px) rotateX(0deg);
                    transform: perspective(140px) rotateX(0deg);
            opacity: 1;
          } 90%, 100% {
            -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
            opacity: 0;
          }
        }

        @keyframes sk-foldCubeAngle {
          0%, 10% {
            -webkit-transform: perspective(140px) rotateX(-180deg);
                    transform: perspective(140px) rotateX(-180deg);
            opacity: 0;
          } 25%, 75% {
            -webkit-transform: perspective(140px) rotateX(0deg);
                    transform: perspective(140px) rotateX(0deg);
            opacity: 1;
          } 90%, 100% {
            -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
            opacity: 0;
          }
        }

        .btn-fixed-bottom-right{
            position: fixed;
            bottom: 25px;
            right: 25px;
        }

       .z-top{
	       z-index: 4;
        }

    </style>

    @yield('css')
</head>
<body>
    <div class="loading">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span><img src="{{asset('image/Facepalm_30px.png')}}" alt="brand">
                        {{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('settings') }}">Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    {{-- JQuery --}}
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>

    {{-- CKEditor --}}
    {{-- <script src="//cdn.ckeditor.com/4.5.10/standard-all/ckeditor.js"></script>
    <script src="{{ asset('js/ckfinder.js') }}"></script> --}}
    {{-- <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script> --}}
    {{-- <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script> --}}
    {{-- <script>
        // Note: in this sample we use CKEditor with two extra plugins:
        // - uploadimage to support pasting and dragging images,
        // - image2 (instead of image) to provide images with captions.
        // Additionally, the CSS style for the editing area has been slightly modified to provide responsive images during editing.
        // All these modifications are not required by CKFinder, they just provide better user experience.
        if ( typeof CKEDITOR !== 'undefined' ) {
            CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
            var editor = CKEDITOR.replace( 'soal', {
                extraPlugins: 'uploadimage',
                removePlugins: 'image',
                height:350
            } );
            CKFinder.setupCKEditor( editor );
        } else {
            document.getElementById( 'soal' ).innerHTML = '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor from CDN.</div>'
        }
    </script> --}}

    {{-- CDN --}}
    {{-- <script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-3.1.1.min.js"></script> --}}

    {{-- Fallback (Local) --}}
    {{-- <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-3.1.1.min.js') }}">\x3C/script>')</script> --}}

    {{-- Fadeout Loading Screen --}}
    <script type="text/javascript">
        $(window).on('load', function() {
            $(".loading").fadeOut("slow", function() {
                $("#app").css('visibility', 'visible');
            });
        });
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#tableGuru").DataTable(); // Menambahkan pencarian ke table guru di menu kelola-guru (admin)
            $("#tableSiswa").DataTable(); // Menambahkan pencarian ke table siswa di menu kelola-siswa (admin)
            $("#tableSoal").DataTable(); // Menambahkan pencarian ke table soal di menu edit-ujian (admin)
        });

        // Preview gambar dari file chooser.
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#foto").change(function(){
            readURL(this);
        });
    </script>

    {{-- Alert --}}
    <script src="{{ asset('js/sweetalert2.js') }}"></script>

    @include('layouts.messages')

    {{-- TimePicker --}}
    <script src="{{ asset('js/timingfield.min.js')}}"></script>
    <script>
        $(".timing").timingfield({
            maxHour: 23,
            width: 263,
            hoursText: 'H',
            minutesText: 'M',
            secondsText: 'S'
        });
    </script>

    {{-- Moment buat DateTimePicker --}}
    <script src="{{ asset('js/moment.js')}}"></script>

    {{-- DateTimePicker --}}
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script>
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-M-DD'
        });
    </script>

    {{-- Toggle Select Bikin Soal --}}
    <script type="text/javascript">
        $('#tipe').on('change', function(){
           var $value = $(this).children().attr('value');
           if($value == 'BS'){
               $('.PG').slideToggle();
               $('.BS').slideToggle();
           }else if($value == "PG"){
               $('.PG').slideToggle();
               $('.BS').slideToggle();
           }
        });
    </script>

    {{-- Froala --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/froala_editor.pkgd.min.js') }}"></script> --}}
    {{-- <script> $(function() { $('.froala-editor').froalaEditor() }); </script> --}}
    @yield('js')
</body>
</html>
