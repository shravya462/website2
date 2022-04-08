<?php
session_start();
error_reporting(0);

?>

<?php
include("dbcon.php"); //connection.php
$id=$_GET['id'];//Agent Name
$quotationno=$_GET['quotationno'];//Agent Name
?>

<?php
 $query="SELECT * FROM `spark_quotation` where quotationno='$quotationno'";		
$result=mysqli_query($db, $query);
$row1=mysqli_fetch_array($result);

?>


<html>

<head>
	<link  rel="Stylesheet"type="text/css" href=""></link>
</head>

<style>
@media print {
	html, body {
		height:100%; 
		margin: 0 !important; 
		padding: 0 !important;
		overflow: hidden;
  }
}
@page { 
	size: A4;  
	margin: 5mm; 
}
body {
    margin: 0;
    width: 100%;
}

.page {
    width: 200mm;
    min-height: 120mm;
    margin: 10mm auto;
    border: 1px solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    font-family: Vardana;
    font-size: 16px;
}

.border {
    border: 1px solid;
    margin: 2%;
    font-family: Vardana;
    font-size: 16px;
}

.image {
    padding: 5px;
    height: 115px;
    width: 50%;
    display: inline-block;
    float: right;
}

.address {
    padding: 10px;
    height: 130px;
    width: 75%;
    font-size: 18px;
    display: inline-block;
}

hr.invoice {
    border-top: 1px solid black;
}

.invoice1 {
    border-top: 1px solid black;
}

.taxinvoice {
    text-align: center;
}

.billto {
    padding-left: 10px;
    height: 60px;
    width: 2%;
    display: inline-block;
    float: left;
    font-size: 16px;
}

.billtoclients {
    height: 60px;
    width: 50%;
    display: inline-block;
    font-size: 16px;
}

.otherdetails {
    height: 80px;
    width: 28%;
    display: inline-block;
    float: right;
    font-size: 16px;
    margin-top: -8px;
    margin-left: -20px;
    margin-right: -20px;
}

table.tabletop {
    height: 200px;
    margin-top: 5%;
    font-family: Vardana;
    font-size: 16px;
    border-collapse: collapse;
}

table {
    width: 98%;
    margin-left: 1%;
    font-family: Vardana;
    font-size: 16px;
    border-collapse: collapse;
}

td,
th {
    border: 1px solid;
}

table td {
    display: table-cell;
    vertical-align: top;
}

.insidedetails {
    position: relative;
    top: 0;
    left: 0;
}

.subtotals {
    position: relative;
    bottom: 0;
    right: 0;
    float: right;
}

.slno {
    display: inline-block;
}

.topsac {
    display: inline-block;
}

.amount {
    text-align: right;
}

.amount1 {
    padding-bottom: 30px;
}

.total {
    margin-left: 80%;
}

.totalamount {
    text-align: right;
}

.cell {
    text-align: center;
}

.below {
    margin: 10px;
    margin-top: 5px;
    height: 250px;
}

.list {
    padding-left: 10px;
    padding-top: 1px;
    height: 130px;
    display: inline-block;
    font-size: 15px;
}

.details {
    padding-right: 3px;
    padding-top: 1px;
    height: 130px;
    width: 38%;
    display: inline-block;
    float: right;
    font-size: 15px;
}

.footerimage {
    padding-left: 2px;
    padding-top: 1px;
    height: 100px;
    width: 80%;
    display: inline-block;
    float: left;
    font-size: 10px;
}

.sign {
    padding-right: 3px;
    padding-top: 1px;
    height: 35px;
    display: inline-block;
    float: right;
    font-size: 15px;
}

.button {
    border-radius: 5%;
    background-color: #3f6ad8;
    color: #ffffff;
    margin: -20px 0px;
    border: 1px solid #ccc;
    font-size: 100%;
    cursor: pointer;
    width: 12%;
}
</style>

<body>
	
<div class="page">	

	

	<br></br>


	<form action="" method="post">

	<div class="billto" id="billto">
		
	</div>
		
	<div class="billtoclients" id="billtoclients" style="padding-bottom:30px;color:blue">
		_craft_studio </br>
		Shama Manzil, </br>
		Near Badriya Masjid,Vinayanagara</br>
		Post-Belapu,Udupi dist-574117</br>
		Tel:  9945510608</br></br>
	
		<font style="color:black ">Email:sampeen608@gmail.com</font> </br>
				<!--font style="color:black ">Website:www.spar.in</font--> </br>	
	</div>
	

	<div class="otherdetails" id="otherdetails" >
	
		<img src="images/123.png" >
	<p>&nbsp;&nbsp;_craft_studio<p>
	</div>
		
	<br></br>	<br></br>		<br></br>
		
	
	
	<div class="taxinvoice" id="taxinvoice"><b><u>QUOTATION</u></b></div>
	
	

	<table class="tabletop"  >	
		<tr>
			<th style="width:80px">Sl No.</th>
			<th>Description</th>
			<th style="width:70px">Qty</th>
			<th style="width:70px">Amount</th>
		</tr>
		
		<?php   if($row1['descslno']!=''|| $row1['description']!=''|| $row1['qty']!=''|| $row1['amount']!=''){ ?>
		<tr>
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="slno"><?php echo $row1['descslno']; ?></div></center>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
			    <div class="insidedetails">
				<?php echo $row1['description']; ?>
				</div>
			
				<br>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="topsac"><?php echo $row1['qty'];  ?></div></center>
			</td>
					
			<td style="border-bottom:none;border-top:none;">
				<div class="amount">
					<!--Basic amount-->
					<div class="amount1">
				<?php echo $row1['amount'];  ?>
				</div>
					
					
				</div>
			</td>
		</tr>
		<?php } if($row1['descslno1']!=''|| $row1['description1']!=''|| $row1['qty1']!='' || $row1['amount1']!=''){ ?>
	
		<tr style="border:none">
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="slno"><?php echo $row1['descslno1']; ?></div></center>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
			    <div class="insidedetails">
				<?php echo $row1['description1']; ?>
				</div>
			
				<br>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="topsac"><?php echo $row1['qty1'];  ?></div></center>
			</td>
					
			<td style="border-bottom:none;border-top:none;">
				<div class="amount">
					<!--Basic amount-->
					<div class="amount1">
				<?php echo $row1['amount1'];  ?>
				</div>
					
					
				</div>
			</td>
		</tr>
		<?php } if($row1['descslno2']!=''|| $row1['description2']!=''|| $row1['qty2']!='' || $row1['amount2']!=''){ ?>
		<tr style="border:none">
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="slno"><?php echo $row1['descslno2']; ?></div></center>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
			    <div class="insidedetails">
				<?php echo $row1['description2']; ?>
				</div>
			
				<br>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="topsac"><?php echo $row1['qty2'];  ?></div></center>
			</td>
					
			<td style="border-bottom:none;border-top:none;">
				<div class="amount">
					<!--Basic amount-->
					<div class="amount1">
				<?php echo $row1['amount2'];  ?>
				</div>
					
					
				</div>
			</td>
		</tr>
		<?php } if($row1['descslno3']!=''|| $row1['description3']!=''|| $row1['qty3']!=''|| $row1['amount3']!=''){ ?>
		<tr style="border:none">
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="slno"><?php echo $row1['descslno3']; ?></div></center>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
			    <div class="insidedetails">
				<?php echo $row1['description3']; ?>
				</div>
			
				<br>
			</td>
			<td style="border-right:none;border-bottom:none;border-top:none;">
				<center><div class="topsac"><?php echo $row1['qty3'];  ?></div></center>
			</td>
					
			<td style="border-bottom:none;border-top:none;">
				<div class="amount">
					<!--Basic amount-->
					<div class="amount1">
				<?php echo $row1['amount3'];  ?>
				</div>
					
					
				</div>
			</td>
		</tr>
		<?php } ?>
		<!--Total Amount-->
		<tr>
			
			<th colspan='3'><div class="total" style="float: right;">Total</div></th>
			
				
		
			<th class="totalamount" name><?php echo $row1['amount']+$row1['amount1']+$row1['amount2']+$row1['amount3'];  ?> <br></th>
		</tr>
	</table>

	
   </br></br>
	
	
	<div class="below" >
		
		
		
		<div class="list">
			<li>The above mentioned price is just an approximate figure. The price mentioned may vary based on customer requirements .
			</li>
			</br>
			<!--li>Yearly renewal cost needs to be paid.</li-->
			</br>
			
			Thanks for your Business!	

		</div>
			
		<div class="details">
			<br><br>
		</div>
		
			
	</div>
	
	</form>

</div>

	
<center>
<input id="printpagebutton" type="button" class="button" value="Print" onclick="printpage()"/>

<!--<input id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='performaquotation.php?id=<//?php echo $id ?>'" />-->

<input id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='quotation1.php'"/>

</center>
		
<br><br>
		

<!--print-->
<script type="text/javascript">
function printpage() 
{
	//Get the print button and put it into a variable
	var printButton = document.getElementById("printpagebutton");
	var backButton  = document.getElementById("backpagebutton");
	//var refreshButton  = document.getElementById("refreshpagebutton");
	//var updateButton  = document.getElementById("updatepagebutton");
	//Set the print button visibility to 'hidden' 
	printButton.style.visibility = 'hidden';
	backButton.style.visibility = 'hidden';
	// refreshButton.style.visibility = 'hidden';
	// updateButton.style.visibility = 'hidden';
	//Print the page content
	window.print()
	//Set the print button to 'visible' again 
	//[Delete this line if you want it to stay hidden after printing]
	printButton.style.visibility = 'visible';
	backButton.style.visibility = 'visible';
	//refreshButton.style.visibility = 'visible';
	//updateButton.style.visibility = 'visible';
}
</script>




</body>

</html>