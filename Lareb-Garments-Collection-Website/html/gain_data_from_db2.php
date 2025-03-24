<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "gain_values";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn)
{

  echo "connection successfull" . "<br>";
}

else
{

  echo "connection failed";
}


if(isset($_POST["submit"]))
{

    if(!empty($_POST["Full_Name"]) && !empty($_POST["Email"]) && !empty($_POST["Phone"]) && !empty($_POST["Mobile"]) && !empty($_POST["Address"]))
    {

        $Full_Name = $_POST["Full_Name"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $Mobile = $_POST["Mobile"];
        $Address = $_POST["Address"];
        
        $query = "INSERT into values1(Full_Name, Email, Phone, Mobile, Address)  values('$Full_Name', '$Email', '$Phone', '$Mobile', '$Address')";

        $run = mysqli_query($conn, $query);

    if($run)
        {
            

            echo "data inserted";

            
            
        }

    else
    {
            echo "data not inserted";
    }

    }

    else
    {
        
        echo "data is missing";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>

</head>

<body>

    <form action=""   method="post">

        <label><input type="text" name="Full_Name" placeholder="Enter name"></label><br>
        <label><input type="text" name="Email" placeholder="Enter Email"></label><br>
        <label><input type="text" name="Phone" placeholder="Enter Phone number"></label><br>
        <label><input type="text" name="Mobile" placeholder="Enter Mobile number"></label><br>
        <label><input type="text" name="Address" placeholder="Enter Address"></label><br>
        <label><input type="submit" name="submit" value="submit"></label>

</form>

</body>
</html>


