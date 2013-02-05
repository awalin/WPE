<!DOCTYPE html> 
<html lang="en"> 
	<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8"> 
    <title>WPE: list of patient</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content=""> 
    <meta name="author" content="">   
    <!-- Le styles --> 
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
    <link href="jquery/css/start/jquery-ui-1.8.23.custom.css" rel="stylesheet"> 
    <link href="css/base.css" rel="stylesheet">
	<script type="text/javascript" src="d3-v2/d3.v2.js"></script> 
	<script type="text/javascript" src="d3-v2/time/time.js"></script> 
	<script type="text/javascript" src="d3-v2/layout/layout.js"></script> 
	<script type="text/javascript" src="d3-v2/geom/geom.js"></script> 
	<script type="text/javascript" src="jslib/sorting.js"></script>	
	
	<script type="text/javascript" src="jquery/jquery-1.6.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.16.custom.min.js"></script>  
	<script type="text/javascript" src="jslib/jquery.getUrlParam.js"></script> 

    
<script type="text/javascript"> 

var prevsortby = 0;
var asc = true;

function allCompare(a, b, columnindex){
	// console.log("col index "+columnindex);
	if(columnindex==0 || columnindex==3){
            	return intCompare(a[columnindex], b[columnindex]); 
            	}   
    else if(columnindex==1 || columnindex==4 || columnindex==7 || columnindex==8){    	   
       		return stringCompare(a[columnindex], b[columnindex]); 
            		}
    else if(columnindex==5 || columnindex==6){   

       		return dateCompare(a[columnindex], b[columnindex]); 
            		}        		
            		
    else {
    	return 0;
            		}       		
            	
}

function dateCompare(a, b ){

	// var format = d3.time.format("%Y-%m-%d %H:%M:%S");
	var format = d3.time.format("%m/%d/%Y");  	
	var daya = format.parse(a);
	var dayainsec = +daya;
			// console.log("b4 parse "+ val.tweet_time);
	var dayb = format.parse(b);
	var daybinsec = +dayb;
			// console.log( dayainsec);
			// console.log( daybinsec);//" : Today is within  1 week");
 
	if(asc==false){
		return dayainsec < daybinsec ? 1 : dayainsec == daybinsec ? 0 : -1;}
	else 
	    return dayainsec > daybinsec ? 1 : dayainsec == daybinsec ? 0 : -1;
	
}

function stringCompare(a, b) {
	
    a = a.toLowerCase();
    b = b.toLowerCase();
    // console.log(a);
    // console.log(b);
    if(asc==true)
    	return a > b ? 1 : a == b ? 0 : -1;
    else  
        return a < b ? 1 : a == b ? 0 : -1;
}

function intCompare(a, b) {
	a=+a;
	b=+b;
	if(asc==true)
    	return a > b ? 1 : a == b ? 0 : -1;
    else 
       return a < b ? 1 : a == b ? 0 : -1;
}

function drawTable(rowdata, sortcol){
	
	
	if(sortcol == prevsortby) {
		asc=!asc;
		}
	else {
		asc= true;
	}
	console.log(asc);
	prevsortby = sortcol;

    d3.select("#viz").selectAll("table tbody").remove();
    
    var sortby = sortcol; 
        
    
    d3.select("table")
     .append("tbody").selectAll("tr")
    .data(rowdata)
    .enter().append("tr")   
    .attr("class", function(d, i){ 
    	// if (i!=0) 
    	return "table-row";
    	// else if (i==0) return "table-header";
    })   

    .style("background-color", function(d, i){
    	return "white";} )
    .attr("id", function(d, i){
    	return "tr-"+i;
    })      
    
    .on("mouseover", function(d,i){    	 
    	if(hr!='yes') return; // no highlight 
    	
    	d3.select(this)
    	 .style("background-color", "#ffff99")
    	 .style("font-weight","bold");    	
    	})
    
    .on("mouseout", function(d,i){
    	    	 
    	d3.select(this)
    	 .style("background-color", "white")
    	 .style("font-weight","normal");
   
    	})
    	
   //sorting  	
    .sort(function (a, b) { 
            	// console.log("a= "+a);
            	console.log("sort by col ="+sortby);            	
                // allCompare (a,b, sortcol);
                return a == null || b == null ? 0 : allCompare(a, b, sortby); 
                       }
               )        
    	
    .on("click", function(d, i){
    	
    	var id = "#tr-"+i;
        
        var position1= $('table > tbody > tr').eq(i).offset();
 
        var position2 = $('table > thead > th:nth-child(2)').offset();
		console.log(position2.top);
        
        // alert(position1.top);

       
        var width= $(id).width();
        var height= $(id).height(); 
    	
     	    
    d3.select("#list")
        .transition()
        // .ease("linear")
    	  // .duration(200)
    	    .style("visibility","hidden");
    	    
     d3.select("#inputs")
        .transition()
        // .ease("linear")
    	  // .duration(200)
    	    .style("visibility","hidden"); 
  
    d3.select("#viz table thead")
        .transition()
        // .ease("linear")
    	  // .duration(200)
    	    .style("visibility","hidden");     

      

//do not make the border invisible

    d3.select("table")
        .transition()
        // .ease("linear")
    	  // .duration(500)
    	    .style("border-color","white");    
 	        	    
   var otherrows = d3.select("#viz").select("table").select("tbody").selectAll("tr").filter( function( dn, index ){
		    	    	return (index!=i);})    	 
    	    .transition();  	    
 
   var selectedrow = d3.select("#viz").select("table").select("tbody").selectAll("tr").filter( function( dn, index ){
		    	    	return (index==i);})    	 
    	    .transition();  	    
    	  
    	  
   	otherrows
   	.ease("linear")
    	    .duration(250)    		// .delay(500)
    		// .style("background-color", "white")
    		.style("visibility", function(d2, i2){
    			
    			// if(i2==i) {
    				// return "visible"; 
    			// }//     			
    			// else
    			 {
    				if(kr=='yes')
    					return "hidden";    				
    				else 
    				
    					return "visible";
    			};
    		});
 

      selectedrow.ease("linear")
    	    .duration(200)
    		.delay(200)
    		.style("background-color", "white"); 	        	    	

   
     selectedrow.each( "end", function(d2, i2){    	    	
    	    		
		    	    var col = d3.select(this).selectAll("td").filter( function( dn, index ){
		    	    	return (index!=1);});		    	    
		    	     	    
    	        	      	    		
    	    		// position.left+=75; // the firt column is 75 pixel.
				    // position1.top+=10; // not sure should I include this or not

     			    url="details.php?id="+d[0]+"&name="+d[1]
				    	    			+"&t="+tabOption+"&i="+i
				    	    			+"&left="+position2.left+"&top="+position1.top
				    	    			+"&height="+height
				    	    			+"&width="+width;
				    	    		
				   url+=urlsuffix;
				   
				   //if no t2 then immediately open url.
				   var t2= col.transition(); // all columns except the name become invisible, should be configurable
		
		    	   t2
		    	   // .ease("linear")
		    	   // .duration(500)
		    	   .style("opacity",0.01);
		    	   
		//change color from yellow to white 		    	   
		    	   // t2.styleTween("background-color", function() { return d3.interpolate("#ffff99", "white"); });
 	   
		    	   t2.each("end", function(){
		    	  		 window.open(url,"_self");	
		    	   });				  
    			
    			
    	// // show pop up on mouse click, go to another page   
    	     }
    	    );    	  	
    
    
    }) 
    .selectAll("td")
    // .data(function(d){return d;})
     .data(function(d) { return jsonToArray(d); })
    .enter().append("td")
    .attr("class", function(d, i){
    	if(i==1) return "td-name";
    	else return "td-"+i;
    })
    .style("border", "1px light-gray solid")
    .style("padding", "10px")
    // .style("font-size", "16px")

    .html( function(d,i){ 
    	
    	if( i!=2 )
    		return d[1]; 
    	// return d;
    	
    	else if(i==2 && pic!="yes") 
    	     d3.select(this).style("visibility","none");
    	
    	else if(i==2 && pic=="yes") {
    		if(d=="Image") return d[1];
    		else 
    		    return "<img src='"+d[1]+"' height='30' width='30'>";
    		    }    		
    		});
    		
    	
	
}

var tabOption=0;

var kr;
var kn;
var hr;
var urlsuffix=""; 
var pic;
var bb;
// var sortingColumn = 1;

$(document).ready(function() {

 kr = $(document).getUrlParam('kr'); // keep row only 
 kn = $(document).getUrlParam('kn'); // keep name only 
 hr = $(document).getUrlParam('hr'); // highlight row with diff color
 pic = $(document).getUrlParam('pic');//show photos
 bb = $(document).getUrlParam('pre');  //use big button
  
 if(kr=='yes'){
 	urlsuffix+="&kr=yes";
 }
 
 if(bb=='bb'){
 	urlsuffix+="&bb=yes";
 }
 
 if(kn=='yes'){
 	urlsuffix+="&kn=yes";
 }
 
 if(hr=='yes'){
 	urlsuffix+="&hr=yes";
 }
 
 if(pic=='yes'){
 	urlsuffix+="&pic=yes";
 }
 
d3.text("data/patients.csv", function(datasetText) {

var parsedCSV = d3.csv.parseRows(datasetText);
 
// console.log(parsedCSV);
//draw table

	d3.select("#viz")
    .append("table")
    .style("border-collapse", "collapse")
    .style("border", "1px gray solid").style("font-size","11px");
    
     var th = d3.select("table")
     .append("thead").attr("class","table-header")
     .selectAll("th")
            .data(parsedCSV[0])
          .enter().append("th")            
            .on("click", function (d, i) { 
            	console.log("click to sort");
            	drawTable(parsedCSV, i);
            }) // d or i?
            .text(function(d,i) { 
            	console.log("head "+d);
            	return d; });
            	
var rowdata = parsedCSV.slice(1,parsedCSV.length); 
drawTable(rowdata,1);

// search //
var cells = $('#viz > table > tbody > tr').find('td:lt(2)'); // search only first two cols
console.log(cells);
$("#search").keyup(function() {
    var val = $.trim(this.value).toUpperCase();
    console.log(val);
    if (val == ""){
        cells.parent().show();
        // console.log(cells);
        }
    else {
        cells.parent().hide();
               
        cells.filter(function() {
            return -1 != $(this).text().toUpperCase().indexOf(val); }).parent().show();
    }
});

//group by//
$("#groupby").change(function(){
	console.log($('#groupby option:selected').text());
	
});

});


});
 
</script> 
 
</head> 
 
 
<body style="background-color:white;"> 
	
 
    <div class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="navbar-inner"> 
        <div class="container-fluid"> 
         
<!--           <a class="brand" href="index.html">Testing platform for wrong patient error</a>  -->
          <div class="nav-collapse collapse"> 
          	  <ul class="nav"> 
              <li><a href="index.html">Home</a></li> 
<!--               <li><a href="list.html">List</a></li>                -->
            </ul> 

          </div><!--/.nav-collapse --> 
        </div> 
      </div> 
    </div> 
  
    <div class="pageborder">   
    <div class="span12" style="background-color:white;"> 
   
    <div style="overflow: auto;background-color: white;padding-left: 50px;">
    	<h3 id="list">List of patients</h3>    		
    	  
  <div id="inputs" style="font-size:11px;line-height:12px;padding-top:10px;">
  
   <div style="clear:both"> 
   	<div style="float:left;width:20%;">	<fieldset>Search with:</fieldset></div>
   	<div style="float:left;width:70%;">
<!--    		<form class="navbar-search pull-left"> -->
<!--   <input id="search" type="text" class="search-query" placeholder="Search"> -->
<!-- </form> -->
   		<input id="search" type="text" placeholder="Patient's name or Id" style="font-size:11px;height:20px;padding:2px;margin:2px">
   		
   	</div>
    
</div>

<div style="clear:both">    
    <div style="float:left;width:20%;">	<fieldset>Group by: </fieldset></div>
    	
   <div style="float:left;width:70%;">
    	 		
   <select id="groupby" style="font-size:11px;height:20px;padding:2px;margin:2px">
   	<option value="none" selected>Select one...</option>
  <option value="gender">Gender</option>
  <option value="physician">Physician</option></select></div>
 </div> 
 
 
 </div>
 
 
    <div id="viz" style="clear:both;overflow: auto;background-color: white;padding-top:10px;">
    	 
	</div>
	 
	</div>
	</div> 
</div>

 
<!-- end of jquery demo  --> 
 
 
      
</body> 
</html>