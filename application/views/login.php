<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>De paseo</title>
    
    
    
    
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/login/css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
    <div class="container">
        <h1>DePaseo</h1>
        
        <form class="form"  action="<?php echo base_url() ?>index.php/usuarios/iniciar_sesion_post" method="post">
            <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="pass" placeholder="Contraseña">
            <button type="submit" id="login-button">Ingresar</button>
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
    

        <script src="<?php echo base_url(); ?>resource/login/js/index.js"></script>

    
    
    
  </body>
</html>
