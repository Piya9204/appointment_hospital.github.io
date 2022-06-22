<?php

$con=mysqli_connect("localhost","root","","hospital") or die(mysqli_error($con));

if ($con) 
{
  // echo "connected";


  //<?php

 //include 'config.php';
    if(isset($_POST['Login']))
    {
        extract($_POST);
        $query=mysqli_query($con, "insert into admin (Username, password) values ('$Username', '$password')") or die(mysqli_error($con));
      
      if($query)
      {
        echo "<script>";
        echo "alert('data inserted successfully')";
        echo "</script>";
      }else
      {
        echo "<script>";
        echo "alert('data not inserted')";
        echo "</script>";     
      }
    }



} else
{
  echo "not connected";
}


?>