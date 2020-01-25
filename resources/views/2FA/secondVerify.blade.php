<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Two | Factor | Authentication</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <style>
            body {
                width: 960px;
                margin: 45px auto;
                background-color: #6665ee;
            }
        </style>
    </head>

    <body>
        <div class="">
            <div class="col-md-6 m-auto">
                <div class="container pb-5">
                    <h3 class="pt-5 text-center">Verify with OTP</h3>
                    <hr>
                    <form action="/OTP-Verify" method="POST">
                        @csrf
                        <div class="form-group">
                            
                            <div class="input-group">
                                <span  class="btn btn-warning">Code</span>
                                <input type="text" class="form-control" placeholder="OTP Code" name="OTP" required>
                                
                            </div>
                            <div class="pl-5">
                                <small class="text-info">Please fill up the OTP field within 40 Seconds</small>
                            </div>
                            <div class="pl-5">
                                @if(session('unvalidOTP'))
                                <strong class="text-danger">
                                    {{session('unvalidOTP')}}
                                </strong>
                                @endif
                                @if(session('timeout'))
                                <strong class="text-danger">
                                    {{session('timeout')}}
                                </strong>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-5 row">
                            <div class="col-md-6 text-center">
                                <a href="/resendOTP" class="btn btn-danger">Resend</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-success px-5">Submit</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <script src="{{asset('js/app.js')}}"></script>
    </body>

</html>