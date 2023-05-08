<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style_form.css">
  <title>divIA - Se connecter</title>
  <meta name="description" content="L'intelligence artificielle (IA) est une technologie en pleine expansion qui transforme notre monde à un rythme rapide. Les informations sur l'IA sont essentielles pour comprendre comment elle peut affecter notre vie quotidienne et notre avenir en tant que société.">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a style="color: #3197d6" rel="dofollow">Se connecter</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Administrateur</span>
              <form id="stripe-login" method="get" action="{{ route('admincontroleur.login') }}">
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="admin@admin">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Mot de passe</label>
                  </div>
                  <input type="password" name="password" value="admin">
                </div>
                @if(session()->has('fail'))
                <p style="color: #ff0000; ">{{ session()->get('fail') }}</p>
                <br>
                @endif
                <div class="field padding-bottom--24">
                  <input style="background-color: #3197d6" type="submit" name="submit" value="Continue">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
</body>

</html>