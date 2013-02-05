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


							<li class="parent"><a
								href="patient-order.php?MRN=<?php echo $_GET["MRN"]?>" id="o2"
								class="rounded-tl rounded-bl active">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Write
										Orders</i> </a>
							</li>
							<li class="parent"><a href="#" id="o1" class="">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Active
										Orders</i> </a>
							</li>
							<li class="parent"><a href="#" id="o3" class="">
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
					
					<br />
						<div><i ><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'><u><b>New Order for <?php echo $_GET["TName"]?></b> </u></font></i> <br />
						<br /> 
						<table style= "cellpadding:20px; cellspacing: 20px;"   border="0" width="100%">
						   <tr class="mypadding">
							<td > 
								<font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Purpose of study </font></td>
							<td >
								<input style="width: 100%;height: 30px;" type="text" name="pos" /> </td>
						  </tr>
						  <tr style="padding-top:30px; padding-bottom:30px;" >
							<td > 
						<font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Enter test date </font></td>
							<td >
								<input type="radio" name="group1" value="0" checked><font style='font-family:Garamond, Georgia, serif;' size='3' color='black'> Now </font><br>
								<input type="radio" name="group1" value="sd" > <font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Select start Date </font>
								<select name="month">
								<option style="width:15px; height: 25px;" value="0">MM</option>
								<option style="width:15px; height: 25px;" value="1">01</option>
								<option style="width:15px; height: 25px;" value="2">02</option>
								<option style="width:15px; height: 25px;" value="3">03</option>
								<option style="width:15px; height: 25px;" value="4">04</option>
								<option style="width:15px; height: 25px;" value="5">05</option>
								<option style="width:15px; height: 25px;" value="6">06</option>
								<option style="width:15px; height: 25px;" value="7">07</option>
								<option style="width:15px; height: 25px;" value="8">08</option>
								<option style="width:15px; height: 25px;" value="9">09</option>
								<option style="width:15px; height: 25px;" value="10">10</option>
								<option style="width:15px; height: 25px;" value="11">11</option>
								<option style="width:15px; height: 25px;" value="12">12</option>
								
								</select>
								<select name="dd">
								<option style="width:15px; height: 25px;" value="0">DD</option>
								<option style="width:15px; height: 25px;" value="1">01</option>
								<option style="width:15px; height: 25px;" value="2">02</option>
								<option style="width:15px; height: 25px;" value="3">03</option>
								<option style="width:15px; height: 25px;" value="4">04</option>
								<option style="width:15px; height: 25px;" value="5">05</option>
								<option style="width:15px; height: 25px;" value="6">06</option>
								<option style="width:15px; height: 25px;" value="7">07</option>
								<option style="width:15px; height: 25px;" value="8">08</option>
								<option style="width:15px; height: 25px;" value="9">09</option>
								<option style="width:15px; height: 25px;" value="10">10</option>
								<option style="width:15px; height: 25px;" value="11">11</option>
								<option style="width:15px; height: 25px;" value="12">12</option>
								<option style="width:15px; height: 25px;" value="13">13</option>
								<option style="width:15px; height: 25px;" value="14">14</option>
								<option style="width:15px; height: 25px;" value="2">15</option>
								<option style="width:15px; height: 25px;" value="3">16</option>
								<option style="width:15px; height: 25px;" value="4">17</option>
								<option style="width:15px; height: 25px;" value="5">18</option>
								<option style="width:15px; height: 25px;" value="6">19</option>
								<option style="width:15px; height: 25px;" value="7">20</option>
								<option style="width:15px; height: 25px;" value="8">21</option>
								<option style="width:15px; height: 25px;" value="9">22</option>
								<option style="width:15px; height: 25px;" value="10">23</option>
								<option style="width:15px; height: 25px;" value="11">24</option>
								<option style="width:15px; height: 25px;" value="12">25</option>
								<option style="width:15px; height: 25px;" value="6">26</option>
								<option style="width:15px; height: 25px;" value="7">27</option>
								<option style="width:15px; height: 25px;" value="8">28</option>
								<option style="width:15px; height: 25px;" value="9">29</option>
								<option style="width:15px; height: 25px;" value="10">30</option>
								<option style="width:15px; height: 25px;" value="11">31</option>
								
								</select>
								
								<select name="year">
								<option style="width:25px; height: 25px;" value="0">YYYY</option>
								<option style="width:25px; height: 25px;" value="1">2011</option>
								<option style="width:25px; height: 25px;" value="2">2012</option>
								<option style="width:25px; height: 25px;" value="3">2013</option>
								<option style="width:25px; height: 25px;" value="4">2014</option>
								<option style="width:25px; height: 25px;" value="5">2015</option>
						
								</select>
								
								<br>
						  </tr>
						  </table>
						  <br />
						  <table style= "cellpadding:20px; cellspacing: 20px;"   border="0" width="100%">
						   <tr class="mypadding">
								<td width="30%" > 
								<font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>ED Patient Room # </font></td>
								<td width="30%">
								<input style="width: 40%;height: 30px;" type="text" name="EDR" /> 
								</td>
								<td width="20%">
								<font style='font-family:Garamond, Georgia, serif; ' align = 'left' size='3' color='black'>Isolation </font> </td>
								<td width="20%"><font style='font-family:Garamond, Georgia, serif; ' align = 'left' size='3' color='black'>
								<select name="iso">
								<option style="width:40px; height: 25px;" value="0">No</option>
								<option style="width:40px; height: 25px;" value="1">Yes</option>
								</select></font></td>
						  </tr>
						  </table>
						  <br />
						  <table style= "cellpadding:20px; cellspacing: 20px;"   border="0" width="100%">
						 <tr class="mypadding">
								<td width="30%" > 
								<font style='font-family:Garamond, Georgia, serif;' size='3' color='black'>Transportation </font></td>
								<td width="30%">
								<select name="trans">
								<option style="width:120px; height: 25px;" value="0">Ambulatory</option>
								<option style="width:120px; height: 25px;" value="1">Wheel Chair</option>
								<option style="width:120px; height: 25px;" value="1">Stretcher</option>	
								</select>
								</td>								
								<td width="20%">
								<font style='font-family:Garamond, Georgia, serif; ' align = 'left' size='3' color='black'>Priority </font></td>
								<td width="20%">
								<select name="pri">
								<option style="width:90px; height: 25px;" value="0">Urgent</option>
								<option style="width:90px; height: 25px;" value="1">Routine</option>
								</select></font></td>
						  </tr>
						 
						</table>
						<br />
						<table width="99%" border="0">
							<tr><td>
							<font style='font-family:Garamond, Georgia, serif; ' align = 'left' size='3' color='black'>Clinical Notes</font>
							</td>
							</tr>
							<tr><td>
							<input style="width: 100%;height: 50px;" type="text" name="firstname" />
							<!-- <textarea rows="4" cols="80"></textarea> -->
							</td>
							</tr>
							</table>
							<br />
							<input style="width: 30%;height: 30px; float:right" type="text" name="pos"  align="right"/>
							<font style='font-family:Garamond, Georgia, serif; float:right' size='3' color='black' >Sign your Initials </font>
							<form action="approval.php?MRN=<?php echo $_GET["MRN"]?>&TestName=<?php echo $_GET["TName"]?>">
							<br /><br /> <br />
							<input type="hidden" name="MRN" value='<?php echo $_GET["MRN"]?>'>
							<input type="hidden" name="testName" value='<?php echo $_GET["TName"]?>'>
							<input type="submit" name="submit" value="Submit" style='font-family:Garamond, Georgia, serif; float:right; ' size='3' color='black' >
							<input type="button" name="cancel" value="Cancel" style='font-family:Garamond, Georgia, serif;  ' size='3' color='black'>
								 
						</form>
						</div>
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
