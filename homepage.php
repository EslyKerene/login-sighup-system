<?php 
    include ('action_form.php'); 

    // include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once ('_header/meta.php'); ?>
    
    <?php require_once ('_header/link.php'); ?>

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<?php require_once ('_menu/menu.php');  ?>


<div class="container">

<table class="table">
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">e_mail</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
    </tr>
<?php
       
       include('_db/ConnexionDB.php');
        $sql=("SELECT * FROM users");
        $result=$conn->query($sql) ;
        // $rows = $result-
        while($rows = $result->fetch_assoc()){
            ?>
            <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['e_mail'];?></td>
                <td><?php echo $rows['password'];?></td>
                <td>
                    <div class ='btn-group'>
                        
                    <a class='btn btn-secondary ' href="Delete_form.php?id=<?php echo $rows['id']; ?>">Delete</a>
                    <a href="Edit_form.php?id=<?php echo $rows['id']; ?>">Edit</a>

                </td>

            <?php } ?>

<?php require_once ('_footer/footer.php'); ?>
</body>
</html>