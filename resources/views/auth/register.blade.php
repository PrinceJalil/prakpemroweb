<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/stylelogin.css" />
  </head>
  <body>
    <div class="container">
      <form method="POST" action="{{ route('register') }}">
      @csrf
        <h2 style="text-align: center;">Register</h2>

        <div class="input-box">
          <label for="name" :value="__('Name')"/>
          <input id="name" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name"/>
        </div>

        <div class="input-box">
          <label for="email" :value="__('Email')"/>
          <input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username"/>
        </div>

        <div class="input-box">
          <label for= "password" :value="__('Password')"/>
          <input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"/>
        </div>

        <div class="input-box">
          <label for= "password_confirmation" :value="__('Confirm Password')"/>
          <input id="password" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"/>
        </div>

        <button type="submit" class="btn">{{ __('Register') }}</button>

        <div class="register-link">
          <p><a href="{{ route('login') }}">Alerdy registered?</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
