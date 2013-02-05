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

<script type="text/javascript">
	function hideotherrows(id) {

		//document.getElementsByid('wheel').className= " ";
		var x=document.getElementById("wheel");
		x.className=" ";
		
		var divs = document.getElementsByTagName('tr'), d, i = 0;
		
		while (d = divs[i++]) {
			if (d.id.match(/988/)) {
				if(d.id == id)
					continue;
				
				if(d.className == 'alternate-1')
					d.className = " clear-1";
				else
					d.className = " clear-0";
			}
		}
		//now hide the images
		var img = document.getElementsByTagName('img'), d, i = 0;
		while (dim = img[i++]) {
			if (dim.id.match(/I988/)) {
				//if(dim.id == "I"+id)
					//continue;
				//dim.className = "hide";
			}
		}

		//CHNAGE THE FOLLOWING VALUE TO REDUCE ANIMATION TIME
		var t=setTimeout(function(){gotoOrders(id)},1);
		
	}
	function gotoOrders(m)
	{
		//THE FOLLOWING CHANGES TO FAULTY VERSION
		if(m == 988233)
			m = 988233+6;

		window.location = "patient-summary.php?MRN="+m;
	}
</script>

<style type="text/css">
<!--
tr.clear-0 {
	background-color: #eee;
	
}
tr.clear-0 td a{
	color: #eee ! important
}
tr.clear-1 {
	background-color: #FFFFFF;
}
tr.clear-1 td a{
	color: #FFFFFF ! important
}
tr.alternate-0 td a{
	color: #000000;
}
tr.alternate-1 td a{
	color: #000000;
}
-->
</style>

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
							<li class="parent"><a href="show-patients.php"
								class="rounded-tl rounded-bl active"> My Patients</a>
							</li>
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
					
					

						<div style="background-color: #FFFFFF;">
							<table border="0" width="100%">
								<tr>
									<td>
										<h3>
											<font color="#000000" style="font-size: 16px">Census for care
												provider: 12 patients</font>
										</h3>
										<form class="search" action="/search" method="post">
											<label for="q">Care Provider Number: </label><input id="q"
												value="" placeholder="17659" /> <input type="submit"
												class="hide" />
										</form> <br />
									</td>
									<td align="right" valign="top">
									<button type="button"><b>Log off</b></button>
									<br />
									<table border="0">
									<tr>
									<td>
									<img src="images/Printer.jpg" width='30px' height='30px' alt=" " />
									</td>
									<td>
									<a href="javascript:window.print()">Print this page</a>
									</td>
									</tr>
									</table>
									</td>

								</tr>

							</table>
						</div>

						
						
						<div class="space-top">
							<table border="0" width="25%">
							<tr><td>
							<font color="#000000" style="font-size: 16px"><b>Patient List</b></font></td>
							<td>
							<div id="wheel" class="hide"><img width=20px height=20px src="images/wheel.gif"></img></div></td>
							</tr>
							</table>
							 
							
							<br /> <br />
							<?php
							include ('php/patientlist.php');
							?>
						</div>



						<div class="clear"></div>
					</div>
				</div>
				<div class="footer">University of Maryland</div>
			</div>
		</div>
	</div>
	

</body>
</html>
