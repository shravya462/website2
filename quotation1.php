<?php
session_start();
error_reporting(0);

?>

<?php
include("dbcon.php"); //connection.php
$id=$_GET['id'];
//$receipt_no=$_POST['receipt_no'];
//$query="select * from spark_quotation order by quotationno desc";
//$row=mysqli_query($db,$query);
//result = mysqli_fetch_array($row);
 //$quotationno=$result['quotationno'];
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
                                    <div class="card-body"><h5 class="card-title" style="text-align:center;">Quotation</h5>
                                        <form class="" method="POST">
                                            <div class="form-row">
                    <div class="col-md-6">
                   <div class="position-relative form-group">
				   <label for="exampleEmail11" class="">Quotation No</label>
			      <input name="quotationno" id="txtName" placeholder="" type="text" class="form-control" required>
				  <span id="lblError" style="color: red"></span></div>
                                                </div>
												
                  <div class="col-md-6">
                  <div class="position-relative form-group">
				  <label for="examplePassword11" class="">Date</label>
				  <input name="date"  type="date" class="form-control" required></div>
                                                </div>
                                            </div>
											<div id="dynamic_fieldanchor">
                  <div class="position-relative form-group"><label for="exampleAddress" class="">Description No</label>
                  <input type="text" name="descslno" id="txtName1" placeholder="enter description number"  class="form-control">
                  <span id="lblError1" style="color: red"></span></div>
				  
                 <div class="position-relative form-group"><label for="exampleAddress2" class="">Description</label>
                 <input name="description" id="" placeholder="enter description" type="text" class="form-control"></div>
											
               <div class="form-row">
                <div class="col-md-6">
               <div class="position-relative form-group"><label for="exampleCity" class="">Quantity</label>
               <input type="text" name="qty"  id="txtName2" class="form-control" required>
               <span id="lblError2" style="color: red"></span></div></div>
			   
                 <div class="col-md-6">
              <div class="position-relative form-group"><label for="exampleState" class="">Amount</label>
              <input type="text" name="amount" id="txtName3" class="form-control" required>
              <span id="lblError3" style="color: red"></span></div> </div> </div>
			  </div>
			                   <div class="col-sm-10">
							

                               <input  style="background:green;" type="button" name="addanchor" id="addanchor" class="mt-2 btn btn-primary" value="Add More">  </div>               
                                            
                              
							       <div>
	<input class="mt-2 btn btn-primary" type="submit" name="submit" value="Submit" id="checkBtn" onClick="ValidateForm(this.form)"/>
	
    <input class="mt-2 btn btn-primary" type="button"  name="refresh" value="Refresh" onclick="location.href='quotation1.php'" />
</div></form>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    </div>
        </div>
    </div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
</script>

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
	$(function () {
        $("#txtName1").keypress(function (e)
 		{
            var keyCode = e.keyCode || e.which;
            $("#lblError1").html("");
            var regex = /^[0-9]+$/;
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError1").html("Only  Numbers allowed.");
            }
            return isValid;
        });
    });
	$(function () {
        $("#txtName2").keypress(function (e)
 		{
            var keyCode = e.keyCode || e.which;
            $("#lblError2").html("");
            var regex = /^[0-9]+$/;
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError2").html("Only  Numbers allowed.");
            }
            return isValid;
        });
    });
	$(function () {
        $("#txtName3").keypress(function (e)
 		{
            var keyCode = e.keyCode || e.which;
            $("#lblError3").html("");
            var regex = /^[0-9]+$/;
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError3").html("Only  Numbers allowed.");
            }
            return isValid;
        });
    });
</script>
<script>  
$(document).ready(function(){  
    var i=1;
	
    $('#addanchor').click(function(){  
        i++; 
        if(i<=4)	
        {	
    $('#dynamic_fieldanchor').append('<div id="row'+i+'" ><div class="form-row">&nbsp;<input type="number" name="descslno1[]" id="descslno" placeholder="slno"  class="position-relative form-group form-control col-md-1">&nbsp;&nbsp;<input name="description1[]" id="description" placeholder="enter description" type="text" class="position-relative form-group form-control col-md-5">&nbsp;&nbsp;<input type="number" name="qty1[]"  id="qty" placeholder="qty" class="position-relative form-group form-control col-md-1" required>&nbsp;&nbsp;<input type="number" id="amount" name="amount1[]" placeholder="amount" class="position-relative form-group form-control col-md-3">&nbsp;&nbsp&nbsp;&nbsp;<input  style="background:red;" type="button" name="removeanchor" id="'+i+'" class="btn_removeanchor col-md-1  btn btn-primary form-group form-control" value="Remove" /></div></div>');
		}else { alert("Adding limit is exceeded") };
    }); 
	  
    $(document).on('click', '.btn_removeanchor', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });  
    $('#submit').click(function(){            
        $.ajax({  
            method:"POST",  
            data:$('#add_name').serialize(),  
            success:function(data)  
            {  
                //alert(data);  
                $('#add_name')[0].reset();  
            }  
        });  
    });  
});  
</script>

<!--Required-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--Sweet Alert-->
<script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>

<br></br><br>
<?php
if(isset($_POST['submit']))
{    $quotationno = $_POST['quotationno'];
    $date = $_POST['date'];
	
    $descslno = mysqli_real_escape_string($db,$_POST['descslno']);
	$descslno1= implode (",", $_POST['descslno1'] ) ;
	$adddescslno= explode(",",$descslno1);
	foreach ($adddescslno as $key => $value) 
	{
		if($key==0)
		{
			$descslno1=$value;
		}
		if($key==1)
		{
			$descslno2=$value;
		}
		if($key==2)
		{
			$descslno3=$value;
		}
		if($key==3)
		{
			$descslno4=$value;
		}
	}
	
	$description = mysqli_real_escape_string($db,$_POST['description']);
	$description1= implode (",", $_POST['description1'] ) ;
	$adddescription= explode(",",$description1);
	foreach ($adddescription as $key => $value) 
	{
		if($key==0)
		{
			$description1=$value;
		}
		if($key==1)
		{
			$description2=$value;
		}
		if($key==2)
		{
			$description3=$value;
		}
		if($key==3)
		{
			$description4=$value;
		}
		
	}

    $qty = mysqli_real_escape_string($db,$_POST['qty']);
	$qty1= implode (",", $_POST['qty1'] ) ;
	$addqty= explode(",",$qty1);
	foreach ($addqty as $key => $value) 
	{
		if($key==0)
		{
			$qty1=$value;
		}
		if($key==1)
		{
			$qty2=$value;
		}
		if($key==2)
		{
			$qty3=$value;
		}
		if($key==3)
		{
			$qty4=$value;
		}
	}
	
	$amount = mysqli_real_escape_string($db,$_POST['amount']);
	$amount1= implode (",", $_POST['amount1'] ) ;
	$addamount= explode(",",$amount1);
	foreach ($addamount as $key => $value) 
	{
		if($key==0)
		{
			$amount1=$value;
		}
		if($key==1)
		{
			$amount2=$value;
		}
		if($key==2)
		{
			$amount3=$value;
		}
		if($key==3)
		{
			$amount4=$value;
		}
	}
    
  $query = "insert into spark_quotation (quotationno,date,descslno,description,qty,amount,descslno1,description1,qty1,amount1,descslno2,description2,qty2,amount2,descslno3,description3,qty3,amount3) values ('$quotationno','$date','$descslno','$description','$qty','$amount','$descslno1','$description1','$qty1','$amount1','$descslno2','$description2','$qty2','$amount2','$descslno3','$description3','$qty3','$amount3')";

	$query1=mysqli_query($db, $query);
	if($query1)
	{
	echo "<script>window.open('printquotation.php?quotationno=".$quotationno."','_self')</script>";

	}else 
	{
		echo mysqli_error($db);
		echo '<center>'.'<font size="4" color="black">Not Inserted</font>'.'</center>';
	}
	
    
  
}
?>


<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
