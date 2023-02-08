<!DOCTYPE html>
<html>
      <?php $title = 'Se Connecter'; include('include/head.php'); ?>
<style type="text/css">
            /* @extend display-flex; */
            display-flex, .display-flex, .display-flex-center, .signup-content, .signin-content, .social-login, .socials {
              display: flex;
              display: -webkit-flex; }
            
            a:focus, a:active {
              text-decoration: none;
              outline: none;
              transition: all 300ms ease 0s;
              -moz-transition: all 300ms ease 0s;
              -webkit-transition: all 300ms ease 0s;
              -o-transition: all 300ms ease 0s;
              -ms-transition: all 300ms ease 0s; }
            
            input, select, textarea {
              outline: none;
              appearance: unset !important;
              -moz-appearance: unset !important;
              -webkit-appearance: unset !important;
              -o-appearance: unset !important;
              -ms-appearance: unset !important; }
            
            input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
              appearance: none !important;
              -moz-appearance: none !important;
              -webkit-appearance: none !important;
              -o-appearance: none !important;
              -ms-appearance: none !important;
              margin: 0; }
            
            input:focus, select:focus, textarea:focus {
              outline: none;
              box-shadow: none !important;
              -moz-box-shadow: none !important;
              -webkit-box-shadow: none !important;
              -o-box-shadow: none !important;
              -ms-box-shadow: none !important; }
            
            input[type=checkbox] {
              appearance: checkbox !important;
              -moz-appearance: checkbox !important;
              -webkit-appearance: checkbox !important;
              -o-appearance: checkbox !important;
              -ms-appearance: checkbox !important; }
            
            input[type=radio] {
              appearance: radio !important;
              -moz-appearance: radio !important;
              -webkit-appearance: radio !important;
              -o-appearance: radio !important;
              -ms-appearance: radio !important; }
            
            img {
              max-width: 100%;
              height: auto; }
            
            figure {
              position: relative;
              margin: 0; 
              border-radius:50%; }
            
            p {
              margin-bottom: 0px;
              font-size: 15px;
              color: #777; }
            
            h2 {
              line-height: 1.66;
              margin: 0;
              padding: 0;
              font-weight: bold;
              color: #222;
              font-family: Poppins;
              font-size: 36px; }
            
            main {
              background: #f8f8f8;
              }
            
            .clear {
              clear: both; }
            
            body {
              font-size: 13px;
              line-height: 1.8;
              color: #222;
              background: #f8f8f8;
              font-weight: 400;
              padding-top : 40px;
               }
            
            .container {
              width: 900px;
              background: #fff;
              margin: 0 auto;
              box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
              -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
              -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
              -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
              -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
              border-radius: 20px;
              -moz-border-radius: 20px;
              -webkit-border-radius: 20px;
              -o-border-radius: 20px;
              -ms-border-radius: 20px; }
            
            .display-flex {
              justify-content: space-between;
              -moz-justify-content: space-between;
              -webkit-justify-content: space-between;
              -o-justify-content: space-between;
              -ms-justify-content: space-between;
              align-items: center;
              -moz-align-items: center;
              -webkit-align-items: center;
              -o-align-items: center;
              -ms-align-items: center; }
            
            .display-flex-center {
              justify-content: center;
              -moz-justify-content: center;
              -webkit-justify-content: center;
              -o-justify-content: center;
              -ms-justify-content: center;
              align-items: center;
              -moz-align-items: center;
              -webkit-align-items: center;
              -o-align-items: center;
              -ms-align-items: center; }
            
            .position-center {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              -moz-transform: translate(-50%, -50%);
              -webkit-transform: translate(-50%, -50%);
              -o-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%); }
            
            .signup {
              margin-bottom: 150px; }
            
            .signup-content {
              padding: 75px 0; }
            
            .signup-form, .signup-image, .signin-form, .signin-image {
              width: 50%;
              overflow: hidden; }
            
            .signup-image {
              margin: 0 55px; }
            
            .form-title {
              margin-bottom: 33px; }
            
            .signup-image {
              margin-top: 45px; }
            
            figure {
              margin-bottom: 50px;
              text-align: center; }
            
            .form-submit {
              display: inline-block;
              background: #6dabe4;
              color: #fff;
              border-bottom: none;
              width: auto;
              padding: 15px 39px;
              border-radius: 5px;
              -moz-border-radius: 5px;
              -webkit-border-radius: 5px;
              -o-border-radius: 5px;
              -ms-border-radius: 5px;
              margin-top: 25px;
              cursor: pointer; }
              .form-submit:hover {
                background: #4292dc; }
            
            #signin {
              margin-top: 10px; }
            
            .signup-image-link {
              font-size: 14px;
              color: #222;
              display: block;
              text-align: center; }
            
            .term-service {
              font-size: 13px;
              color: #222; }
            
            .signup-form {
              margin-left: 75px;
              margin-right: 75px;
              padding-left: 34px; }
            
            .register-form {
              width: 100%; }
            
            .form-group {
              position: relative;
              margin-bottom: 25px;
              overflow: hidden; }
              .form-group:last-child {
                margin-bottom: 0px; }
            
            input {
              width: 100%;
              display: block;
              border: none;
              border-bottom: 1px solid #999;
              padding: 6px 30px;
              font-family: Poppins;
              box-sizing: border-box; }
              input::-webkit-input-placeholder {
                color: #999; }
              input::-moz-placeholder {
                color: #999; }
              input:-ms-input-placeholder {
                color: #999; }
              input:-moz-placeholder {
                color: #999; }
              input:focus {
                border-bottom: 1px solid #222; }
                input:focus::-webkit-input-placeholder {
                  color: #222; }
                input:focus::-moz-placeholder {
                  color: #222; }
                input:focus:-ms-input-placeholder {
                  color: #222; }
                input:focus:-moz-placeholder {
                  color: #222; }
            
            input[type=checkbox]:not(old) {
              width: 2em;
              margin: 0;
              padding: 0;
              font-size: 1em;
              display: none; }
            
            input[type=checkbox]:not(old) + label {
              display: inline-block;
              line-height: 1.5em;
              margin-top: 6px; }
            
            input[type=checkbox]:not(old) + label > span {
              display: inline-block;
              width: 13px;
              height: 13px;
              margin-right: 15px;
              margin-bottom: 3px;
              border: 1px solid #999;
              border-radius: 2px;
              -moz-border-radius: 2px;
              -webkit-border-radius: 2px;
              -o-border-radius: 2px;
              -ms-border-radius: 2px;
              background: white;
              background-image: -moz-linear-gradient(white, white);
              background-image: -ms-linear-gradient(white, white);
              background-image: -o-linear-gradient(white, white);
              background-image: -webkit-linear-gradient(white, white);
              background-image: linear-gradient(white, white);
              vertical-align: bottom; }
            
            input[type=checkbox]:not(old):checked + label > span {
              background-image: -moz-linear-gradient(white, white);
              background-image: -ms-linear-gradient(white, white);
              background-image: -o-linear-gradient(white, white);
              background-image: -webkit-linear-gradient(white, white);
              background-image: linear-gradient(white, white); }
            
            input[type=checkbox]:not(old):checked + label > span:before {
              content: '\f26b';
              display: block;
              color: #222;
              font-size: 11px;
              line-height: 1.2;
              text-align: center;
              font-family: 'Material-Design-Iconic-Font';
              font-weight: bold; }
            
            .agree-term {
              display: inline-block;
              width: auto; }
            
            label {
              position: absolute;
              left: 0;
              top: 50%;
              transform: translateY(-50%);
              -moz-transform: translateY(-50%);
              -webkit-transform: translateY(-50%);
              -o-transform: translateY(-50%);
              -ms-transform: translateY(-50%);
              color: #222; }
            
            .label-has-error {
              top: 22%; }
            
            label.error {
              position: relative;
              background: url("../images/unchecked.gif") no-repeat;
              background-position-y: 3px;
              padding-left: 20px;
              display: block;
              margin-top: 20px; }
            
            label.valid {
              display: block;
              position: absolute;
              right: 0;
              left: auto;
              margin-top: -6px;
              width: 20px;
              height: 20px;
              background: transparent; }
              label.valid:after {
                font-family: 'Material-Design-Iconic-Font';
                content: '\f269';
                width: 100%;
                height: 100%;
                position: absolute;
                /* right: 0; */
                font-size: 16px;
                color: green; }
            
            .label-agree-term {
              position: relative;
              top: 0%;
              transform: translateY(0);
              -moz-transform: translateY(0);
              -webkit-transform: translateY(0);
              -o-transform: translateY(0);
              -ms-transform: translateY(0); }
            
            .material-icons-name {
              font-size: 18px; }
            
            .signin-content {
              padding-top: 67px;
              padding-bottom: 87px; }
            
            .social-login {
              align-items: center;
              -moz-align-items: center;
              -webkit-align-items: center;
              -o-align-items: center;
              -ms-align-items: center;
              margin-top: 80px; }
            
            .social-label {
              display: inline-block;
              margin-right: 15px; }
            
            .socials li {
              padding: 5px; }
              .socials li:last-child {
                margin-right: 0px; }
              .socials li a {
                text-decoration: none; }
                .socials li a i {
                  width: 30px;
                  height: 30px;
                  color: #fff;
                  font-size: 14px;
                  border-radius: 5px;
                  -moz-border-radius: 5px;
                  -webkit-border-radius: 5px;
                  -o-border-radius: 5px;
                  -ms-border-radius: 5px;
                  transform: translateZ(0);
                  -moz-transform: translateZ(0);
                  -webkit-transform: translateZ(0);
                  -o-transform: translateZ(0);
                  -ms-transform: translateZ(0);
                  -webkit-transition-duration: 0.3s;
                  transition-duration: 0.3s;
                  -webkit-transition-property: transform;
                  transition-property: transform;
                  -webkit-transition-timing-function: ease-out;
                  transition-timing-function: ease-out; }
            
            
            .signin-form {
              margin-right: 90px;
              margin-left: 80px; }
            
            .signin-image {
              margin-left: 110px;
              margin-right: 20px;
              margin-top: 10px; }
            
            @media screen and (max-width: 1200px) {
              .container {
                width: calc( 100% - 30px);
                max-width: 100%; } }
            @media screen and (min-width: 1024px) {
              .container {
                max-width: 1200px; } }
            @media screen and (max-width: 768px) {
              .signup-content, .signin-content {
                flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                justify-content: center;
                -moz-justify-content: center;
                -webkit-justify-content: center;
                -o-justify-content: center;
                -ms-justify-content: center; }
            
              .signup-form {
                margin-left: 0px;
                margin-right: 0px;
                padding-left: 0px;
                /* box-sizing: border-box; */
                padding: 0 30px; }
            
              .signin-image {
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 40px;
                order: 2;
                -moz-order: 2;
                -webkit-order: 2;
                -o-order: 2;
                -ms-order: 2; }
            
              .signup-form, .signup-image, .signin-form, .signin-image {
                width: auto; }
            
              .social-login {
                justify-content: center;
                -moz-justify-content: center;
                -webkit-justify-content: center;
                -o-justify-content: center;
                -ms-justify-content: center; }
            
              .form-button {
                text-align: center; }
            
              .signin-form {
                order: 1;
                -moz-order: 1;
                -webkit-order: 1;
                -o-order: 1;
                -ms-order: 1;
                margin-right: 0px;
                margin-left: 0px;
                padding: 0 30px; }
            
              .form-title {
                text-align: center; } }
            
            .boutton{
            position:absolute;
            top: 15px; 
            left:30px;
            }
            .button {
              display: inline-block;
              border-radius: 4px;
              background-color:#6dabe4;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 16px;
              padding: 14px;
              width: 100px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            }
            
            .button span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }
            
            .button span:after {
              content: '\00AB';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }
            
            .button:hover span {
              padding-right: 25px;
            }
            
            .button:hover span:after {
              opacity: 1;
              right: 0;
            }
            
            .message{
            color:red;
            padding-top:1.5px;
            margin-left:5px;
            padding-bottom:0px;
            }
</style>

<body>
<main>
      <div class="boutton">
      <button class="button" onclick="location.href = 'index.php';" style="vertical-align:middle;"><span>Retour</span></button>
      </div>
<!-- Sign in Form -->
      <h3 class="message"><i><?php include('include/message.php');?></i></h3>
      <section class="sign-in" style="padding-top:5px;padding-bottom:10px;">

      <div class="container">
      <div class="signin-content">
      
      <div class="signin-image">
      <figure><img src="images/hi.jpg" alt="log in  image"></figure>
      <a href="register.php" class="signup-image-link">Créer un compte</a>
      </div>

      <div class="signin-form">
      <h2 class="form-title">Se Connecter</h2>
      
      <form action="verification.php" method="POST" class="register-form" id="login-form">

      <div class="form-group">
      <label for="Email"><i class="zmdi zmdi-account material-icons-name"></i></label>
      <input type="text" name="Email" id="Email" placeholder="Votre Email"/>
      </div>

      <div class="form-group">
      <label for="Password"><i class="zmdi zmdi-lock"></i></label>
      <input type="password" name="Password" id="Password" placeholder="Votre Mot De Passe"/>
      </div>

      <div class="form-group">
      <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
      <label for="remember-me" class="label-agree-term"><span><span></span></span>Se Souvenir De Moi</label>
      </div>

      <div class="form-group form-button">
      <input type="submit" name="Login" id="Login" class="form-submit" value="Se Connecter"/>
      </div>

      </form>
      </div>
      </div>
      </div>
      </section>
      
</main>
</body>
</html>


