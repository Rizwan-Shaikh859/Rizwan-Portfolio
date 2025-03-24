<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "gain_values";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn)
{

  //echo "connection successfull";
}

else
{

  echo "connection failed";
}


$sql = "SELECT * FROM values1";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
.progress{

  width: 90%;
  height: 8px;
  margin-top: -1px;
  margin-left: 10px;
  



}
</style>
<body style="background-color: gray;">

  

  <table  style="margin-left: 80px">

         
        <tr>

                
          <td><div class="box" style="background-color: white; width: 300px; height:350px; padding-left: 20px; float: left;">
 
            <img src="images/Rizwan_Ahmed.jpg" style="padding-left: 40px; height: 200px; ">
            <p style="padding-left: 70px;">Full Stack Developer</p>
            <p style="padding-left: 50px;">Buy Area, San Francisco, CA</p>
            <input  type="submit" name="follow" value="Follow " style="background-color: blue; color: white; margin-left: 70px;">
            <input  type="submit" name="message" value="Message" style="background-color: white; color: blue;">

            </div></td>

            <td style="padding-top: 50px; padding-bottom: 50px;"><div class="box2" style="background-color: white; width: 800px; height: 350px; float: left; margin-left: 10px; " >
              <p style="font: bold; margin-left: 10px; margin-top: 15px">Full Name <label style="margin-left: 150px; color: gray;"><?php  echo $row['Full_Name'];?></label></p>
              <hr style="margin-left: 10px;">
              <p style="font: bold; margin-left: 10px;">Email   <label style="margin-left: 180px; color: gray;"><?php  echo $row['Email'];?></label></p>
              <hr style="margin-left: 10px;">
              <p style="font: bold; margin-left: 10px;">Phone   <label style="margin-left: 175px; color: gray;"> <?php  echo $row['Phone'];?></label></p>
              <hr style="margin-left: 10px;">
              <p style="font: bold; margin-left: 10px;">Mobile  <label style="margin-left: 170px; color: gray;"> <?php  echo $row['Mobile'];?></label></p>
              <hr style="margin-left: 10px;">
              <p style="font: bold; margin-left: 10px;">Address <label style="margin-left: 160px; color: gray;"> <?php  echo $row['Address'];?></label></p>
            
            
            
            </div></td>

            </tr>

            <tr>

             <td>

              <div class="box3" style="background-color: white; width: 300px; height:320px; padding-left: 20px; float: left;">

               <h6 style="margin-top: 20px">Website</h6>
               <hr>
               <h6>Github</h6>
               <hr>
               <h6>Twitter</h6>
               <hr>
               <h6>Instagram</h6>
               <hr>
               <h6>Facebook</h6>
               



              </div>




             </td>

             <td>

              <div class="box3" style="background-color: white; width: 400px; height:320px; margin-left: 10px; float: left;">

              
                      
                  <p style="color: darkturquoise; margin-left: 40px;" >assignment
                  <label style="color: black; font-size: 20px;">Project Status</label></p><br>
                  <p style="margin-left: 10px;">Web Design</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 80%;"></div>
                    
       
                  </div>

                  <p style="margin-left: 10px;">Website Markup</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 70%;"></div>
                  

              </div>

              <p style="margin-left: 10px;">One Page</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 90%;"></div>


                    </div>

                    <p style="margin-left: 10px;">Mobile Template</p>
                    <div class="progress">
                      
                      <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 50%;"></div>
  
  
                      </div>
                      <p style="margin-left: 10px;">Backend API</p>
                      <div class="progress">
                  
                        <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 60%;"></div>
    
    
                        </div>


              </div>




             </td>

             <td>

              <div class="box3" style="background-color: white; width: 390px; height:320px; margin-left: -390px; float: left;">

              
                <p style="color: darkturquoise; margin-left: 40px;" >assignment
                  <label style="color: black; font-size: 20px;">Project Status</label></p><br>
                  <p style="margin-left: 10px;">Web Design</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 80%;"></div>
                    
       
                  </div>

                  <p style="margin-left: 10px;">Website Markup</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 70%;"></div>
                  

              </div>

              <p style="margin-left: 10px;">One Page</p>
                  <div class="progress">
                    
                    <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 90%;"></div>


                    </div>

                    <p style="margin-left: 10px;">Mobile Template</p>
                    <div class="progress">
                      
                      <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 50%;"></div>
  
  
                      </div>
                      <p style="margin-left: 10px;">Backend API</p>
                      <div class="progress">
                  
                        <div class="progress-bar" role="progressbar" aria-valuenow="70px" aria-valuemin="0px" aria-valuemax="100px" style="width: 60%;"></div>
    
    
                        </div>

                    

             </td>





            </tr>

            
            


</table>
            

</body>
</html>