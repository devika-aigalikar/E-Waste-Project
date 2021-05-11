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
   <style>
   .button {
  background-color: #00cc66;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

   ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close3:hover,
.close3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.h2{
	 color: #00cc99
;
    text-shadow: -1px -1px 1px #000, 1px 1px 1px #ccc;
}
</style>
</head>
<?php  
   $con = mysqli_connect("localhost","root","","test");
   // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $address= $_POST['address'];
    $cnm=$_POST['CustomerNm'];
    echo $cnm;
    $cid= $_POST['CustomerId'];
    echo $cid;
	$phone=$_POST['phone'];
  
 $status = "";
   if(isset($_POST['new']) && $_POST['new']==1){
   // $trn_date = date("Y-m-d H:i:s");
    $cstatus =$_REQUEST['cstatus'];
    $company = $_REQUEST['company'];
	$cname=$_REQUEST['cname'];
    //$submittedby = $_SESSION["username"];
    $ins_query="insert into billing
    (`cstatus`,`company`,'cname','cid','address','phone')values
    ('$cstatus','$company','$cname','$cid','$address',$phone')";
	
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
   br></br><a href='view.php'>View Inserted Record</a>";}
?>

<body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger" href="mr_recycle.html"> 
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
  <h1 color="#00cc99" style="font-size:3rem" ><center>Thank You For Placing Your Order !!!</h1><br><br><center><h3>Your order will get confirmed soon...</h3><br><br>Too check further details stay tuned !
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close1">&times;</span>
    <p color="blue"><ol class="progtrckr" data-progtrckr-steps="4">
    <li class="progtrckr-done">Order Processing</li><!--
 --><li class="progtrckr-done">Order Received</li><!--
 --><li class="progtrckr-todo">Order Confirmed</li><!--
 --><li class="progtrckr-todo">Order Picked</li><!--
<li class="progtrckr-todo">Delivered</li>-->
</ol></p>
  </div>

</div>
<br><hr><br><center><input type="button" value="check status" id="myBtn1" style="color: white;background-color:green"></center>

</body>
<script>
var modal = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>

