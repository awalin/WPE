<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Adobe GoLive" />
<title>Your Website</title>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/icons.css" />
<!-- <script src="http://jqueryui.com/jquery-1.5.1.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.core.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.widget.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.accordion.js"></script>
	 -->
<style type="text/css">
<!--
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

<script type="text/javascript">
<!--
	function makeVisble(id) {
		var e = document.getElementById(id);
		if (e.style.display == 'none')
			e.style.display = 'block';
	}
	function makeInVisble(id) {
		var e = document.getElementById(id);
		if (e.style.display == 'block')
			e.style.display = 'none';
	}
	function SB_makeActive(id) {
		if(id == 'orders'){
			SB_makeVisibleALL();
			document.getElementById(id).className = "rounded-tl rounded-bl active ";
		}
	}
	function SB_makeVisible(id) {
		document.getElementById(id).className = " ";
	}
	function SB_makeVisibleALL() {
		SB_makeVisible('summary');
		SB_makeVisible('orders');
		SB_makeVisible('o1');
		SB_makeVisible('o2');
		SB_makeVisible('o3');
	}
	function SB_makeInVisible(id) {
		document.getElementById(id).className = "hide";
	}
	function ORDERS_click_handler(){
		SB_makeActive('orders');
		makeInVisble('info');
		makeVisble('help');
	}
//-->
</script>

</head>
<body>

	<div class="clouds">
		<div class="container">
			<div class="span-6 first">
				<div class="sidebar">
					<a href="index.php" title="Logo"> <img class="logo" src="images/logo.jpg"
						width="230px" height="35px" alt="." /> </a>
					<div class="navigation">
						<ul class="nav-main rounded">
							<li class="parent"><a href="show-patients.php" class=" "> My Patients</a>
							</li>

							<li class="parent"><a href="#" id="summary"
								class="rounded-tl rounded-bl active ">
									&nbsp;&nbsp;&nbsp;&nbsp;Patient Summary </a></li>
							<li class="parent"><a href="#" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Medication </a></li>
							<li class="parent"><a href="#" class=" ">
									&nbsp;&nbsp;&nbsp;&nbsp;Problem List</a></li>
							<li class="parent"><a href="#" id="orders" class=" "
								onclick="ORDERS_click_handler()">
									&nbsp;&nbsp;&nbsp;&nbsp;Orders/CPOE </a></li>

							
							<li class="parent"><a href="patient-order.php?MRN=<?php echo $_GET["MRN"]?>" id="o2" class="hide">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Write Orders</i></a>
							</li>
							<li class="parent"><a href="#" id="o1" class="hide">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Active Orders</i></a>
							</li>
							<li class="parent"><a href="#" id="o3" class="hide">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Unsigned</i>
									Orders</a></li>


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
						<br /> <br />
						
						<div id="help" style="display: none;"><i ><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Current Service and Status</font></i> <br />
						<br /> <br />
						<table border="0" width="100%">
							  <tr>
								<th align="left"><i><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Service</font></i></th>
								<th align="left"><i><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Status</font></i></th>
								<th align="left"><i><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Date</font></i></th>
							  </tr>
							  <tr>
								<td width="50%"> <font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>1. Lab - Chemistry</font></td>
								<td width="30%"><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'> Unsigned </font></td>
								<td width="30%"><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'> 03/10/2009 </font></td>
							  </tr>
							  
						</table>
						</div>
						
						<div id="info" style="display: block;">
						<?php
						echo $patient_info[$_GET["MRN"]];
						?>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="footer">University of Maryland</div>
			</div>
		</div>
	</div>
	<script>
		$(function() {
			$("#accordion").accordion();
		});
	</script>

</body>
</html>
