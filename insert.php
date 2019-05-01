<?php 
if (isset($_POST["submit"]))
{
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="data";
    
$conn = new mysqli("$servername","$username","$password","$dbname");
    if($conn->connect_error)
    {
        die("coonection failed".$conn->connect_error);
        
    }
     $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $site=$_POST["site"];

    //1
  if(isset($_POST["check1"]))
   {
    $kitchen=1;
   }
   else
   {
     $kitchen=0;
   }

   //2

   if(isset($_POST["check2"]))
   {
    $canopy=1;
   }
   else
   {
     $canopy=0;
   }

  if(isset($_POST["check3"]))
  {
      $wooden=1;
  }
  else
  {
      $wooden=0;
  }
    if(isset($_POST["check4"]))
  {
      $glass=1;
  }
  else
  {
      $glass=0;
  }
    if(isset($_POST["check5"]))
  {
      $tv=1;
  }
  else
  {
      $tv=0;
  }
    if(isset($_POST["check6"]))
  {
      $false=1;
  }
  else
  {
      $false=0;
  }
    if(isset($_POST["check7"]))
  {
      $wardrobe=1;
  }
  else
  {
      $wardrobe=0;
  }
    if(isset($_POST["check8"]))
  {
      $poojai=1;
  }
  else
  {
      $poojai=0;
  }
    if(isset($_POST["check9"]))
  {
      $stainless=1;
  }
  else
  {
      $stainless=0;
  }
    if(isset($_POST["check10"]))
  {
      $curtains=1;
  }
  else
  {
      $curtains=0;
  }
    
    // echo"$name<br>$email<br>$phone<br>$site";

    //  echo"<br>$kitchen<br>$canopy";


  

$sql="INSERT INTO `product` (`name`, `email`, `phonenumber`, `site`, `kitchen`, `canopy`, `wooden`, `glass`, `tv`, `false`, `wardrobe`, `poojai`, `stainless`, `curtains`) VALUES ('$name', '$email', '$phone', '$site', '$kitchen', '$canopy', '$wooden', '$glass', '$tv', '$false', '$wardrobe', '$poojai', '$stainless', '$curtains')";
    if($conn->query($sql)==TRUE){
    echo" new record added";
    }
   else{
        echo "falied";
    }


//     $conn->close();
    
}
?>