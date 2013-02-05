<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Adobe GoLive" />
<title>Your Website</title>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/icons.css" />
<link	href="css/jquery-ui.css"	rel="stylesheet" type="text/css" />
<script
	src="js/jquery.js"></script>
<script
	src="js/jquery-ui.js"></script>
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
padding-top:20px;
padding-bottom:20px;
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
						<h3>&nbsp;&nbsp;NEW ORDERS</h3>
						<div class="demo">

							<div id="tabs">
								<ul>
									<li><a href="#tabs-1">Blood Tests</a></li>
									<li><a href="#tabs-2">Urine Test</a></li>
									<li><a href="#tabs-3">Imaging</a></li>
									<li><a href="#tabs-4">Consultation</a></li>
									<li><a href="#tabs-5">More Tests</a></li>
								</ul>
								<div id="tabs-1">
									<table width="100%" border="0">
										<tr>
											<td>
												<div class="scroll-2">
													<button type="button" class="mybutton"
														onclick="show('opt-BCP');">Basic Chemistry Panel</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Complete Blood Count"; ?>';">Complete Blood Count(CBC)</button>
													<button type="button" class="mybutton"
														onclick="show('opt-OTHERTESTS');">Other Tests</button>
												</div>
											</td>
											<td valign="top">
												<div class="scroll-1" id="opt-BCP" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Basic Metabolic Profile"; ?>">Basic Metabolic Profile</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Chemistry 8 profile"; ?>">Chemistry 8 profile</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Complete Metabolic Profile"; ?>">Complete Metabolic Profile</a></td></tr>
												</table></div>
												
												<div class="scroll-1" id="opt-OTHERTESTS" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Arterial Blood Gases"; ?>">Arterial blood gases</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-DNA Paternity and Genetic Testing"; ?>">DNA, Paternity and Genetic Testing</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Lipid Profile"; ?>">Lipid Profile</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Lipase-Pancreatic Enzyme"; ?>">Lipase (Pancreatic Enzyme)</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Liver Profile"; ?>">Liver Profile</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Venous Blood Gas"; ?>">Venous Blood Gas</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Blood Test-Thyriod Stimulating Hormone"; ?>">Thyriod Stimulating Hormone (TSH)</a></td></tr>
												</table></div>
												<div class="scroll-1" id="opt-NONE" style="display: none;">
													
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div id="tabs-2">
									<table width="100%" border="0">
										<tr>
											<td>
												<div class="scroll-2">
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Urine Analysis"; ?>';">Urine Analysis</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Urine Culture and Sensitivity"; ?>';">Urine Culture &amp; Sensitivity</button>
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=24 hr Urine collection for protein and creatinine clearence"; ?>';">24 hr Urine Collection for protein &amp; creatinine clearance</button>
												</div>
											</td>
											<td valign="top">
											</td>
										</tr>
									</table>
									

								</div>
								<div id="tabs-3">
									<table width="100%" border="0">
										<tr>
											<td>
												<div class="scroll-2">
													
													<button type="button" class="mybutton"
														onclick="show('opt-CT');">CT</button>
													<br />
													<button type="button" class="mybutton"
														onclick="show('opt-MRI');">MRI</button>
													<br />
													<button type="button" class="mybutton"
														onclick="show('opt-ULTRASOUND');">Ultrasound</button>
													<br />
													<button type="button" class="mybutton"
														onclick="show('opt-XRAY');">X-ray</button>
												</div>
											</td>
											<td valign="top">
												<div class="scroll-1" id="opt-CT" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Head"; ?>">Head</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Cervical"; ?>">Cervical (spine)</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Chest"; ?>">Chest</a></td></tr>
													
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Abdomen"; ?>">Abdomen</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Pelvis"; ?>">Pelvis</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=CT-Extremity"; ?>">Extremity</a></td></tr>
												</table>
												</div>
												<div class="scroll-1" id="opt-MRI" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Brain"; ?>">Brain</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Neck"; ?>">Neck</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Chest"; ?>">Chest</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Abdomen"; ?>">Abdomen</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Pelvis"; ?>">Pelvis</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=MRI-Extremity"; ?>">Extremity</a></td></tr>
													<tr class="mypadding"><td>Spinal</td></tr>
												</table>
												</div>
												<div class="scroll-1" id="opt-ULTRASOUND" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Abdomen"; ?>">Abdomen</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Cardiac"; ?>">Cardiac</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Renal-Kidney"; ?>">Renal (Kidney)</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Pelvis"; ?>">Pelvis</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Testicular"; ?>">Testicular</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=Ultrasound-Lower Extremity"; ?>">Lower Extremity</td></tr>
												</table>
												</div>
												<div class="scroll-1" id="opt-XRAY" style="display: none;">
												<table border="0" width="80%" align="center">
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Abdomen"; ?>">Abdomen</a></td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Chest"; ?>">Chest</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Spine-Cervical-Neck"; ?>">Spine, Cervical (Neck)</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Spine-Thoracic-Upper-Back"; ?>">Spine, Thoracic (Upper Back)</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Spine-Thoracic-Lower-Back"; ?>">Spine, Thoracic (Lower Back)</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Shoulder-Right"; ?>">Shoulder Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Shoulder-Left"; ?>">Shoulder Left</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Upper-Arm-Right"; ?>">Upperarm (Humorous) Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Upper-Arm-Left"; ?>">Upperarm (Humorous) Left</td></tr>
													
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Forearm Right"; ?>">Forearm (Radius/Ulna) Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Forearm Left"; ?>">Forearm (Radius/Ulna) Left</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Wrist Right"; ?>">Wrist Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Wrist Left"; ?>">Wrist Left</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Thigh-Femur-Right"; ?>">Thigh (Femur) Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Thigh-Femur-Left"; ?>">Thigh (Femur) Left</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Knee Right"; ?>">Knee Right</td></tr>
													<tr class="mypadding"><td><a href="write-order.php?MRN=<?php echo $_GET["MRN"]."&TName=XRAY-Knee Left"; ?>">Knee Left</td></tr>
													
													
													
													
													
												</table>
												</div>
												<div class="scroll-1" id="opt-NONE" style="display: none;">
												</div>
											</td>
										</tr>
									</table>
								</div>
								
								<div id="tabs-4">
									<table width="100%" border="0">
										<tr>
											<td>
												<div class="scroll-2">
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Cardiology"; ?>';">Cardiology</button>
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Endocrinology"; ?>';">Endocrinology</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=General"; ?>';">General</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Gynecology"; ?>';">Gynecology</button>
													<br />
													
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Hematology"; ?>';">Hematology</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Internal Medecine"; ?>';">Internal Medecine</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Neurology"; ?>';">Neurology</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Oncology"; ?>';">Oncology</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Orthopedics"; ?>';">Orthopedics</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Otolaryngology"; ?>';">Otolaryngology (Ear, nose, throat) </button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Psychiatry"; ?>';">Psychiatry</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Plastics"; ?>';">Plastics</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Urology"; ?>';">Urology</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Surgery, General"; ?>';">Surgery, General</button>
													
												</div>
											</td>
											<td valign="top">
											</td>
										</tr>
									</table>
								</div>
								<div id="tabs-5">
									<table width="100%" border="0">
										<tr>
											<td>
												<div class="scroll-2">
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=EEG"; ?>';">EEG</button>
													<br />
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=EKG"; ?>';">EKG</button>
													<button type="button" class="mybutton"
														onclick="window.location='write-order.php?MRN=<?php echo$_GET["MRN"]."&TName=Stool Culture Analysis"; ?>';">Stool Culture Analysis</button>
												</div>
											</td>
											<td valign="top">
											</td>
										</tr>
									</table>
								</div>

							</div>
							<!-- Tabs ends here. -->

						</div>
		
					<table width="99%" border="0">
					<tr><td>
					<b>Doctors Comments</b>
					</td>
					</tr>
					<tr><td>
					<input style="width: 100%;height: 50px;" type="text" name="firstname" />
					<!-- <textarea rows="4" cols="80"></textarea> -->
					</td>
					</tr>
					</table>


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
