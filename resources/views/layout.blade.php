<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{ asset('images/sistematrazvalor.png') }}">
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var dataInputs = document.querySelectorAll('.data');
                dataInputs.forEach(function(input) {
                    Inputmask("99/99/9999").mask(input);
                });
            });
        </script>
        
        <style type="text/css">
            .estrelas input[type=radio] {
                display: none;
                
            }
            .estrelas label i.fa:before {
            content:'\f005';
            color: #FC0;
            font-size: 30px;
            
            }
            .estrelas input[type=radio]:checked ~ label i.fa:before {
            color: #CCC;
            }
            .estrelas td i.fa {
            content:'\f005';
            color: #FC0;
            font-size: 10px;
            
            }
            
        </style>



    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        
                        <a href="{{ route('index') }}" class="logo">
                            
                            <img src="{{ asset('images/logo-sistema-traz-valor.jpeg') }}" alt=""   width="120" class="mt-3">
                        </a>
                        

                    </div>
                    <div class="menu-extras topbar-custom">
                    <a href="{{ route('deslogar') }}"><button class="mt-4 float-right  btn btn-danger pull-left">Sair</button></a>
                    </div>

                    <!-- End Logo container-->


                    
                    <!-- end menu-extras -->

                    <div class="clearfix pb-3 "></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            
        </header>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        
        @yield('content')

        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        Copyright ©2024 <span class="d-none d-sm-inline-block"> - Sistema Traz Valor. Todos os direitos reservados</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/waves.min.js') }}"></script>

        <script src="{{ asset('plugins/jquery.sparkline.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        

    </body>

</html>