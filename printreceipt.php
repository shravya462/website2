<?php
session_start();
error_reporting(0);


?>

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
        margin: 0;
}
</style>

<?php
include "dbcon.php";
$id=$_GET['id'];
$receipt_no = $_GET['receipt_no'];
 $query = "SELECT * FROM `spark_receipt` WHERE `receipt_no`='" . $receipt_no . "'";
$row=mysqli_query($db,$query);
$result = mysqli_fetch_array($row);
?>
<html>

<head>
<link  rel="Stylesheet"type="text/css" href="app-assets/css/printreceipt.css"></link>
</head>

<body>
<form action="" method="GET">


<div class="page">

	<!--Logo-->
	
	<div class="image">
		
	<img src="images/123.png" alt="Avatar" style="width: 90px;height: 81px;">
		
		
	</div>
	<!--Logo>
	<div class="spark">Spark</div-->
	
	
	<!--Address-->

	<div class="address">
		
		<span  class="spark">_craft_studio</span> <span style="font-size:15px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Shama Manzil,</b></span> <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Near Badriya Masjid, Vinayanagara,Belapu post,Udupi dist- 574117<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : sampeen608@gmail.com &nbsp;&nbsp;&nbsp;Contact : 9945510608</b><br>
		
		
	</div>
	
	
	<div class="address1">
		<div class="block" style="background:yellow; width:152px;height:49px">
		<center style="padding:14px"> <b> RECEIPT</b></center>	
		
		</div>
		<div >
		 
		No &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
		<input  id="text" type="text" name="receipt_no" value="<?php echo $result['receipt_no']; ?>" style="outline:none;width:88px;border:none;"> 
		<b>
		
		</b><br>
		<br>
		Date &nbsp;:&nbsp;&nbsp;
		<input  id="text" type="text" name="date" value=" <?php echo date("d/m/Y",strtotime($result['issued_date'])) ; ?>"   style="outline:none;width:88px;border-top:none;border-left:none;border-right:none"> 
		<b> 
		</div>
	</div>
	
	
	<hr class="receipt">
	
	<h3><p class="receipttext"><b></b></p></h3>

	<div class="details">
		
		<div class="receivedwiththanksfrom">Received with thanks from &nbsp;</div>
		<input  id="text" type="text" name="client_name" value="<?php echo $result['client_name']; ?>" style="outline:none;width:535px;border-top:none;border-left:none;border-right:none"> 	
		<div class="company">
			<b>
			</b>
		</div>
		
		<br>
		<br>
		<div class="comp">
		<input  id="text" type="text" name="client_name" value="<?php echo $result['client_name1']; ?>" style="outline:none; width:754px;border-top:none;border-left:none;border-right:none">
		</div>
		<br>
    
		
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
	$payment=$result['payment']; 
    ?>
	<div class="thesumofRupees">The sum of Rupees &nbsp;
		<input  id="text" type="text" name="words" value="<?php echo convertNum($payment);?>" style="outline:none; width:593px;border-top:none;border-left:none;border-right:none">
		</div>
		
		
		</br><br>
		
		
		
		
		<div class="no">No &nbsp;
		<input  id="text" type="text" name="no" value="<?php echo $result['receipt_no']; ?>" style="outline:none; width:133px;border-top:none;border-left:none;border-right:none">
		</div>
	
		<div class="dt">Date &nbsp;
		<input  id="text" type="text" name="issued_date" value=" <?php echo date("d/m/Y",strtotime($result['issued_date'])) ; ?>" style="outline:none; width:133px;border-top:none;border-left:none;border-right:none">
		</div>

		
		<div class="drawnon">Drawn On &nbsp;
		<input  id="text" type="text" name="drawn_date" value="<?php echo date("d/m/Y",strtotime($result['drawn_date'])) ; ?>" style="outline:none; width:133px;border-top:none;border-left:none;border-right:none">
		</div>
		
		
		</br><br>
		

	
	</div>
	<div class="option">
	<br><input type="radio" id="cash" name="payment_mode"  <?php if($result['payment_mode']=='cash') {?> checked="true" <?php }?> value="cash">
		<label >CASH</label><br>
		<input type="radio" id="cheque" name="payment_mode"  <?php if($result['payment_mode']=='cheque') {?> checked="true" <?php }?>  value="cheque">
		<label >CHEQUE</label><br>
		<input type="radio" id="advance" name="payment_mode"  <?php if($result['payment_mode']=='advance') {?> checked="true" <?php }?>  value="advance">
		<label >ADVANCE</label><br> 
		<input type="radio" id="draft" name="payment_mode"  <?php if($result['payment_mode']=='draft') {?> checked="true" <?php }?>  value="draft">
		<label >DRAFT</label><br>
	</div>
	<div class="table">
		<table>
			<tr>
				<th>AMOUNT</th>
				<td ><input  id="text" type="text" name="amount" value="<?php echo $result['amount']; ?>" style="outline:none; width: 100px;border:none"></td>
			</tr>
			<tr>
				<th>PAYMENT</th>  
				<td><input  id="text" type="text" name="payment"  value="<?php echo $result['payment']; ?>" style="outline:none; width: 100px;border:none"></td>      
			</tr>  
			<tr>
				<th>BALANCE</th>
				<td><input  id="text" type="text" name="balance"  value="<?php echo $result['balance']; ?>" style="outline:none; width: 100px;border:none"></td>
			</tr>
		
		</table>
			
	</div>
	<div class="rupees">
	<label for="abc" style=" position:relative; left:+15px;" >₹</label><input type="text" id="abc" name="net_amount"class="rupee-txt"  value="<?php echo $result['payment']; ?>" style=" padding-left: 30px;"  />
		
			<p>Subject to enhancement of Cheque</p>
	</div>
	<br>
	
	<div class="sign">
	<img src="<?php echo "upload/".$result['upload']; ?>",width="100px", height="100px"/>
		 Signature
	</div>

</div>
</form>




<center>
<input style="background: #3f6ad8;" id="printpagebutton" type="button" class="button" name="Print" value="Print" onclick="printpage()"style="background:crimson;"/>
<input style="background: #3f6ad8;" id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='receipt1.php'"style="background:crimson;"/>

<!--<input id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='performareceiptreport.php?id=<?php echo $id ?>'" />-->
<!--<input id="backpagebutton" type="button" class="button" value="Back" onclick="location.href='performareceiptreporttax.php?id=<?php echo $id ?>'" />-->
</center>

<br></br>

<script type="text/javascript">//print
    function printpage() 
	{
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
		var backButton  = document.getElementById("backpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
		backButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		backButton.style.visibility = 'visible';
    }
</script>


</body>

</html>