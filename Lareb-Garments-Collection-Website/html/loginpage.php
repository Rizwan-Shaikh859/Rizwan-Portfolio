<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "garments";

$conn = mysqli_connect($servername, $username, $password, $db);
  

if(!$conn)
{

    echo "Connection failed";

}

else
{

   // echo "Connection Successful" . "<br>";
}

?>


<?php  

 
   if(isset($_POST['login'])) 
   {
    $username = $_POST['username'];  
    $password = $_POST['password']; 
    
        $sql = "select * from users2 where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);   
        $count = mysqli_num_rows($result);  
       
        if($count > 0)
        {  
        
            header("location: mainpage.html");
            exit();
            
        
    
    }  


        else 
        {  
            
            echo '<script type = "text/JavaScript">';
            echo 'alert("Username or Password is incorrect")';
            echo '</script>';


        }
        
    }


    
?> 


 
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
button {   
       background-color: black;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 55px;   
        background-color: lightcyan;  
    }   
</style>   
</head>    
<body>    
    <div class="user" style="background-color: black; padding: 10px;"> <h1 style="color: white; padding-left: 40%;"> User Login Form </h1> </div>
    <form method= "post" action ="" >   
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="login">Login</button> 
            <button onclick="window.location='user_sign_up.php';">Create new account</button>
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>     
</body>     
</html>  