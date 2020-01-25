@extends('2FA.fame')

@section('form_content')
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Registetion Now</h2>
        <form class="login-form" action="/signup" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="text-uppercase">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="emal"  class="text-uppercase">email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
    
            </div>
            <div class="form-group">
                <label for="password" class="text-uppercase">Password</label>
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
            <a href="{{url('/')}}">Back to Login</a>
        </div>
    </div>
@endsection



