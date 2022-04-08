<?php
session_start();
error_reporting(0);

?>

<?php
include("dbcon.php");//connection.php
$id=$_GET['id'];
//$receipt_no=$_POST['receipt_no'];
// $query="select * from spark_receipt order by receipt_no desc";
//$row=mysqli_query($db,$query);
//$result = mysqli_fetch_array($row);
 //$count=mysqli_num_rows($row);
 //if($count==0){
//	echo $receipt_no="100";
// }
//	 else {
//		 $receipt_no=$result['receipt_no'];
//}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>_craft_studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<style>input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}</style>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div ><img src="images/12.png" style="height:120px;width:150px"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                   
							<span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
              
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
             </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                   <a href="logout.php"><button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                <i class="fa fa-power-off" aria-hidden="true">&nbsp;&nbsp;Logout</i>
                                    </button></a>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                  
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                  
                                </div>
                            </div>
                        </div>
                    </div>       
                 </div>
            </div>
        </div>        
		       <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"></li>
                            
                                  <li>
                                    <a href="adminreminder.php" class="mm-active">
                                        <i class=""></i>
                                        Dashboard 
                                    </a>
                                </li>
                                
                                 <li>
                                    <a href="quotation1.php">
                                        <i class=""></i>
                                        Quotation
                                        <i class=""></i>
                                    </a>
                                    
                                </li>
                                
                                
                                
                                  <li>
                                    <a href="invoices1.php">
                                        <i class=""></i>
                                        Invoices
                                        <i class=""></i>
                                    </a>
                                </li> 
                                
                                 <li>
                                    <a href="receipt1.php">
                                        <i class=""></i>
                                        Receipts
                                    </a>
                                </li>
                               
                                
                           
                            </ul>
                        </div>
                    </div>
                </div>    
				<div class="app-main__outer">
                    <div class="app-main__inner">
                     
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title" style="text-align:center;">Receipt</h5>
                                        <form class="" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6">
            <div class="position-relative form-group"><label for="exampleEmail11" class="">Receipt No</label><input name="receipt_no" id="txtName" placeholder="" type="text" class="form-control"><span id="lblError" style="color: red"></span></div>
                                                </div>
												
                                                  <div class="col-md-6">
             <div class="position-relative form-group">
				  <label for="examplePassword11" class="">Date</label>
				  <input name="issued_date"  type="date" class="form-control" required></div>
                                                </div>
                                            </div>
											
             <div class="position-relative form-group"><label for="exampleAddress" class="">Receipt Towards</label><input  type="text" id="text" name="client_name" required  class="form-control"></div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
             <div class="position-relative form-group"><label for="exampleCity" class="">Amount</label><input id="text1" type="number" name="amount" required pattern="[0-9]+"  class="form-control"></div></div>
			 
			 
                                                <div class="col-md-4">
             <div class="position-relative form-group"><label for="exampleState" class="">Payment</label><input id="text2" type="number" name="payment" required pattern="[0-9]+"  onchange="reSum();" class="form-control"></div>
                                                </div>
												
                                                <div class="col-md-4">
             <div class="position-relative form-group"><label for="exampleState" class="">Balance</label><input id="Sum" type="text" name="balance" readonly class="form-control"></div> </div>
												
												<div class="col-md-6">
               <div class="position-relative form-group"><label for="exampleState" class="">Drawn Date</label><input id="text" type="date" name="drawn_date" class="form-control"></div></div>
												
												<div class="col-md-6">
             <div class="position-relative form-group"><label for="exampleState" class="">Payment Mode</label>
		<select name="payment_mode"  id="payment_mode" onChange="check(this);"  class="form-control" required>
													
    <option value="" disabled selected hidden>Payment Mode</option>
    <option value="cash">Cash</option>
    <option value="cheque">cheque</option>
    <option value="advance">Advance</option>
	<option value="draft">Draft</option>
    </select></div>
                                                </div>
                                            </div>

							      <div><br>
		Upload Sign :
		<input list="browsers" type="file" name="uploadsign" id="uploadsign" required>
		</div>
							 
                                            <div>
	<input class="mt-2 btn btn-primary" type="submit" name="submit" value="Submit" id="checkBtn" onClick="ValidateForm(this.form)"/>
	
    <input class="mt-2 btn btn-primary" type="button"  name="refresh" value="Refresh" onclick="location.href='receipt1.php'" />
</div>

<span style="color:red"><?php
         if($_FILES['uploadsign']['size']>10000)
	{
		die($msg= "File should be less than or equal to 10KB");
		
		
	} ?>        
         </span>
             </form>
			<?php


if(isset($_POST['submit']))
{
	$receipt_no = $_POST['receipt_no'];
    $issued_date = $_POST['issued_date'];
    $client_name = $_POST['client_name'];
	//$client_name1 = $_POST['client_name1'];
	//$rupees_words = $_POST['rupees_words'];
   // $no = $_POST['no'];
   // $date = $_POST['date'];
    $drawn_date = $_POST['drawn_date'];
    $payment_mode= $_POST['payment_mode'];
    $amount = $_POST['amount'];
    $payment = $_POST['payment'];
    $balance = $_POST['balance'];
    //$net_amount = $_POST['net_amount'];
	
	// here is the current date time timestamp
	$time = date("d-m-Y")."-".time();

	// here we set it to the image name
	 $fileName = $_FILES['uploadsign']['name'];
	 $fileName = $time."-".$fileName ;
    
	
	
	
	// upload that image into the directory name: images
	move_uploaded_file($_FILES['uploadsign']['tmp_name'], "upload/".$fileName);
	 $img="upload/".$_FILES['uploadsign']['name'];

    
      echo $query = "insert into spark_receipt (receipt_no,issued_date,client_name,drawn_date,payment_mode,amount,payment,balance,upload) values ('$receipt_no','$issued_date','$client_name','$drawn_date','$payment_mode','$amount','$payment','$balance','$fileName')";

	$query1=mysqli_query($db, $query);
	if($query1)
	{
		echo "<script>window.open('printreceipt.php?receipt_no=".$receipt_no."','_self')</script>";

	}else{
		echo"not inserted ";
	}
    
  
}
?>


                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    </div>
        </div>
    </div>
<script>
function myFunction() {
  document.getElementById("sum").readOnly = true;
}
</script>

                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#txtName").keypress(function (e)
 		{
            var keyCode = e.keyCode || e.which;
            $("#lblError").html("");
            var regex = /^[0-9]+$/;
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only  Numbers allowed.");
            }
            return isValid;
        });
    });
	</script>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>

function reSum()
{
    var num1 = parseInt(document.getElementById("text1").value);
    var num2 = parseInt(document.getElementById("text2").value);
	if(num1>num2||num1==num2)
	{
		document.getElementById("Sum").value = num1 - num2;
	}
    else{
		alert("Payment should be less than or equal to amount");
	}

}

</script></body>
</html>
