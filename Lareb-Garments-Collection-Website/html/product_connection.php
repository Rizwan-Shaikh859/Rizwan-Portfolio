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

if(isset($_POST["Add Product"]))
{

    if(!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["code"]) && !empty($_POST["image"]))
    {

        $fname = $_POST["name"];
        $lname = $_POST["price"];
        $address = $_POST["code"];
        $city = $_POST["image"];
        
        
        

        $query = "INSERT into product(name, price, code, image)  values('$name', '$price', '$code', '$image')";

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