<?php header('Content-Type: text/html'); ?><!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Labs menu</title>
  <base target="_blank" />
  <link type="image/png" href="./icon_self.png" rel="icon" />
  <link type="image/png" href="./icon_self.png" rel="favicon" />
  <link type="image/png" href="./icon_self.png" rel="apple-touch-icon" />
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LfCHdcUAAAAAOwkHsW_7W7MfoOrvoIw9CXdLRBA"></script>
  <script type="text/javascript">
    grecaptcha.ready(function() {
      localStorage.setItem( (btoa(location.href)).slice(0, 16) + 'reCAPTCHA', JSON.stringify({token: ''}) );
      grecaptcha.execute('6LfCHdcUAAAAAOwkHsW_7W7MfoOrvoIw9CXdLRBA', {action: 'homepage'}).then(function(token) {
        localStorage.setItem( (btoa(location.href)).slice(0, 16) + 'reCAPTCHA', JSON.stringify({token: token}) );
      });
    });
  </script>
  <style media="screen">
    li:nth-child(even){
      background-color: azure;
    }
    li{
      list-style: none;
      font-size: large;
      height: 1.5em;

      /* 画面中央寄せ */
      left: 50%;
      transform: translate(50%);
      width: 50%;
    }
    li a{
      vertical-align: middle;
      text-decoration: none;
    }
    li img{
      height: 1em;
    }
  </style>
  </head>
  <body>
    <li><a href="https://github.com/n138-kz"><img src="icon_github.png" alt="" />Github</a></li>
    <li><a href="http://fam2cgdyfaa0p63g.n138.jp:56080/labs/"><img src="icon_self.png" alt="" />nbs01</a></li>
    <?php
      foreach( glob('../*') as $key => $val ){
        if( false ){
        } elseif( ! is_dir($val) ){
          continue;
        } elseif( $val == '../' . basename( __DIR__ ) ){
          continue;
        }
        echo '<li><a href="' . $val . '"><img src="icon_self.png" alt="" />' . substr($val, strrpos($val, '/')+1) . '</a></li>';
      }
    ?>
  </body>
</html>
