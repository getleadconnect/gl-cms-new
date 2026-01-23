@extends('app.design')
@section('css')
@endsection
@section('code')

    <div class="main-content-container px-4 container-fluid">
        <div class="page-header py-4 no-gutters row">
            <div class="ml-sm-auto mr-sm-auto text-center text-md-left mb-sm-0 col-12 col-sm-4 col-md-12"><span
                    class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-4 pt-3 card card-small">
                    <div class="border-bottom text-center card-header">
                        <div class="mb-3 mx-auto">
                            {{ Html::image('dummy/dummy-user.png', 'getlead', ['width' => '110px', 'class' => 'rounded-circle']) }}
                        </div>
                        <h4 class="mb-0">{{ $users->name }}</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="px-4 list-group-item">
                            <div class="progress-wrapper"><strong class="text-muted d-block mb-2">Profile</strong>
                                <div class="progress-sm progress">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $percentage }}%;"><span
                                            class="progress-value">{{ $percentage }}</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mb-4 card card-small">
                    <div class="border-bottom card-header">
                        <h6 class="m-0">Account Details</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="p-3 list-group-item">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('update-user-details') }}" method="POST"
                                        enctype="multipart/form-data" id="userForm">
                                        @csrf
                                        <input type="hidden" value="{{ $users->id }}" name="user_id">
                                        <div class="form-group col-md"><label for="name">
                                                Name</label><input id="name" name="name" placeholder="Name"
                                                class="form-control" value="{{ $users->name }}">
                                        </div>
                                        <div class="form-group col-md"><label for="email">Email</label><input
                                                type="email" id="email" name="email" placeholder="Email Address"
                                                autocomplete="email" class="form-control" value="{{ $users->email }}">
                                        </div>
                                        <div class="form-group col-md"><label for="passwordNow">Current Password</label><input
                                                type="password" id="passwordNow" name="passwordNow"
                                                placeholder="Current Password" autocomplete="current-password"
                                                class="form-control" value="">
                                        </div>
                                        <div class="form-group col-md"><label for="password">New Password</label><input
                                                type="password" id="password" name="password" placeholder="Password"
                                                autocomplete="current-password" class="form-control" value="">
                                        </div>
                                        <div class="form-group col-md"><label for="rePassword">Confirm
                                                Password</label><input type="password" id="rePassword" name="rePassword"
                                                placeholder="confirm Password" autocomplete="current-password"
                                                class="form-control" value="">
                                        </div>
                                        <button class="btn btn-accent">Update Account</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <style>
        .error {
            color: red;
            margin-left: 5px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userForm').validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true,
                        minlength: 2 //for length of lastname
                    },
                    passwordNow: {
                        required: true,
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    rePassword: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password" //for checking both passwords are same or not
                    },
                },
                messages: {
                    name: " Please enter your name",
                    email: {
                        required: " Please enter email",
                        email: "Enter valid Email id",
                    },
                    passwordNow: {
                        required: " Please enter current password",
                    },
                    password: {
                        required: " Please enter a password",
                        minlength: " Your password must be consist of at least 6 characters"
                    },
                    rePassword: {
                        required: " Please enter a password",
                        minlength: " Your password must be consist of at least 6 characters",
                        equalTo: " Please enter the same password as above"
                    },
                }
            });
        });
    </script>
@endsection
@endsection
