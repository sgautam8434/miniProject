<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Tree ID</th>
								<th class="column100 column3" data-column="column3">Tree Name</th>
								<th class="column100 column4" data-column="column4">Time Stamp</th>
								<th class="column100 column5" data-column="column5">Latitude</th>
								<th class="column100 column6" data-column="column6">Longitude</th>
								<th class="column100 column7" data-column="column7">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
							    <?php
                                    $link=mysqli_connect("localhost","id9151134_abhinav","Abhinav123","id9151134_mini2019");
                                    $query = "SELECT * FROM trees";
                                    $result = mysqli_query($link,$query);
                                      
                                        $i=0;
                                        
                                        while($res = mysqli_fetch_assoc($result)) {
                                            $row=$res['treeId'];
                                            if ($i < $row){
                                                    $i=$row;
                                            echo "<tr class='row100'>";
                                            
                                            
                                            echo "<td class='column100 column2' data-column='column2'><a href='https://www.google.com/maps/place/".$res['latitude'].",".$res['longitude']."/' target='_blank'> Visit on Google Maps </a></td>";
                                            echo "<td class='column100 column2' data-column='column2'>".$res['treeId']."</td>";
                                            echo "<td class='column100 column3' data-column='column3'>".$res['name']."</td>";
                                            echo "<td class='column100 column4' data-column='column4'>".$res['datime']."</td>";
                                            echo "<td class='column100 column5' data-column='column5'>".$res['latitude']."</td>";
                                            echo "<td class='column100 column6' data-column='column6'>".$res['longitude']."</td>";
                                            echo "<td class='column100 column7' data-column='column7'>".$res['status']."</td>";
                                        
                                        
                                            }
                                
                                      
                                }
                                ?>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>