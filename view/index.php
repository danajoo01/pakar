<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar - Penyakit Pada Manusia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rahmat Sabilludin">
	<link href="view/css/bootstrap.min.css" rel="stylesheet">
	<link href="view/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="view/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript" src="view/js/ga.js"></script>
	<script type="text/javascript" src="view/js/jquery.min.js"></script>
	<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="view/js/jquery.min.js"></script>
	<script type="text/javascript" src="view/js/jscript_jquery-1.6.4.js"></script>
	<script type="text/javascript" src="view/js/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			$('#registerHere input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				rules:{
					nama_lengkap:"required",
					email:{
							required:true,
							email: true
						},
					no_telp:{
						required:true,
						minlength: 11
					},
					gender:"required"
				},
				messages:{
					nama_lengkap:"Enter your Full Name",
					email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					no_telp:{
						required:"Enter your Phone Number",
						minlength:"Phone Number must be minimum 11 characters"
					},
					gender:"Select Gender"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>
<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#email").change(function(){ 
 //if theres a change in the email textbox
//alert(hello);
var email = $("#email").val();//Get the value in the email textbox
	var regdata = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	 if(!(regdata).test($("#email").val()))
	 {
	 //alert("hello");
	 $("#email").css('border','1px solid red');
	 $("#email").focus();
	 $("#error1").html("enter the valid emailid!");
	  return false;
	 }
    else{
	   $("#email").css('border','1px solid #7F9DB9');
	  $("#error1").html('<img src="view/img/loader.gif" align="absmiddle">&nbsp;Checking availability...'); 
	  
     $.ajax({  //Make the Ajax Request
     type: "POST",  
     url: "check.php",  //file name
     data:"email="+ email,  //data
     success: function(server_response){
	$("#error1").ajaxComplete(function(event,request){
	//alert(server_response);
	if(server_response == '0')
	{ 
	$("#error1").html('<img src="view/img/available.png" align="absmiddle"> <font color="Green"> Available, Alamat Email masih perawan. </font>  ');
	}  
	else  if(server_response == '1')
	{  
	$("#error1").html('<img src="view/img/not_available.png" align="absmiddle"><font color="red"> Alamat Email ini sudah terdaftar di sistem. </font>');
	}  
     });
   } 
   
  }); 
 }
});

});
</script>
</head>

<body>
<div style="padding-top:2%" class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> 
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li><a href="media.php?module=home"><i class="icon-home icon-black"></i> Home</a></li>
								<li><a href="about-us.html"><i class="icon-user icon-black"></i> About Us</a></li>
								<li><a href="all-news.html"><i class="icon-book icon-black"></i> News</a></li>
								<li><a href="contact-us.html"><i class="icon-envelope icon-black"></i> Contact Us</a></li>
							</ul>
							<ul class="nav pull-right">
								<li><a href="donation.html"><i class="icon-hand-right icon-black"></i> Donation</a></li>
								<li class="divider-vertical"></li>
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-globe icon-black"></i> Account<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li class="divider"></li>
										<li><a href="help.html">Help</a></li>
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="row-fluid">
				<div class="span8"><br/>
				<?php include "content.php"; ?>
				</div>
				<div class="span4">
					<form class="form-search">
						<input type="text" style="width:90%" class="input-medium search-query" placeholder="Search the site!">
					</form> 
					<?php include "sidebar.php"; ?>
				</div>
			</div>
			<div class="well">
				<div class="span12">
					<center> SarjanaKomedi.com</center>
				</div>
			</div>
		</div>
	</div>
</div>	
</body>
</html>