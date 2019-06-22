<?php
   $conn=mysqli_connect("localhost","id9151134_abhinav","Abhinav123","id9151134_mini2019");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT treeId,name,latitude,longitude,status FROM trees';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "TreeID ID :{$row['treeId']}  <br> ".
         "Biological name : {$row['name']} <br> ".
         "Latitude : {$row['latitude']} <br> ".
         "longitude : {$row['longitude']} <br> "
         "--------------------------------<br>";
   }
   

   
   mysql_close($conn);
?>