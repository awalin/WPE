<!DOCTYPE html> 
<html lang="en"> 
	<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8"> 
    <title>Wrong Patient Error</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content=""> 
    <meta name="author" content="">   
    <!-- Le styles --> 
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
    <link href="css/base.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
    <link href="jquery/css/start/jquery-ui-1.8.23.custom.css" rel="stylesheet"> 
    
	<script type="text/javascript" src="d3-v2/d3.v2.js"></script> 
	<script type="text/javascript" src="d3-v2/time/time.js"></script> 
	<script type="text/javascript" src="d3-v2/layout/layout.js"></script> 
	<script type="text/javascript" src="d3-v2/geom/geom.js"></script> 
	<script type="text/javascript" src="jslib/table.js"></script>
	<script type="text/javascript" src="jquery/jquery-1.6.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.16.custom.min.js"></script> 
	<script type="text/javascript" src="jslib/jquery.getUrlParam.js"></script> 

   
<script type="text/javascript">  
var pic="";
var bb="";

$(document).ready(function() {	
	
	var patient = $(document).getUrlParam('name');	
	var id = $(document).getUrlParam('id');
	var left = $(document).getUrlParam('left')+"px";
	
	var top  = $(document).getUrlParam('top')+"px";
	
	var height = $(document).getUrlParam('height')+"px";
	var width  = $(document).getUrlParam('width')+"px";
	bb = $(document).getUrlParam('bb');
	
	
	pic = $(document).getUrlParam('pic'); 
		
	var winW = document.body.offsetWidth;
    var winH = document.body.offsetHeight;	
    
   
    winH = winH/2+10+"px";
    winW = winW/2+"px";
       
   d3.select("#floatdiv")   .style("font-weight","bold")
   // .style("background-color", "#ffff99")
   ;
   
// d3.select("#submit-button-big").style("visibility","hidden");   
$("#floatdiv").css({
    	"left":   left,
    	"top":    top,
    	"width":  width,
    	"height": height
	});

	
	patient = patient.replace(/%20/g," ");
	// alert(patient);
	// console.log(patient);

	if(patient.indexOf("William")!=-1){
		 d3.select("#floatdiv").html("Josh Dimassio"); 
	}else 
	d3.select("#floatdiv").html(patient);  

// console.log(patient);

 d3.select("#actions").style("visibility","hidden"); 	
 
 d3.select("#submit-button")
   .on("mouseover", function(){    	
    	d3.select("#toolTip").style("visibility", "visible")})
   .on("mouseout", function(){
    		d3.select("#toolTip").style("visibility", "hidden")});
    ;     

	
 // alert($("#floatdiv").offset().top);		

 d3.select("#floatdiv").transition()
 .delay(100)
 .style("left","70px")
 .style("top", winH)
 .style("height","16px")
 .style("padding-left","30px")
 // .style("background-color","#ffffff")
 .duration(700)
 .each("end", function(){
 
////prev try to do this in jquery way, now trying in d3 way

  // $("#floatdiv")
  // .delay(300)
  // .animate({

    // "left": "70px",
    // "top": winH,
    // "height": "16px",
    // "padding-left":"30px",
    // "background-color":"#ffffff"
  // }, 
  // 1000,
  // // 0.001,
  // "linear",  
  // function(){ 	
  	
  		 	
  	        d3.select(".details")
				 	 	.style("visibility","visible");
	
			d3.select("#detail")
				  		.transition()
				  		.delay(200)
				  		.duration(500)				  		
				 	 	.style("visibility","visible");	
				 	 			
			$("#orders").tabs();

			//make them vertical
			// $("#orders").tabs().addClass('ui-tabs-vertical ui-helper-clearfix');
            // $("#orders li").removeClass('ui-corner-top').addClass('ui-corner-left');  
			 
			$("#task-1").tabs();
			    
			$("#accordion-blood").accordion({
				          autoHeight: false,
				          active: false,
				    	  collapsible: true
				         });
			$("#accordion-urine").accordion({
				          autoHeight: false,
				          active: false,
				    	  collapsible: true
				         });
			$("#accordion-imaging").accordion({
				          autoHeight: false,
				          active: false,
				    	  collapsible: true
				         });
			$("#accordion-consult").accordion({
				          autoHeight: false,
				          active: false,
				    	  collapsible: true
				         });
			$("#accordion-others").accordion({
				          autoHeight: false,
				          active: false,
				    	  collapsible: true
				         });
				  	
			$("#loading").dialog({
						autoOpen: false,
						modal: true,
						title: 'Order confirmation for'
					});							 	 	
					 	 	
		    d3.select("#actions")
				  		.transition()
				  		.delay(700)
				  		.duration(500)
				  		.ease("linear")
				 	 	.style("visibility","visible");
				 	 	
			if(bb=="yes") {
					d3.select("#submit-button-big").style("visibility","visible");
					d3.select("#submit-button").style("display","none");
					}
				 // else {
					// d3.select("#submit-button-big").style("display","none");
					// d3.select("#submit-button").style("visibility","visible");
				 // }  

				 	 	
			if(pic!="yes"){
				d3.select("#photo").style("display","none");		
			 }	
			
				// when clicking the button, call showModalDialog()
			$("#submit-button").click(function(){
						var str = "<h3>"+patient+"</h3>";
				        $("#departure").html("<br/><br/>"+str+"<br/><br/>");
						$("#loading").dialog('open');
						
						$("#loading").dialog(
							{  
							buttons: {
								"Ok": function() {
									$( this ).dialog( "close" );
								},
								Cancel: function() {
									$( this ).dialog( "close" );
								}
							}
						});
					
						//modal will close after 5 sec
						setTimeout(function(){
				    		$("#loading").dialog('close');
							}, 5000);
					});		   
	  	
  });
  
});
</script>
</head>

<body style="background-color: white;">
		<!-- 		modal doalog -->
		<div id="loading">
			<div align="center">
					<div id="departure">				
				</div>				
			
			</div>
		</div>	
				
				
<?php
	include ("php/patients.php");
?>
		 
    <div class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="navbar-inner"> 
        <div class="container-fluid"> 
        
<!--           <a class="brand" href="index.html">Testing platform for wrong patient error</a>  -->
          <div class="nav-collapse collapse"> 
           
          <ul class="nav"> 
              <li><a href="index.html">Home</a></li> 
              <li><a href="list.html">List</a></li>               
            </ul> 
          </div><!--/.nav-collapse --> 
        </div> 
      </div> 
    </div> 
    
 <div style="background-color:white;">
   <div class="container-fluid">     
      <div id="floatdiv" class="float-div"/>  	
   </div>
   
  <div class="pageborder" style="height:800px;">
  	 
   <div class="details">
   	<div style="padding:20px;margin:20px;">
   	<div id="detail" style="visibility:hidden;">		

			       <div id="photo" class="pix" style="padding-right:15px;margin-right: 10px;">
 				      <img  src= '<?php echo getPicurl($_GET["id"]);?>'> 
			       </div>

			
		<div style="float:left; width:50%;">
			<table class="detail-header">				
			<tr>
				<td>&nbsp;&nbsp;</td>
				<td><b><?php echo getAge($_GET["id"]);
						?> </b> yo, <b><?php echo getSex($_GET["id"]);
						?> </b> 
				</td>
			</tr>			
			<tr>
				<td>dob:&nbsp;&nbsp;</td>
				<td> <b><?php echo getDOB($_GET["id"]);
						?> </b> 
				</td>
			</tr> 
			<tr>
				<td>clinician:&nbsp;&nbsp;</b></td> 
				<td><b><?php echo getAttDoc($_GET["id"]);
						?> </b>
				</td>
		   </tr>
		   <tr>
			  <td>mrn:&nbsp;&nbsp;</td>
			  <td><b><?php echo $_GET["id"];
						?> </b>
			  </td>
		   </tr>				
						
			</table>	
		</div>		
			
	</div>		
<!-- 			the menu for patients should be here  -->
<div style="clear:both;" id="actions">

<div style="padding-top:30px;height:550px;"> 
	<div id="task-1" style="float:left;width:30%; height:100%; overflow:auto; padding-left:10px;">  
	<h6>Summary Status</h6>
    	<div id="summary-status" style="overflow: auto;font-size:12px">
    		<p>	
 <?php
 	include_once ("php/patients.php"); 
	echo $patient_info[$_GET["id"]];
	?> 
			</p>    	
        </div>
	</div> 
	
	<div id="task-2" style="float:left;width:65%;height:100%;padding-left:20px;">  
				<div id="orders" style="height:100%;padding-left:20px">
				<h6>Order New Tests</h6>
					<div>

							<div id="tabs" style="padding:15px; padding-top:50px; font-size:12px;">
								<ul>
									<li><a href="#tabs-1">Blood Tests</a></li>
									<li><a href="#tabs-2">Urine Test</a></li>
									<li><a href="#tabs-3">Imaging</a></li>
									<li><a href="#tabs-4">Consultation</a></li>
									<li><a href="#tabs-5">More Tests</a></li>
								</ul>
								
								
								<div id="tabs-1" class="acc-border">
								<div  id="accordion-blood">													
									<h3><a href="#">Basic chemistry panel</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
								
			</p>
			</div>
                               
                                  										
		<h3><a href="#">Complete bood count(CBC)</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
						
			</p>
			</div>
                               
										
										
									</div>
									</div>				
									
													
													
													
										
					<div id="tabs-2">
						<div  id="accordion-urine">
													
									<h3><a href="#">Urine analysis</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
				
		
						
			</p>
			</div>
                               
										
									<h3><a href="#">Urine culture</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
		
			</p>
			</div>
                               	
				</div>
			</div>	

		<div id="tabs-3">
			<div  id="accordion-imaging">
									<h3><a href="#">CT Scan</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
				
		
						
			</p>
			</div>
                               
										
									<h3><a href="#">MRI</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
						
			</p>
			</div>
                               	
									<h3><a href="#">Ultrasound</a></h3>
									<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
	
		
						
			</p>
			</div>
                               	
									
				</div>
			</div>							
										
		 <div id="tabs-4">
		 	
		 	<div  id="accordion-consult">
					<h3><a href="#">Cardiology</a></h3>
						<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
			
						
			</p>
			</div>
                               
										
                  <h3><a href="#">Endocrinology</a></h3>
						<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
						
						

						  
				
		
						
		
						
			</p>
			</div>
                               		
																				
			<h3><a href="#">Hematology</a></h3>
						<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:68%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 
			</p>
			</div>
                               																	
		 	
									
					</div>
				</div>				
				
				<div id="tabs-5">
					<div id="accordion-others">
						<h3><a href="#">EEG</a></h3>
					<div>
										<p>
														
						 <div style="clear:both;">
							<div style="float:left;width:20%"> 
								Purpose of study 
							</div>
							<div style="float:left">
								<input style="height: 20px;" type="text" name="pos" /> 
							</div>
						  </div>
						  
						<div style= "clear:both">
						   
						<div style="float:left;width:20%">  
								Clinical notes
						</div> 
						 
						<div style="float:left;width:78%"> 
									<input style="height: 20px;" type="text" name="notes" /> 
						</div> 
		 				</div>	
						  
						  <div style="clear:both;">
							<div style="float:left;width:20%">
						   Enter test date
						   </div>
							
						    <div style="float:left;width:68%;">
						    	
								<div style="clear: both;">
								
								<select name="month" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">MM</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								
								</select>
								<select name="dd" style="width:20%">
								<option style="width:15px; height: 20px;" value="0">DD</option>
								<option style="width:15px; height: 20px;" value="1">01</option>
								<option style="width:15px; height: 20px;" value="2">02</option>
								<option style="width:15px; height: 20px;" value="3">03</option>
								<option style="width:15px; height: 20px;" value="4">04</option>
								<option style="width:15px; height: 20px;" value="5">05</option>
								<option style="width:15px; height: 20px;" value="6">06</option>
								<option style="width:15px; height: 20px;" value="7">07</option>
								<option style="width:15px; height: 20px;" value="8">08</option>
								<option style="width:15px; height: 20px;" value="9">09</option>
								<option style="width:15px; height: 20px;" value="10">10</option>
								<option style="width:15px; height: 20px;" value="11">11</option>
								<option style="width:15px; height: 20px;" value="12">12</option>
								<option style="width:15px; height: 20px;" value="13">13</option>
								<option style="width:15px; height: 20px;" value="14">14</option>
								<option style="width:15px; height: 20px;" value="2">15</option>
								<option style="width:15px; height: 20px;" value="3">16</option>
								<option style="width:15px; height: 20px;" value="4">17</option>
								<option style="width:15px; height: 20px;" value="5">18</option>
								<option style="width:15px; height: 20px;" value="6">19</option>
								<option style="width:15px; height: 20px;" value="7">20</option>
								<option style="width:15px; height: 20px;" value="8">21</option>
								<option style="width:15px; height: 20px;" value="9">22</option>
								<option style="width:15px; height: 20px;" value="10">23</option>
								<option style="width:15px; height: 20px;" value="11">24</option>
								<option style="width:15px; height: 20px;" value="12">25</option>
								<option style="width:15px; height: 20px;" value="6">26</option>
								<option style="width:15px; height: 20px;" value="7">27</option>
								<option style="width:15px; height: 20px;" value="8">28</option>
								<option style="width:15px; height: 20px;" value="9">29</option>
								<option style="width:15px; height: 20px;" value="10">30</option>
								<option style="width:15px; height: 20px;" value="11">31</option>
								
								</select>
								
								<select name="year" style="width:20%">
								<option style="width:25px; height: 20px;" value="0">YYYY</option>
								<option style="width:25px; height: 20px;" value="1">2011</option>
								<option style="width:25px; height: 20px;" value="2">2012</option>
								<option style="width:25px; height: 20px;" value="3">2013</option>
								<option style="width:25px; height: 20px;" value="4">2014</option>
								<option style="width:25px; height: 20px;" value="5">2015</option>
						
								</select>						
							
						  </div>
						  </div>
						</div>
						 


	     	</p>
			</div>
	 </div>
				
  </div>								
<!-- Tabs ends here. -->
											

</div>
					

	     <div style="padding:20px;">
	     	
	     	<span id="submit-button" class="btn btn-mini" style="float:left">
	     		Submit order	     	
	     	</span>
    	
	    <!--  	
	     	<span id="tooltipConfirm" class="tooltip-confirm" style="float:left">
	     		<div class="pix" style="float:left;width:30px;height:30px" ><img src= '<?php echo getPicurl($_GET["id"]);?>'/></div> 
	     		<div style="padding-left:15px;float:left">Order for <br/><b><?php echo getName($_GET["id"]);?></b> </div>
 				 
			</span>   -->  	
			
	<div id="toolTip">
<!--     <div> -->
    	<div class="pix" style="float:left;width:30px;height:30px;padding-top:5px;" ><img src= '<?php echo getPicurl($_GET["id"]);?>'/></div> 
	    <div style="padding-left:15px;float:left">Order for <br/><b><?php echo getName($_GET["id"]);?></b> </div>
<!-- 	 </div> -->
    <div id="tailShadow"></div>
    <div id="tail1"></div>
    <div id="tail2"></div>
</div>
	     	
	     	
	     	</div>	
	     	
	     
	     	<span id="submit-button-big" class="btn btn-big big-preview" style="float:left">
	     		<div class="pix" style="float:left;width:30px;height:30px;padding-top:5px;" ><img src= '<?php echo getPicurl($_GET["id"]);?>'/></div>
	     		<div style="padding-left:15px;float:left"><b>Submit order for </b> <br/> <?php echo getName($_GET["id"]);?> </div>	     	
	     	</span>
	     	
	     	
		
		
		
</div>
							<!-- Tabs ends here. -->		
	
	</div> 
 </div> 
<!--  end of tabs -->
			
		
	</div>
   </div> 

</div>	
	
	

</div>


</div>

</div>

</body>

</html>
