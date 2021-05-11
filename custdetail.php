
 
<html>
     <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
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
      <nav class="navbar navbar-inverse navbar-fixed-top">
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
     <?php  
	     
	     Session_start();
		 echo " <div id='printableArea'>";
		 $mysqli=new mysqli("localhost","root","","ewaste");
		 $res=$mysqli->query("SELECT name, phone,address FROM registration");
		 
		 echo "<center><h1>Customer Details Report<hr><br></h1>";
         $details="<table width='40%' border='1'><tr><th>Name</th><th>Phone </th><th>Address</th></tr><tr>";
		 while($row = $res->fetch_array())
		    {
			 $details.="<td>".$row["name"]."</td>";
			  $details.="<td>".$row["phone"]."</td>";
			  $details.="<td>".$row["address"]."</td></tr>";
		    }
		    $details.="</table></center>";
		
		 echo $details;
		 echo "</div>";
		     
		 	
	?>
	<br><br><br>

<center><input type="button" onclick="printDiv('printableArea')" value="Print" style="color: white;background-color:#39ac73">
<!--<input type =submit value="BACK" href="mr_recycle.html">-->
   </body>
</html>   
