<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/stylelogin.css" />
  </head>
  <body>
    <div class="container">
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <h1>Login</h1>

        <div class="input-box">
          <label for=""email" :value="__('Email')"/>
          <input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username"/>
          <i class="bx bxs-user"></i>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="input-box">
          <label for= "password" :value="__('Password')"/>
          <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password"/>
          <i class="bx bxs-lock-alt"></i>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="remember-forgot">
          <label for="remember_me"><input type="checkbox" />Remember me</label>
          @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
        </div>

        <button type="submit" class="btn">{{ __('Login') }}</button>

        <div class="register-link">
          <p>Don't have an account? <a href="{{ route('register') }}">Register here!</a></p>
        </div>
      </form>
    </div>
  </body>
</html>