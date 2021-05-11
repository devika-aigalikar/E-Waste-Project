<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
/*halo*/
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>


<body>


<h2>Bill</h2>
<p>E-Waste Purchase Client</p>
<div class="row">
  <div class="col-75">
    <div class="container">

<br>


 <div class="row">
                             <div class="col-50">
				   <form action=""> 
                     <select name="product" onchange="showCustomer(this.value)">
                       <option value="">Select a product:</option>
                       <option value="mobile">mobile</option>
                        <option value="desktop">desktop</option>

                     </select>
               </form>
<br>

				
             <br>
			   <label for="city"><i class="fa fa-institution"></i> Quantity</label>
                     <input type="text" id="city" name="qty" placeholder="no.s-kg" onselect()="js/price.js"><br>
			     
                     <!--<label for="city"><i class="fa fa-institution"></i>Price </label>
                     <input type="text" id="city" name="price" placeholder="Price to be expected">-->
					   </div>
					   </div>  
<div class="col-25">
    <div class="container" >
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#" id="txtname">Product 1</a> <span class="price" id="txtHint">100</span></p>
      <p><a href="#">Product 2</a> <span class="price">300</span></p>
      <p><a href="#">Product 3</a> <span class="price">50</span></p>
      <p><a href="#">Product 4</a> <span class="price">50</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>500</b></span></p>
    </div>
  </div>
  </div>
     <input type="submit" value="Continue to checkout" class="btn">
  </div>				   
<script>
function showCustomer(str)
 {
  var xhttp;    
  if (str == "" && strname=="")
	  {
    document.getElementById("txtHint").innerHTML = "";
	document.getElementById("txtname").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
	  document.getElementById("txtname").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  
  xhttp.send();
}
</script>

</body>
</html>
