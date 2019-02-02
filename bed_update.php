<?php
  $link=mysqli_connect("localhost","root","","hospital");
  if(mysqli_connect_error ()){
    echo "there is an error";
  }
  echo "<br>";
  $query="SELECT `available_beds` FROM `medical` WHERE hospital_name='R_hospital'";
  if($result=mysqli_query($link,$query))
  {
    while($row=mysqli_fetch_array($result)){
        $x=$row[0];
    }
  }
  $y=$x-1;
  echo "<p style='color:white;font-size:200%;'>"."The no of beds after registering is"." ".$x."</p>"."<br>";
  if(isset($_POST['send'])){
    $query="UPDATE `medical` SET `available_beds`=' " .mysqli_escape_string($link, $_POST['value_change'])."'"." WHERE hospital_name='R_hospital'";
    mysqli_query($link,$query);
  }
?>
<html>
    <head>
        <title>Output window</title>
        <script src='jquery-3.2.1.min.js'></script>
    </head>
    <style>
        body{
            background-image: url("photo(10).jpg");
        }
    </style>
    <form class='contain' method='post'>
        <input name='value_change' type='number' placeholder="Enter the new number of beds available" style='border-color:red;width:373px;height:80px; border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;margin-top:8px'><br><br>
        <input  id="fg" type="submit" name='send' value="Change the value">
</html>
