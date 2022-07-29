



<?php

function update() {

    if(isset($_POST['Edit_form'])){

include ("_db/ConnexionDB.php");
if(isset($_GET['id'])){

        $Id =  $_GET['id'];
        $Name = $_POST ['name'];
        $Email= $_POST ['e_mail'];
        $password= $_POST ['password'];


$sql = "UPDATE `users` SET 
           
           `name` ='$Name',
           `e_mail` ='$Email',
           `password` = '$password'
            WHERE `id` = $Id";

      if ($conn->query($sql) === TRUE) {
        
        echo "<script>alert('Updated successfully')</script>" ;
        echo "<script>window.open('homepage.php', '_self')</script>" ;
                } else {
                    echo "<script>alert('Error updating record: ' . $conn->error')</script>" ;
                    echo "<script>window.open('homepage.php', '_self')</script>" ;
                }
                $result = $conn->query($sql);
                $data = $result;

                $conn->close();
            }
        }
}
            ?>




            