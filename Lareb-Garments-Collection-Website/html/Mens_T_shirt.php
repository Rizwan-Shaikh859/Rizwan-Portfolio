<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "garments";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn)
{

  //echo "connection successfull";
}

else
{

  echo "connection failed";
}


$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

    
    <div class="header">
        <nav>
           <a href="index.html"><img src="images/logo22.jpg" style="padding-top:  75px;"></a>
         <nav1>
             <a href="index.html"><img src="images/logo22.jpg" style="padding-top:  75px;"></a>
            <div class="nav-links">
                <ul>
                    <li class="active"><a href="mainpage.html">Home</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Women's</a>
                        <div class="sub-nav">
                            <ul>
                               <li><a href="woment-t-shirt.html">T-Shirts</a></li>
                               <li><a href="womenhoodies.html">Hodies</a></li>
                               <li><a href="#">Trousers</a></li>
                               <li><a href="womennightsuit.html">Night-Suits</a></li>

                            </ul>
                        </div>  
                    </li>
                   <li><a href="#">Men's</a>
                    <div class="sub-nav-1">
                        <ul>
                           <li><a href="Mens_T_shirt.html">T-Shirts</a></li>
                           <li><a href="Mens_jeans.html">Jeans</a></li>
                           <li><a href="Mens_hoodie.html">Hodies</a></li>
                           <li><a href="#">Trousers</a></li>

                        </ul>
                    </div> 
                 
                </li>
                   <li><a href="aboutus.html">About</a></li>
                   <li><a href="#">Login</a>
                    <div class="sub-nav-2">
                        <ul>
                            <li><a href="loginpage.php">User</a></li>
                            <li><a href="adminloginpage.html">Admin</a></li>
                        </ul>
                    </div>
                 
                 
                 
                 </li>
                  
                  
               </ul>
           </div>
        </nav1>
       </nav>

       <div class="line">
       
         <hr color="black" style="width: 100%; margin-top: 10%;">
         <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">Products</a> </li>
             <li><a href="#">Women</a> </li>
             <li><a href="#">T-Shirts</a></li>
         </ul>
         <hr color="black" style="width: 100%; margin-top:  2%;">
        
       </div>

       <div class="browbycategories">

        <h1>Browse by Categories</h1>
          <dl>
              <dt>Men</dt>
            <dd>- Hoddies & Zippers</dd>
            <dd>- Jeans</dd>
            <dd>- T-Shirt</dd>
            <dd>- Trouser</dd>
              
          </dl>

          <dl>
            <dt>Women</dt>
          <dd>- Hoddies & Zippers</dd>
          <dd>- Night Suits</dd>
          <dd>- Sweat Shirt</dd>
          <dd>- T-Shirt</dd>
          <dd>- Trouser</dd>
            
        </dl>
       </div>

     
       <div class="side2">

        <h1>T-shirts</h1><br><br>
        <p>Stylish T-Shirts for Men in Pakistan</p><br><br>
        <ul>

        
        <li><a href="selected_t_shirt.html"><img  src="images/menstshirt/psychotshirtedit.jpg"><p>Psycho T-Shirts<br>Boys<br><del>Rs 1199.00</del> Rs 899.00</p></a></li>
            <li><img src="images/menstshirt/blackhalfsleevesedit.jpg"><p style="margin-left: 22px;">Black Half Sleeves<br>Boys<br><del>Rs 1099.00</del> Rs 799.00</p></li>
            <li><img src="images/menstshirt/henley-t-shirtedit.jpg"><p>Henley-T-Shirts<br>Boys<br><del>Rs 1499.00</del> Rs 1099.00</p></li>

   
        </ul>

        <ul>

            <li><img src="images/menstshirt/psychotshirtedit.jpg"><p>Psycho T-Shirts<br>Boys<br><del>Rs 1199.00</del> Rs 899.00</p></li>
            <li><img src="images/menstshirt/blackhalfsleevesedit.jpg"><p style="margin-left: 22px;">Black Half Sleeves<br>Boys<br><del>Rs 1099.00</del> Rs 799.00</p></li>
            <li><img src="images/menstshirt/henley-t-shirtedit.jpg"><p>Henley-T-Shirts<br>Boys<br><del>Rs 1499.00</del> Rs 1099.00</p></li>
            
        </ul>



       </div>
   
            

    
</body>
</html>