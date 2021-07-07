<?php
include 'db.php';
session_start();

#for login
if(isset($_POST['login']))
{
     $email = $_POST['email'];
     $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `email`= '$email'";
    $result = mysqli_query($con, $query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            $verify = $result_fetch['password'];
             
            
            if(password_verify($password,$verify)){
                
                $_SESSION['logged_in']=true;
                $_SESSION['name']=$result_fetch['name'];
                header('location: index.php');


            }else{
                echo "
                    wrng
                    
                ";
            }

        }

    }else{
       // mysqli_query($con, "insert into user(name, email, password) values('$name', '$email', '$password')");

        // $msg = "We have just sent a verification link to <span style='font-weight: 700;'>$email</span><br/><br/>Please check your inbox and click on the link to get started. 
        // If you cannot find this email (which could be due to spam filters), just request a new one here.";
        echo "
            <script>
                alert('Incorrect email or password');  
                window.location.href='signup.php';
            </script>
            
        ";
}

}


#for sign up
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_pass = password_hash($password, PASSWORD_BCRYPT);
    $check = mysqli_num_rows(mysqli_query($con, "select * from user where email='$email'"));

    if($check>0){
        
        echo "
            <script>
                alert('Email already exist, Try another email');
            </script>  
        ";
      
    }else{
        mysqli_query($con, "insert into user(name, email, password) values('$name', '$email', '$enc_pass')");

        // $msg = "We have just sent a verification link to <span style='font-weight: 700;'>$email</span><br/><br/>Please check your inbox and click on the link to get started. 
        // If you cannot find this email (which could be due to spam filters), just request a new one here.";
        echo "
            <script>
                alert('Registration Sucessfull');  
            </script>
            
        ";
    }

}
//header("Location: signup.php?message=$msg");
?>
