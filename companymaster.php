
<html>
    <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/popuplogin.css">
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href=".css">-->
  <link rel="stylesheet" href="css/popuplogin.css">
  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">
	       <script>
	         function printDiv(printableArea) {
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
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"> 
		<img class="card-img-top" src="img\aboutus.png">
		<span>Mr.Recycle</span>
	  </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
		  
		  
		  <li class="nav-item mx-0 mx-lg-1">
		     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="mr_recycle.html"><span class="glyphicon glyphicon-log-in"> Logout</span></a>
		  </li>	 
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br>
     <?php  
	     Session_start();
		 echo " <div id='printableArea'>";
		 $mysqli=new mysqli("localhost","root","","ewaste");
		 $res=$mysqli->query("SELECT *FROM `company` ");
		 echo "<center><h1><br>Industry Details</h1><br><hr><br>";
         $details="<table width='40%' border='1'><tr><th>ID</th><th>Name </th><th>Address</th><th>Product</th><th>Phone</th><th>E-Mail</th></tr><tr>";
		 while($row=$res->fetch_array())
		    {
			  $details.="<td>".$row["id"]."</td>";
			  $details.="<td>".$row["name"]."</td>";
			  $details.="<td>".$row["address"]."</td>";			 
			  $details.="<td>".$row["product"]."</td>";
			  $details.="<td>".$row["phone"]."</td>";
			  $details.="<td>".$row["mail"]."</td></tr>";
			 
		    }
		    $details.="</table></center>";
		 echo $details;
		 echo "</div";
		
	?>
	<br><br><br>

<center><input type="button" onclick="printDiv('printableArea')" value="Print" value="Print" style="color: white;background-color:#39ac73" ></center>

   </body>
   </body>
</html>   
