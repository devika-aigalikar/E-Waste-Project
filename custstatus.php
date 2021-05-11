
 
<html>
	
     <head>
          <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/popuplogin.css">
	       <script>
	         function printDiv(printableArea)
			        {
                      var printContents = document.getElementById(printableArea).innerHTML;
                      var originalContents = document.body.innerHTML;
                      document.body.innerHTML = printContents;
                      window.print();
                      document.body.innerHTML = originalContents;
                    }  
		
         </script>
		 <style>
             table {
                border-collapse: collapse;
                width: 70%;
                   }

             th, td {
                text-align: left;
                 padding: 8px;
                 }

            tr:nth-child(even) {background-color: #f2f2f2;}
            th {
             background-color: #39ac73;
              color: white;
              }
        </style>
    </head>
   <body>
  
   <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>                        
                 </button>
	  
                <a class="navbar-brand" href="mr_recycle.html">Mr.Recycle</a>
              </div>
           <div class="collapse navbar-collapse" id="myNavbar">
     
          </div>
        </div>
   </nav><br><br><nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<img class="card-img-top" src="img\aboutus.png" width="15%">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand" href="mr_recycle.html">Mr.Recycle</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    

    </div>
  </div>
</nav><br><br>
<form action="custstatus.php" method="post">
 <?php  
	     
	//Session_start();
		echo " <div id='printableArea'>";
		$mysqli=new mysqli("localhost","root","","ewaste");
		$res=$mysqli->query("SELECT orderId,custId,custName,custPhone,orderAddress,orderStatus,company FROM billing");
		//$comp.="<html><body>hhfkdajf</body></html>";
		echo "<center><h1>Customer Details Report<hr><br></h1>";
		echo "<table width='40%' border='1'><tr><th>orderId</th><th>custId</th><th>custName</th><th>custPhone</th><th>orderAddress</th><th>Company</th><th>Order Status</th></tr>";
		//if($res->fetch_array())
		while($row = $res->fetch_array())
		{
			echo "<tr data-oid='$row[orderId]'>";
				echo "<td>".$row['orderId']."</td>";
				echo "<td>".$row['custId']."</td>";
				echo "<td>".$row['custName']."</td>";
				echo "<td>".$row['custPhone']."</td>";
				echo "<td>".$row['orderAddress']."</td>";
				echo "<td>
					<select name='compname_".$row['orderId']."'>
						<option value='hussky'>Huskky Pvt.Ltd</option>
						<option value='sygmos'>Sygmos Pvt Ltd</option>
						<option value='Reinventevo'>Reinventevo Ltd</option>
					</select>
				</td>";
				echo "<td>
					<select name='status_".$row['orderId']."'>
						<option value='1'>Accept</option>
						<option value='0'>Declined</option>
						<option value='2'>Waiting</option>
					</select>
				</td>";
				//echo "<td>
					//echo "<input type ='submit' value='submit'>";
				//</td>";
			echo "</tr>";
		}
		 echo "</div>";
echo "</table></center>";
		     
			
	?>
	<br><br><br>


 <center><input type="button" onclick="printDiv('printableArea')" value="Print" value="Print" style="color: white;background-color:#39ac73">
<input type ="submit" value="submit" value="Print" style="color: white;background-color:#39ac73">

   </body>
   
<?php
 
	$conn = new mysqli("localhost","root","","ewaste");
	
	if ($conn->connect_error)
	{
	  die("Connection failed: " . $conn->connect_error);
	}
	 
	//	  echo"Database Connected";
	 
	$sql = "SELECT 'orderId' from billing";
	$result = $conn->query($sql);
	
	while($row = $res->fetch_array()){
		$id = $row['orderId'];
		$compname = isset($_POST['compname_'.$id])? $_POST['compname_'.$id] : '';
		$status = isset($_POST['status_'.$id])? $_POST['status_'.$id] : '';
		
		$sql="INSERT INTO `billing`(`orderStatus`,`company`) VALUES ('$status','$compname')";
		$result = $conn->query($sql);
	}
	
	
	//Get data from form $_POST
	
	echo $compname = isset($_POST['compname'])? $_POST['compname'] : '';
	echo $status = isset($_POST['status'])? $_POST['status'] : '';

   $sql="INSERT INTO `billing`(`orderStatus`,`company`) VALUES ('$status','$compname')";
	

	
	
?>

</html>   