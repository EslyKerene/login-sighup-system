<?php


function saveData(){

    if(isset($_POST['signup'])){
        include ("_db/ConnexionDB.php");
        
        // taking the 4 values in the form data
        $Name = $_POST ['name'];
        $Email= $_POST ['e_mail'];
        $password= $_POST ['password'];
        $confipassword = $_POST ['confirmpassword'];
        //var_dump("$Name" ,"$Email","$paasword","$confipassword")
        

          if($Name==null || $Email==null || $password==null ){
            echo "<script>alert('please Fill the form correctly')</script>" ;
            echo "<script>window.open('signup.php', '_self')</script>" ;

            }
            elseif 
                ($password != $confipassword){
                    echo "<script>alert('passwords donot match')</script>" ;
                    echo "<script>window.open('signup.php', '_self')</script>" ;
                }
                else{
                    $check=(" SELECT * FROM users WHERE e_mail ='$Email'");

                    if($result = mysqli_query($conn, $check)){
                        $rowcount=mysqli_num_rows($result);
                        if($rowcount == 1){
                            echo "<script>alert('Email already taken')</script>" ;
                            echo "<script>window.open('signup.php', '_self')</script>" ;
                        }else{
                            $sql=("INSERT INTO users (id,name,e_mail,password) VALUES ( '','$Name', '$Email', '$password')");
                  //    var_dump($sql); 
                

                                if (mysqli_query($conn,$sql)){
                                    echo "<script>alert('SignUp Successfully')</script>" ;
                                    echo "<script>window.open('homepage.php', '_self')</script>" ;
                                
                                // echo nl2br ("\n $Name \n"."$Email\n"."$password \n");
                            
                            } 
                            else {
                                echo " ERROR! $sql.".mysqli_error($conn);
                            }
                        
                        }

                    }

                }
                
            }
    }



    
    function login(){

        if(isset($_POST['Login'])){
            include ("_db/ConnexionDB.php");
            // taking the 2 values in the form
            $Email= $_POST ['e_mail'];
  
            $Password= $_POST ['password'];

//var_dump("$Name" ,"$paasword")

                if($Email==null && $password==null ){
                    echo "<script>alert('Fill the form correctly')</script>" ;
                    echo "<script>window.open('login.php', '_self')</script>" ;
                }else{

                    $check=(" SELECT * FROM users WHERE  e_mail='$Email' && password ='$Password'");

                    if($result = mysqli_query($conn, $check)){
                        $rowcount=mysqli_num_rows($result);
                        if($rowcount == 1){
                            echo "<script>alert('login successful')</script>" ;
                            echo "<script>window.open('homepage.php', '_self')</script>" ;
                        }else{
                            echo "<script>alert('incorrect data')</script>" ;
                            echo "<script>window.open('login.php', '_self')</script>" ;
                        }

    }
    }
}
    }
?>



