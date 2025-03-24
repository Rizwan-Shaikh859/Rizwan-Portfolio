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

    if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["country"]) && !empty($_POST["email"]) && !empty($_POST["contact"] && !empty($_POST["password"])))
    {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $country = $_POST["country"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $password = $_POST["password"];

        $query = "INSERT into users(fname, lname, address, city, country, email, contact, password)  values('$fname', '$lname', '$address', '$city', '$country', '$email', '$contact', '$password')";

        $run = mysqli_query($conn, $query);

    if($run)
        {
            $a = '<script type = "text/JavaScript">';
            $a .= 'alert("Data Inserted")';
            $a .= '</script>';

            echo $a;
            
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