<?php
session_start();
error_reporting(0);

?>

<?php
include("dbcon.php"); //connection.php
$id=$_GET['id'];//Agent Name
$invoiceno=$_GET['invoiceno'];
?>

<?php
$query="SELECT * FROM `spark_invoice` where invoiceno='$invoiceno'";		
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
	margin: 2mm; 
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
	
    <!--ADDRESS-->
	<div class="billtoclients" id="billtoclients" style="padding-bottom:30px;">
    <img src="images/123.png" ></br>
	<span style="font-size: 20px;font-weight:bold">_craft_studio</span> </br>
		Shama Manzil,</br>Near Badriya Masjid,Vinayanagara </br>
		Post-Belapu,</br>
		Udupi Dist-574117</br>
		Tel:  9945510608</br></br>
	
		<font style="font-size: 17px;font-weight:bold">Billing Address :</font> </br>
		<div class="billtoclients" id="billtoclients" style="padding-bottom:30px;">
	<div style="font-weight:bold"> <?php echo $row1['address']; ?> </div> </br>
	<!--	(Spark IT Solutions) </br>
		Sponsered By:Jnana Sadhana Educational Trust(Reg)</br>
		Convent Road ,Udupi-576101</br>
		Tel:  9481955096</br></br>
-->
	</div>
	</div>
   
    <div class="otherdetails" id="otherdetails" >
    
	<p style="font-size: 17px;font-weight:bold;color:blue;">&nbsp;&nbsp;INVOICE</p>
    <p style="font-size: 17px;">&nbsp;&nbsp;Invoice#[<?php echo $row1['invoiceno']; ?>]</p>
    <p style="font-size: 17px;">&nbsp;&nbsp;Date : <?php echo date("d/m/Y",strtotime($row1['date'])) ; ?> </p>
	</div>
	
	<br></br><br></br><br></br>
		
	
	
	<div class="taxinvoice" id="taxinvoice"><b><u></u></b></div>
	
	

	<table class="tabletop"  >	
		<tr>
			<th style="width:80px">Sl No.</th>
			<th>Description</th>
			<th style="width:70px">Qty</th>
			<th style="width:70px">Amount</th>
		</tr>
		
		<?php  if($row1['descslno']!=''|| $row1['description']!=''|| $row1['qty']!=''|| $row1['amount']!=''){ ?>
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
			
			<th colspan='3'><div class="total" style="float: right;">Grand Total</div></th>
			
			<?php $cal=$row1['amount']+$row1['amount1']+$row1['amount2']+$row1['amount3']; ?>
			<th class="totalamount" id="demo"><?php echo $cal ; ?> <br>
			
			</th>
		</tr>
        	<tr>
			
    <?php
    $ones = array(
     "",
     " One",
     " Two",
     " Three",
     " Four",
     " Five",
     " Six",
     " Seven",
     " Eight",
     " Nine",
     " Ten",
     " Eleven",
     " Twelve",
     " Thirteen",
     " Fourteen",
     " Fifteen",
     " Sixteen",
     " Seventeen",
     " Eighteen",
     " Nineteen"
    );
         
    $tens = array(
     "",
     "",
     " Twenty",
     " Thirty",
     " Forty",
     " Fifty",
     " Sixty",
     " Seventy",
     " Eighty",
     " Ninety"
    );
         
    $triplets = array(
     "",
     " Thousand",
     " Million",
     " Billion",
     " Trillion",
     " Quadrillion",
     " Quintillion",
     " Sextillion",
     " Septillion",
     " Octillion",
     " Nonillion"
    );
         
    // recursive fn, converts three digits per pass
    function convertTri($num, $tri)
    {
        global $ones, $tens, $triplets;
         
        // chunk the number, ...rxyy
        $r = (int) ($num / 1000);
        $x = ($num / 100) % 10;
        $y = $num % 100;
         
        // init the output string
        $str = "";
         
        // do hundreds
        if ($x > 0)
            $str = $ones[$x] . " Hundred";
         
        // do ones and tens
        if ($y < 20)
            $str .= $ones[$y];
        else
            $str .= $tens[(int) ($y / 10)] . $ones[$y % 10];
             
        // add triplet modifier only if there
        // is some output to be modified...
        if ($str != "")
            $str .= $triplets[$tri];
         
        // continue recursing?
        if ($r > 0)
            return convertTri($r, $tri+1).$str;
        else
            return $str;
    }
         
    // returns the number as an anglicized string
    function convertNum($num)
    {
        $num = (int) $num;    // make sure it's an integer
         
        if ($num < 0)
            return "negative".convertTri(-$num, 0);
     
        if ($num == 0)
            return "zero";
         
        return convertTri($num, 0);
    }
         
    // Returns an integer in -10^9 .. 10^9
    // with log distribution
    function makeLogRand()
    {
        $sign = mt_rand(0,1)*2 - 1;
        $val = randThousand() * 1000000
        + randThousand() * 1000
        + randThousand();
        $scale = mt_rand(-9,0);
         
        return $sign * (int) ($val * pow(10.0, $scale));
    }
    ?>
			<th colspan='4' style="text-align:left;">Amount in words :&nbsp;&nbsp;&nbsp;<?php echo convertNum($cal);?></th>
			
			
			
		</tr>
	</table>

	
   </br></br>
	
	
	<div class="below" >
		
		
		
		<div class="list" style="float: right;">
			For _craft_studio
			</br>
			<img src="<?php echo "upload/".$row1['upload']; ?>",width="100px", height="100px"/>
			</br>
			
			<p style="margin-top: 100px;">Authorised Signatory</p>

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

<input id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='invoices1.php'">

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