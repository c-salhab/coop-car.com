<!DOCTYPE html>
<html>
      <?php $title = 'Contactez Nous !'; include('include/head.php'); ?>
<style>

     *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Blogger Sans',sans-serif;
    }
    
    body{
      height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background:  #dbdbdb;
      position: relative;
    }
    
    body::before{
      content: '';
      position: absolute;
      height: 100%;
      width: 100%;
      left: 0;
      top: 0;
      background: #1e4b8a;
      clip-path: polygon(86% 0, 100% 0, 100% 100%, 60% 100%);
    }
    
    .container{
      z-index: 12;
      max-width: 1050px;
      width: 100%;
      background: #fff;
      border-radius: 12px;
      margin: 0 20px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    
    .container .content{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 25px 20px;
    }
    
    .content .image-box{
      width: 48%;
      padding-left: 45px;
      
    }
    
    .content .image-box img{
      width: 100%;
    }
    
    .content .topic{
      font-size: 22px;
      font-weight: 500;
      color:#1e4b8a;
    }
    
    .content form{
      width: 40%;
      margin-right: 30px;
    }
    
    .content .input-box{
      height: 50px;
      width: 100%;
      margin: 16px 0;
      position: relative;
    }
    
    .content .input-box input{
      position: absolute;
      height: 100%;
      width: 100%;
      border-radius: 6px;
      font-size: 16px;
      outline: none;
      padding-left: 16px;
      background: #dbdbdb;
      border: 2px solid transparent;
      transition: all 0.3s ease;
    }
    
    .content .input-box input:focus,
    .content .input-box input:valid{
      border-color: #1e4b8a;
      background-color: #fff;
    }
    
    .content .input-box label{
      position: absolute;
      left: 18px;
      top: 50%;
      color: #1e4b8a;
      font-size: 15px;
      pointer-events: none;
      transform: translateY(-50%);
      transition: all 0.3s ease;
    }
    
    .content .input-box input:focus ~ label,
    .content .input-box input:valid ~ label{
      top: 0;
      left: 12px;
      display: 14px;
      color: #1e4b8a;
      background: #fff;
    }
    
    .content .message-box{
      min-height: 100px;
      position: relative;
    }
    
    .content .message-box textarea{
      position: absolute;
      height: 100%;
      width: 100%;
      resize: none;
      background:  #dbdbdb;
      border: 2px solid transparent;
      border-radius: 6px;
      outline: none;
      transition all 0.3s ease;
    }
    
    .content .message-box textarea:focus{
      border-color:#1e4b8a ;
      background-color: #fff;
    }
    
    .content .message-box label{
      position: absolute;
      font-size: 16px;
      color: #636c72;
      left: 18px;
      top: 6px;
      pointer-events: none;
      transition: all 0.3s ease;
    }
    
    .content .message-box textarea:focus ~ label{
      left: 12px;
      top: -10px;
      color:;
      font-size: 14px;
      background: #fff;
    }
    
    .content .input-box input[type="submit"]{
      color: #fff;
      background: #1e4b8a;
      padding-left: 0;
      font-size: 18px;
      font-weight: 500;
      cursor: pointer;
      letter-spacing: 1px;
      transition: all 0.3s ease;
    }
    
    .content .input-box input[type="submit"]:hover{
      background-color: #4679c2;
    }
    
    @media (max-width:1000px) {
      .content .image-box{
        max-width: 70%;
      }
      .content{
        padding: 10px 0;
      }
    }
    
    @media (max-width:900px) {
      .content .image-box{
        display: none;
      }
      .content form{
        width: 100%;
        margin-left: 30px;
      }
    }
    
    .boutton{
    position:absolute;
    top: 15px; 
    left:30px;
    }
    
    .button {
      display: inline-block;
      border-radius: 4px;
      background-color:#1e4b8a;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 18px;
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
    padding-top:12px;
    margin-left:14px;
    }
    
</style>

<body>
    <div class="boutton">
    <button class="button" onclick="location.href = 'index.php';" style="vertical-align:middle;"><span>Retour</span></button>
    </div>
    <h3 class="message"><i><?php include('include/message.php');?></i></h3>
    <div class="container">

    <div class="content">
    <div class="image-box">
    <img src="images/logo.png" alt="Contact Form Pic">
    </div>
    
    <form action="ver_contact.php" method="POST">
    <div class="topic">Envoie-nous un message</div>
    <div class="input-box">
    <input type="text" name="nom" required>
    <label>Votre Nom Et Prénom</label>
    </div>
    
    <div class="input-box">
    <input type="text" name="email" required>
    <label>Votre Adresse Mail</label>
    </div>
    
    <div class="message-box">
    <textarea type="text" name="message"></textarea>
    <label style="color:#1e4b8a;">Votre Message</label>
    </div>
    
    <div class="input-box">
    <input type="submit" value="Envoyer Le Message">
    </div>
    
    </form>
  
    </div>
    </div>

</body>
</html>