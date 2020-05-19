@extends('layouts.login')

@section('content')

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">

            <div class="signup-image">
                <figure><img src="{{asset('user')}}/images/signimg.jpeg" alt="sing up image"></figure>
            </div>

            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="num"><i class="zmdi zmdi-confirmation-number"></i></label>
                        <input type="num" name="num" id="num" placeholder="Phone #" />
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="{{asset('terms')}}" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" class="form-submit" value="Register" />
                    </div>
                    <a href="{{route('login')}}" class="signup-image-link" style="color: Red;">I am already member</a>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection