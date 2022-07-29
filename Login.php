<?php 
include_once ('_db/ConnexionDB.php');

include ('action_form.php');

?>

  <!doctype html>
<html lang="en">
  <head>

  <?php require_once ('_header/meta.php'); ?>
    
    <?php require_once ('_header/link.php'); ?>


    <title>LOGIN</title>
    
  </head>
<body>

<?php require_once ('_menu/menu.php');  ?>

    
         <div class="container">
    <form method ="POST" >
   
    <div class="mb-3 row">
<label for="staticEmail" class="col-sm-2 col-form-label">  E-mail </label>
<div class="col-sm-10">
<input type="email" required name="e_mail"  value="" placeholder="E-mail"/>
</div>
</div>

<div class="mb-3 row">
     <label for="inputPassword" class="col-sm-2 col-form-label"> Password </label>
<div class="col-sm-10">
     <input type="password" required name="password"  value="" placeholder="Password"/>
</div>
</div>

 
<div class="mb-3 row">
<div class="col-sm-10">
    <button type="submit" name="Login" class="btn btn-primary">Login</button>
</div>
<?php echo login() ?>
</form>
</div>

    <?php require_once ('_footer/footer.php'); ?>

  </body>
</html>
    

