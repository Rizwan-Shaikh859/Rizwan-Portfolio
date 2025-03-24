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

    if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["country"]) && !empty($_POST["email"]) && !empty($_POST["contact"]))
    {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $country = $_POST["country"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];

        $query = "INSERT into admin2(fname, lname, address, city, country, email, contact)  values('$fname', '$lname', '$address', '$city', '$country', '$email', '$contact')";

        $run = mysqli_query($conn, $query); 

    if($run)
        {
            echo '<script type = "text/JavaScript">';
            echo 'alert("Data Inserted")';
            echo '</script>';

            header('admin.html');
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