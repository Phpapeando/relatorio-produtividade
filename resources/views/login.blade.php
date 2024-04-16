<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login - Relatório de Produtividade</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{ asset('images/sistematrazvalor.png') }}">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        
        
        
    </head>

    <body>

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="{{ asset('images/logo-sistema-traz-valor.jpeg') }}" height="100" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Página de Relatórios</h4>
                        <p class="text-muted text-center">Sistema Traz Valor</p>

                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('logar') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Nome</label>
                                <input type="text" class="form-control" id="username" name="name" placeholder="Nome">
                            </div>

                            <div class="form-group">
                                @if (session('error'))<p class="alert alert-danger">{{ session('error') }}</p>@endif
                                <label for="userpassword">Chave do seu setor</label>
                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Chave">
                            </div>
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>

            

        </div>

        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>