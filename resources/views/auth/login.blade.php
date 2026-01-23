<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Getlead Backend</title>
    <meta name="description"
        content="A premium collection of beautiful hand-crafted Bootstrap 4 admin dashboard templates and dozens of custom components built for data-driven applications.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{ Html::style('styles/bootstrap.min.css') }}
    {{ Html::style('styles/shards-dashboards.1.3.1.min.css') }}
    {{ Html::style('styles/extras.1.3.1.min.css') }}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>
        label.error {
             color: #dc3545;
             font-size: 14px;
        }
    </style>
</head>

<body class="h-100">

    <div class="container-fluid icon-sidebar-nav h-100">
        <div class="row h-100">
            <main class="main-content col">
                <div class="main-content-container container-fluid px-4 my-auto h-100">
                    <div class="row no-gutters h-100">
                        <div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
                            <div class="card">
                                <div class="card-body">
                                    <img class="auth-form__logo d-table mx-auto mb-3"
                                        src="images/shards-dashboards-logo.svg"
                                        alt="Shards Dashboards - Register Template">
                                    <h5 class="auth-form__title text-center mb-4">Access Your Account</h5>
                                    <form action="{{ route('log-in') }}" method="POST" enctype="multipart/form-data" id="loginForm">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="email" value="{{ old('email') }}" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Access
                                            Account</button>
                                    </form>
                                </div>
                                <div class="card-footer border-top">
                                    <ul class="auth-form__social-icons d-table mx-auto">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="auth-form__meta d-flex mt-4">
                                {{-- <a href="forgot-password.html">Forgot your password?</a> --}}
                                <a class="ml-auto" href="{{ route('register-page') }}">Create new account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    {{ Html::script('scripts/jquery-3.3.1.min.js') }}
    {{ Html::script('scripts/popper.min.js') }}
    {{ Html::script('scripts/bootstrap.min.js') }}
    {{ Html::script('scripts/Chart.min.js') }}
    {{ Html::script('scripts/shards.min.js') }}
    {{ Html::script('scripts/jquery.sharrre.min.js') }}
    {{ Html::script('scripts/extras.1.3.1.min.js') }}
    {{ Html::script('scripts/shards-dashboards.1.3.1.min.js') }}
    {{ Html::script('scripts/jquery.dataTables.min.js') }}
    {{ Html::script('scripts/dataTables.responsive.min.js') }}
    {{ Html::script('scripts/toastr.min.js') }}
    {{ Html::script('scripts/extras.1.3.1.min.js') }}
    {{ Html::script('scripts/shards-dashboards.1.3.1.min.js') }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginForm").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                        maxlength: 50
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                },
                messages: {
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                        maxlength: "Email cannot be more than 50 characters",
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 6 characters"
                    },
                }
            });
        });
    </script>
</body>

</html>
