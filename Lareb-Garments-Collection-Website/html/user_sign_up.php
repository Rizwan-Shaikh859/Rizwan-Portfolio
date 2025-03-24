<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="user" style="background-color: black; padding: 10px;"> <h1 style="color: white; padding-left: 35%;">User Sign_up Form</h1> </div>
  <div class="form" style="background-color: lightcyan";>
  
    <form action="" method="post" style="padding-left: 34%";>
        <h1 style="color: black";>Personal Information</h1><br> 
        <p><label><input type="text" name="username" placeholder="Username"></label><label><input type="text" name="password" placeholder="Password" style="margin-left: 10px;"></label></p><br>
        <p><label><input type="text"  name="name" placeholder="Name"></label><label><input type="text"  name="email"  placeholder="Email" style="margin-left: 10px;"></label></p><br>
        <p><label><input type="text" name="contact"  placeholder="Contact"></label><label><input type="text" name="address" placeholder="Address" style="margin-left: 10px;"></label></p><br>
        <p><label><input type="text" name="city"  placeholder="City"></label><label><input type="text" name="country" placeholder="Country" style="margin-left: 10px;"></label></p><br>
        <p><input type="submit" name="sign_up" value="sign_up" style="width: 70px; height: 30px; color: white; background-color: black;"><button type="submit" name="Reset" style="margin-left: 40px; width: 80px; background-color: black ; color: white; height: 30px;">Reset</button></p>
      </form>

</div>
       
</body>
</html>

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

if(isset($_POST["sign_up"]))
{

    if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["address"]) && !empty($_POST["contact"]) && !empty($_POST["city"] && !empty($_POST["country"])))
    {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $city = $_POST["city"];
        $country = $_POST["country"];

        $query = "INSERT into users2(username, password, name, email, address, contact, city, country)  values('$username', '$password', '$name', '$email', '$address', '$contact', '$city', '$country')";

        $run = mysqli_query($conn, $query);

    if($run)
        {
            
            echo '<script type = "text/JavaScript">';
            echo 'alert("Data Inserted")';
            echo '</script>';

    
        
        }


    else
    {
            echo '<script type = "text/JavaScript">';
            echo 'alert("Data  not Inserted")';
            echo '</script>';
    }

    }

    else
    {
        echo '<script type = "text/JavaScript">';
        echo 'alert("Data  is missing")';
        echo '</script>';
    }
}

?>