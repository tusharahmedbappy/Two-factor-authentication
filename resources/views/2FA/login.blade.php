@extends('2FA.fame')
@section('form_content')
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        <form class="login-form" action="/loging" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
    
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
    
    
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <small>Remember Me</small>
                </label>
                <button type="submit" class="btn btn-login float-right">Submit</button>
            </div>
    
        </form>
        <div class="copy-text">Have not an account
            <i class="fa fa-user"></i>
            <a href="{{url('/user-register')}}">SignUp</a>
        </div>
    </div>
@endsection



