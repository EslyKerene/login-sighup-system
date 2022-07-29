<?php 
include ('Update_form.php');


?>

<!DOCTYPE html>

<html lang="en">
<head>


<!-- // include_once ('_db/ConnexionDB.php'); -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Sample website</title>
</head>
<body>
<?php
include ('_header/meta.php');
    require_once ('_header/link.php');


require_once ('_menu/menu.php');




//     // redirect to show page
//     die('id not provided');
// }


    
//     // include ('Login.php');
//     // include ('homepage.php');
    

//     
   
// ?> 
        



<?php 

    // function getData($edit){

        include ("_db/ConnexionDB.php");
        $Id =  $_GET['id'];
        $sql = "SELECT * FROM `users` where id = $Id";

        $result = $conn->query($sql);
        // $name = $data['name']; 
        $data = $result->fetch_assoc();

            
    // ?>
    
    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
            <form  method="POST">
                <h3>Edit Form</h3>                    

                <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">  Name </label>
                <div class="col-sm-10">
                <input type="text" required name="name"  value="<?php echo $data['name'] ?>" placeholder="Name"/>
                </div>

<div class="mb-3 row">
<label for="staticEmail" class="col-sm-2 col-form-label">  E-mail </label>
<div class="col-sm-10">
<input type="email" required name="e_mail"  value="<?php echo $data['e_mail'] ?>" placeholder="E-mail"/>
</div>
</div>

<div class="mb-3 row">
<label for="inputPassword" class="col-sm-2 col-form-label">  Password </label>
<div class="col-sm-10">
<input type="password" required name="password"  value="<?php echo $data['password'] ?>" placeholder="Password"/>
</div>
</div>

 
<div class="mb-3 row">

<div class="col-sm-10">
<button type="submit" name="Edit_form" class="btn btn-primary">Edit</button>
</div>

<?php echo update()  ?>



<?php
require_once ('_footer/footer.php');
?>

    
</body>
</html>


 

  

   

    


  





