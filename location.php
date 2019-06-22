<?php
function display()
{
    $link=mysqli_connect("localhost","id9151134_abhinav","Abhinav123","id9151134_mini2019");
    $query = "SELECT * FROM trees";
    $result = mysqli_query($link,$query);
      
      echo "<table border='3' cellspacing = '5px' padding = '5px'>";
        echo "<tr>";
        $i=0;
        
        while($res = mysqli_fetch_assoc($result)) {
            $row=$res['treeId'];
            if ($i < $row){
                    $i=$row;
                echo "</tr><tr>";
        
            }
        
            echo "<td>".$res['treeId']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['datime']."</td>";
            echo "<td>".$res['latitude']."</td>";
            echo "<td>".$res['longitude']."</td>";
            echo "<td>".$res['status']."</td>";
        
        
            }


echo "</table>";
       mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Login</title>
    <meta charset='UTF-8'>
   

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="header" align="center"><h1>Zigbee Based Tree Protection System</h1>
    
<div class="container">
    <br>
    <br>
   <!-- <form class="login100-form validate-form" align ="center">
                   

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="var1" placeholder="Tree id">
                        

                    </div>

                    
                    
                    <div class="container-login100-form-btn">
                        
                           <button class="login100-form-btn" type="submit" name="submit"><h4>Get Location</h4>
                        </button>
                    </div>
                    
                </form> -->
            <?php display() ?>
           
    </div>
    <br>
    <br>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>


