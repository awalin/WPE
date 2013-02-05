<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Adobe GoLive" />
<title>Your Website</title>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/icons.css" />
<link
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
	rel="stylesheet" type="text/css" />
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script>
	$(document).ready(function() {
		$("#tabs").tabs();
		//$("#tabs").tabs('select',2);

	});
</script>

<style type="text/css">
.mybutton {
	font-size: 12px;
	font-family: Arial, sans-serif;
	font-weight: bold;
	float: right;
	width: 230px;
}
.mypadding
{
padding-top:30px;
padding-bottom:30px;
}
</style>
<script type="text/javascript">

<!--
	function hideall(){
		var divs=document.getElementsByTagName('div'), d, i=0;
		while(d=divs[i++]){
			if(d.id.match(/opt-/)){
				d.style.display ='none';
			}
			//d.id.match(/tab/)?d.style.display='none':null;
		}
	}

	function show(id) {
		hideall();
		var e = document.getElementById(id);
		if (e.style.display == 'none'){
			e.style.display = 'block';
		}
	}
	function SB_makeActive(id) {
		SB_makeVisibleALL();
		if(id == 'l3')
			SB_makeInVisible('l2');
		document.getElementById(id).className = "rounded-tl rounded-bl active ";
	}
	function SB_makeVisible(id) {
		document.getElementById(id).className = " ";
	}
	function SB_makeVisibleALL() {
		SB_makeVisible('l1');
		SB_makeVisible('l2');
		SB_makeVisible('l3');
		SB_makeVisible('l4');
		SB_makeVisible('l5');
		SB_makeVisible('l6');
		//SB_makeVisible(l7);
		//SB_makeVisible(l8);
	}
	function SB_makeInVisible(id) {
		document.getElementById(id).className = "hide";
	}
	//function remclass(classname,elementId) {
		//document.getElementById(elementId).className = document.getElementById(elementId).className.replace(/\b+classname+\b/,'');
	//}
//-->
</script>

<style type="text/css">
<!--
div.scroll-1 {
	height: 200px;
	width: 300px;
	overflow: auto;
	border: 1px solid #D8D8F8;
	border-radius: 15px;
}

div.scroll-2 {
	height: 200px;
	width: 320px;
	overflow: auto;
	border: 0px solid #666;
}

div.scroll-mine {
	height: 200px;
	width: 100%;
	overflow: auto;
	border: 1px solid #D8D8D8;
	border-radius: 15px;
}

.myspace {
	height: 20px;
	width: 100%;
	overflow: auto;
}
-->
</style>

</head>
<body>
	<div class="clouds">
		<div class="container">
			<div class="span-6 first">
				<div class="sidebar">
					<a href="index.php" title="Logo"> <img class="logo"
						src="images/logo.jpg"
						width="230px" height="35px" alt="." /> </a>
					<div class="navigation">
						<ul class="nav-main rounded">
							<li class="parent"><a href="show-patients.php" class=" "> My Patients</a>
							</li>

							<li class="parent"><a href="#" id="summary" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Patient Summary </a></li>
							<li class="parent"><a href="#" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Medication </a></li>
							<li class="parent"><a href="#" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Problem List</a></li>
							<li class="parent"><a href="#" id="orders" class=" "
								onclick="ORDERS_click_handler()">
									&nbsp;&nbsp;&nbsp;&nbsp;Orders/CPOE </a></li>

							<li class="parent"><a href="#" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Clinical Notes </a></li>

							<li class="parent"><a href="#" class=" ">ED Census </a>
							</li>
							<li class="parent"><a href="#" class="">My Alerts </a>
							</li>
							<li class="parent"><a href="#" class="  "> My Schedule</a>
							</li>
							<li class="parent"><a href="#" class=" rounded-bl "> Contacts</a>
							</li>
						</ul>

					</div>
				</div>
			</div>
			 
			<div class="span-19 last">
			
				<div class="page">
					<div class="content">

					<?php
					include_once 'php/patient-descriptor.php';
					?>
					<br /><br />
						<div><i ><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'><u><b>Your order for <?php echo $_GET["testName"]?>  is approved</b> </u></font></i> <br />
						<br /> 
						<br/><br /><br /><br /><br />
						<br/><br /><br /><br /><br /><br/><br /><br />
						<form action="show-patients.php" method="post">
						<input type="submit" class="mybutton" value="Return To Patient List" name="return"></form>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
			
			<div class="footer">University of Maryland</div>
		</div>
	</div>

	<script>
		$(function() {
			$("#accordion").accordion();
		});
	</script>

</body>
</html>
