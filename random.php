<html>
    <head>
        <title>Output window</title>
        <script src='jquery-3.2.1.min.js'></script>
    </head>
    <style>
        body{
            background-image: url("photo(10).jpg");
        }
        #main_banner{  
            text-align: center;
            color:black;
            font-family: 'Times New Roman', Times, serif;
            font-size: 200%;
            font-weight: bold;
        }
        h1{
            text-decoration:underline;
            text-underline-position:under;
        }
        #submit{
            height:100px;
            width:360px;
            float:right;
        }
        .final{
            height:50px;
            width:300px;
            margin-top: 30px;
            margin-left:30px;
        }
        #second_submit{
            height:100px;
            width:360px;
            float:left;
        }
        .second_final{
            height:50px;
            width:300px;
            margin-top: 30px;
            margin-left:30px;
        }
    </style>
    <body>
        <div id="main_banner">
           <h1>Hospital details</h1>
        </div>
        <div id="submit">
            <input type="submit" value="Register for Second Hospital" class="final"></input>
        </div>
        <div id="second_submit">
            <input type="submit" value="Register for First Hospital" class="second_final"></input>
        </div>
        <script>
            {
                $(".final").click(function(){
                    location.href="hospital4.html";
                })
                $(".second_final").click(function(){
                    location.href="hospital3.html";
                })
            }
        </script>
    </body>
</html>
<?php
  $link=mysqli_connect("localhost","root","","hospital");
  if(mysqli_connect_error ()){
    echo "there is an error";
  }
  echo "<br>";
  echo "<br>";
  $query="SELECT `available_doctors`, `available_beds`, `emergency_number`FROM `medical` WHERE Place='vellore'";
  if($result=mysqli_query($link,$query))
  {
    while($row=mysqli_fetch_array($result)){
        echo "<br>"."<br>"."<br>"."<p style='color:black;font-size:200%;'>"."Number of available doctors are"." ".$row[0]."</p>"."<br>";
        echo "<p style='color:black;font-size:200%;'>"."Number of available beds are"." ".$row[1]."</p>"."<br>";
        echo "<p style='color:black;font-size:200%;'>"."The emergency number of the hospital is"." ".$row[2]."</p>"."<br>";
        echo "<hr>";
    }
  }
?>