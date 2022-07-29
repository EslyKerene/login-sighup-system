<?php




        include ("_db/ConnexionDB.php");

    if(isset($_GET['id'])){
        $Id = $_GET['id'];
        $sql = "DELETE FROM `users` WHERE id = $Id";

        
            if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Record deleted successfully')</script>" ;
                    echo "<script>window.open('homepage.php', '_self')</script>" ;
              
            } else {
              echo "<script>alert('Error deleting record: ' . $conn->error)</script>" ;
              echo "<script>window.open('homepage.php', '_self')</script>" ;
            }
            
            $conn->close();
        }
?>

