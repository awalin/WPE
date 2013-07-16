var fontsize = 16;
var rowheight= 30;
var grid = "no";
var pic="yes";
var pre ="tp";

var kr;
var kn;
var hr;

//fast speed
var transdelay = 10;
var transduration = 250 ;

var animdelay = 10;
var animduration = 250 ;

var spotdelay = 10;
var spotduration = 250 ;

var totop = "none";
var transition ="none";
var arv ="none"; // spotlight , highlight on arrival
// var sortingColumn = 1;
var otherinfo="yes";
var changedBack = "white";
var changedColor = "#484848";
var prevsortby = 0;
var asc = true;


function detailspage() {	
	
	$(function() {
       $('body').scrollTop(0);//so it scrolls top of the page 
	});

	d3.select("#task-1")
	// .style("visibility","hidden")
	.style("opacity",0);
	
	d3.select("#actions")
	// .style("visibility","hidden")
	.style("opacity",0);;
				 	
  	d3.select(".details")
				 	 	.style("visibility","visible")
				 	 	.style("display","block");
	
	d3.select("#detail")
				 	 	.style("visibility","visible")
				 	 	.style("display","block");
				 	 	
    var arv = $(document).getUrlParam('arv'); // keep row only				 	 	
    
    if(arv!="highlight"){
    	spotdelay=0;
    	spotduration=0;
    }			30	 	 	
	
	{
			d3.select(".detail-header")
				  		.transition()
				  		.delay(spotdelay)
				  		.duration(spotduration)	
				  		.style("display","block")			  		
				 	 	.style("visibility","visible")
				 	 	.each("end",function(){
				 	 		
				 	 			d3.select("#task-1")
							  		.transition()
							  			.delay(spotdelay)
							  		.duration(spotduration)
							  		.ease("linear")
							  		.style("opacity",1)
							 	 	// .style("visibility","visible")
							 	 	;	
							 	 	
							$("#orders").tabs();
				 	 	
		    				d3.select("#actions")
								  		.transition()
								  		.delay(spotdelay)
								  		.duration(spotduration)
								  		// .ease("linear")
								  		.style("opacity",1)
								  		.style("display","block")
								 	 	// .style("visibility","visible")
								 	 	;
								 	 		
								 	 	});			    
		    					
		}
				 	 	
	    if(pre=="tp") {					
					d3.select("#submit-button").select(".button-name").style("display","none");
					d3.select("#submit-button").select(".button-pic").style("display","none");
					// d3.select("#submit-button").classed("btn-big");
					}
					
		else if(pre=="nh") {
					 d3.select("#button-near-header").style("visibility","visible");
					 d3.select("#submit-button").style("display","none");

					}	
				 	 	
		if(pic!="yes"){
				d3.select("#photo").style("display","none");		
			 }	
	

 

}

function highlight(){
	
	d3.select("#viz").selectAll("table").remove();	

    d3.select("#viz").selectAll(".title").remove();


	d3.text("data/sim.csv", function(datasetText) {

		var parsedCSV = d3.csv.parseRows(datasetText);			           	
		var rowdata = parsedCSV.slice(1,parsedCSV.length);	
		
		d3.select("#viz").append("div").attr("class","title").html("<br/><b>Patients with similar names</b>");		
		drawHeader(parsedCSV,rowdata,"simtable");
		drawTable(rowdata,1,"simtable");
		
		d3.text("data/nonsim.csv", function(datasetText) {

		var parsedCSV = d3.csv.parseRows(datasetText);		           	
		var rowdata = parsedCSV.slice(1,parsedCSV.length);		
		
		d3.select("#viz").append("div").attr("class","title").html("<br/><b>Other</b> patients");
		drawHeader(parsedCSV,rowdata,"nonsimtable");
		drawTable(rowdata,1,"nonsimtable");
	});	
	
	});	
	
	
	
}

function drawHeader(parsedCSV, rowdata, tablename){
	
 d3.select("#viz")
    .append("table")
    .attr("id",""+tablename)
   ;
    
 var th = d3.select("#"+tablename)     
     .append("thead")
     .selectAll("th")
            .data(parsedCSV[0])
          .enter().append("th")
            .style("display", function(d,i){
            	if(otherinfo!="yes"){
    						if(i==5  || i==6 || i==7) return "none";    					
    				}
    				
    			if(pic!="yes"){
    					if (i==0)  return "none";		
    					
    				}
    			// return "table-cell";	
            })    
        .on("click", function (d, i) {
            	if(i==0) return;//no sort on image 
            	           	            	
            	d3.select("#"+tablename).selectAll("th").select("p").select("span").attr("class",function(d2,i2){
            	
            	if(i2==0) return "image";
            	
            	if(i2!=i ){ 
            		if(i==0) return "image";  
            		else return "header";
            		 }
            		 
            	else {            			
            		if(i == prevsortby) {
						asc=!asc;
						if(asc==false)
						 return "headerSortUp";
						else if(asc==true)
						 return "headerSortDown"; 						  
						}
					else {
						asc= true;
						return "headerSortDown"; 
						}									
					// console.log(asc);            			
            		}
            	});          
            	//console.log("click to sort");
            	d3.select("#viz").select("#"+tablename).selectAll("tbody").remove();
            	drawTable(rowdata, i, tablename);
            	
            	
            }) // d or i?
            .html(function(d,i) {      	            	
            	
            	if(i==0 && pic!="yes") {
            		d3.select(this).style("display","none");
            		return;} 
            	else if (i==0 && pic=="yes"){
            		return "<p><span class='image'> </span></p>"; 
            	}	
            	else if(otherinfo!="yes" && (i==5 || i==6 || i==7)) {
            		d3.select(this).style("display","none");            		
            		return;
            	}
            	// console.log("head "+d);
            	else return "<p>"+d+"<span class='header'> </span></p>"; 
            	
            	});	

 }
 
function drawGrid(rowdata, tablename){
	console.log("grid");
	
	
	d3.select("#viz")
    .append("div").attr("class","row")
    .attr("id",""+tablename)
     .selectAll("div")
	    .data(rowdata)
	    .enter().append("div").attr("class","well cell span4")  
	    .attr("id", function(d, i){
	    	return "span-"+i;
	    })
	    .html(function(d){
	    	return "<div style='font-size: 24px; padding-left:4px;'><b>"+d[1]
	    	 +"</b></div><div>"	    	 
    	  	 +"<div class='pix' style='padding-right:10px;'> <img src="+d[0]+"></div>"  
    	  	 +"<div class='detail-header' style='float:left;padding-top:5px;'>"  
    	  	 +"<b>"+d[4]+"</b> y, <b>"+d[3]+"</b>" 
    	     +"<br/>clinician: <b>"+ d[8]+"</b>"
    	     +"<br/>mrn: <b>"+d[2]+"</b>"
    	     +"<br/>room: <b>"+d[7]+"</b>"
    	     +"<br/>complaint: <b>"+d[5]+"</b>"
    	  	 + "</div>"  	
	    	 +"</div>";
	    	
	    }) 
   ;
    
	
	
	
} 
 
function drawTable(rowdata, sortcol, tablename){
		
// d3.select("#inputs").style("visibility","hidden");	

kr = $(document).getUrlParam('kr'); // keep row only  
  	
totop = $(document).getUrlParam('totop');  //animation speed
  
 if(totop !='yes'|| kr=='row'){
 	//if keep whole row, then no animation to top
 	animdelay = 0;
 	animduration = 0;
 } else {
 	
 	var anim = $(document).getUrlParam('anim'); 
 	
 	if(anim =='slow'){
		 	animdelay = 200;
		 	animduration = 800;
		 }
	else if(anim =="custom"){
		 	var time = $(document).getUrlParam('customsecondanim');  //animate to top
		 	animduration = parseInt(time);
		 	animdelay = 50;
		 }
	else if(anim =='fast'){
		 	animdelay = 10;
		 	animduration = 300;
		 }
	}
	
//highlight on arrival
 arv = $(document).getUrlParam('arv');  //animation speed
  
 if(arv !='highlight'){
 	spotdelay = 0;
 	spotduration = 0;
 } else {
 	
 	var spot = $(document).getUrlParam('spotlight'); 
 	
 	if(spot =='slow'){
		 	spotdelay = 1000;
		 	spotduration = 300;
		 }
	else if(spot =="custom"){
		 	var time = $(document).getUrlParam('customsecondspot');  //animate to top
		 	spotduration = parseInt(time);
		 	spotdelay = parseInt(time);
		 }
	else if(spot =='fast'){
		 	spotdelay = 200;
		 	spotduration = 300;
		 }
	}

//highlight on departure	
 transition = $(document).getUrlParam('transition');  //animation speed 
	  
 if(transition !='yes'){
 	transdelay = 0;
 	transduration = 0;
 } else {
 	
 		
 	var trans = $(document).getUrlParam('trans'); 
 	
 	if(trans =='slow'){
		 	transdelay = 300;
		 	transduration = 1000;
		 }
	else if(trans =="custom"){
		 	var time = $(document).getUrlParam('customsecondtrans');  //animate to top
		 	transduration = parseInt(time);
		 	transdelay = 50;
		 }
	else if(trans =='fast'){
		 	transdelay = 10;
		 	transduration = 300;
		 }
	}
	
	
	prevsortby = sortcol;
    var sortby = sortcol;        
   // var selectioncolor = "#ffff99";    
            
 	hr = $(document).getUrlParam('hr'); // highlight row with diff color
 	
 	var gap = $(document).getUrlParam('gap'); // keep row only  
        
    d3.select("#"+tablename)
      .style("border-spacing",function(){ 
      		if(gap=='yes') 
      			return "0px 10px";
      		else 
      			return "0px 0px;";})//insert gap between rows
	    .append("tbody")	  
	     .selectAll("tr")
	    .data(rowdata)
	    .enter().append("tr")  
	    .attr("id", function(d, i){
	    	return "tr-"+i;
	    }) 
	    .attr("class", function(d,i){
	    	if(hr=='yes')
	    		return "row-highlight";
	    }) 

   //sorting  	
    .sort(function (a, b) { 
                return a == null || b == null ? 0 : allCompare(a, b, sortby); 
                       })            	
    .on("click", function(d, i){    	   
    	
    	var otherrows = d3.select("#viz").selectAll("table").selectAll("tr").filter( function( dn, index ){
		    	    	return (index!=i);}) ;		    	    	
		   // var othertables = d3.select("#viz").selectAll("table [id!='#"+tablename+"']");		   // console.log(othertables.length);
   		// console.log(tablename);
   		
		var others = d3.selectAll("table").filter(function(){		  
		   	if( d3.select(this).attr("id")!=tablename) {
		   		// console.log(d3.select(this).attr("id"));
		   		return true;
		   	}else 
		   		return false;		   	
		   });		   
		   // console.log(others.length); 
		  var otherstablerows = others.selectAll("tr"); 	   	   	    	
  	    	   	 
    	  var otherrowtrans=otherrows.transition();
    	  
    	  var selectedrow = d3.select("#viz").select("#"+tablename).selectAll("tr").filter( function( dn, index ){
		    	    	return (index==i);});    	    
   		     	
   		   	
   		  selectedrow
   		  .on("mouseout", function(){
		    	// d3.select(this).style("font-weight","bold");
		    	  	    		return;
		    })
		 .on("click", function(){
   	  	    		return;
		    });;
		    			   	
		  var seltrans = selectedrow.transition();  		
		    
		  selectedrow.selectAll("td")
		  .transition()
     			 .ease("linear")
            .duration(transduration)
    		.delay(transdelay)
    		.style("border-color","white")    		
    		.style("background-color", function(){ if(kr=='name') return "white"})
    		 ;     		
    		 	

    	  var id = "#tr-"+i;
    	  //populate header 
    	  d3.select("#age").html(d[4]);
    	  d3.select("#sex").html(d[3]);
    	  d3.select("#clinician").html(d[8]);
    	  d3.select("#mrn").html(d[2]);
    	  d3.select("#photo").html( "<img src="+d[0]+" width='100' height='100'>");
    	  
    	  
    	 // d3.select("#boyosh").style("background-color", function(){
			// if(parseInt(d[4])>50) 
				// return "brown";
			// else 
				// return "green";
			// });
// 			
//     	  
    	  //populate button
    	  d3.selectAll(".button-name").html("for <b>"+d[1]+"</b>");
    	  d3.selectAll(".button-pic").html( "<img src="+d[0]+" width='40' height='40'>");
    	  
    	  
    	 
    	  ////   	   
   
    d3.select("#list")
        .transition()
        // .ease("linear")
    	  .duration(transduration)
    	    .style("visibility","hidden");
    	    
     d3.select("#inputs")
        .transition()
        // .ease("linear")
    	  .duration(transduration)
    	    .style("visibility","hidden"); 
  
    d3.selectAll("thead")
        .transition()
        // .ease("linear")
    	  .duration(transduration)
    	    .style("visibility","hidden");     
  
//do not make the border invisible
    d3.selectAll("table")
        .transition()
        // .ease("linear")
    	  .duration(transduration)
    	    .style("border-color","white");    
 	        	       	  
    	  
   	otherrowtrans
   	.ease("linear") // shondeho 
    	    .duration(transduration) // shondeho
    		.style("background-color", "white")
    		.style("border-color","white")
    		.style("visibility", function(d2, i2){  
    			 
    				if(transition =='yes' || "kr"=="row"){
    					return "hidden"; }   				
    			
    		});
    		
   //////////////////////////////////////other table rows ///////////// 
   if(otherstablerows.length>0){		
      otherstablerows.transition() 
        // .ease("linear")
    	    .duration(transduration)
    		.style("background-color", "white")
    		.style("border-color","white")
    		.style("visibility", function(d2, i2){  
    			 {
    				if(transition=="yes" || "kr"=="row"){
    					return "hidden"; }   				
    				};
    		});		

    		}
//  

  d3.selectAll(".title").transition()
   	// .ease("linear")
    	    .duration(transduration)
    		.style("background-color", "white")
    		.style("color","white")
    		.style("visibility", function(d2, i2){  
    			 { return "hidden";   				
    				};
    		});
    		
    		
    var position1= $('#'+tablename+' > tbody > tr').eq(i).offset();
    var position2 = $('#'+tablename+' > thead > th:nth-child(2)').offset();
		    	
	// console.log(position1.top);
    // console.log(position2.left);
    
    var floatdiv = selectedrow.selectAll("td").filter( function( dn, index ){		    	    	
		    	    	return (index==1);});
	floatdiv.html(d[1]);//only the name
	d3.selectAll(".simlist").style("visibility","hidden");//hide the similarity icon	    	
		    	    	 
  		    	   	    	   		    	    	       	   	    	    	
    var col = selectedrow.selectAll("td").filter( function( dn, index ){ return (index!=1);}); 
				   //if no t2 then immediately open url.
	var t2 = col.transition(); // all columns except the name become invisible, should be configurable
    
  
    t2.delay(transdelay)
     .duration(transduration)	    	   		
		    	   .ease("linear") 	   
		       		 // .style("color","white")
		    	   	 .style("opacity",function(){
		    	   			if (kr =="name") {
		    	   				    selectedrow.classed("row-highlight");
		    						selectedrow.attr("class","row-normal");
		    	   					return 0;
		    	   					}		    	   							    	   					
		    	   			else {
		    	   				selectedrow.classed("row-highlight");
		    						selectedrow.attr("class","row-normal");
		    	   				return 1;}		
		    	   					
		    	   		})	;      	 

    		
     t2.each( "end", function(){   
 			d3.selectAll(".sim").style("visibility","hidden"); //hide sim list after animation starts 
     	  // alert("after t2");	     	  
     	  if(kr=='row'){
     	  	selectedrow.classed("row-highlight");
		    selectedrow.attr("class","row-normal");
     	  	
     	  	floatdiv
		    .style("position","absolute")
					 .style("left","30px")
					 .style("top", "65px")
					 .style("height","30px")
					 .style("z-index","10")
					 // .style("font-weight","bold")
					 .style("font-size","36px")
		   			.style("background-color",changedBack)
				 		.style("color",changedColor)		    	  			    	  
		    	  			;;
					 
			d3.select("#inputs").remove();
		    d3.select("table").select("thead").remove();
		    otherrows.remove();
		    col.remove();

		    // selectedrow.classed("row-highlight");
		     // selectedrow.attr("class","row-normal");	
		    	
		    selectedrow
		     .selectAll("td")
		    	.on("mouseover", function(){
		    		// d3.select(this).style("font-weight","bold");
		    		    		return;
		    			})	
		    	.on("mouseout", function(){
		    		// d3.select(this).style("font-weight","bold");
		    	  	    		return;
		    			}) 
		    	.on("click",function() {
		    	  				return;								
							  })		    	  				
		    	  			;
//chnage polarity	 
		   	   	  				    			 
		detailspage();			 	  
		    	  
     	 return;
     	  }	   	    		    	  			
		 
		  // floatdiv.attr("class","td-name"); 
		  else{     	   
       	  
    	        		  		
		      floatdiv
		      		.style("position", "absolute")
    				.style("z-index","10")
		    	   .style("top", position1.top+"px")
		    	   .style("left",position2.left+"px")
		    	   ;
		    	    		  		     		
    	  var t3 = floatdiv.transition();    	    		    	    	
		  
		  var dl1 = transdelay;
		  
		  var dur1= animduration;
		  
		  		 
		   	    	
		t3
		.ease("cubic-in-out")
			.delay(transdelay)
					 .duration(dur1)
				// .style("position","absolute")
					 .style("left","30px")
					 .style("top", "65px")
					 .style("height","30px")
					 .style("z-index","10")
					 .style("font-size","36px")
					 // .style("font-weight","bold")
					 .style("background-color",changedBack)
					 .style("color",changedColor)
					 		;		 
			
		//change color from yellow to white 		    	   
		    	   // t2.styleTween("background-color", function() { return d3.interpolate("#ffff99", "white"); });
 	   
		 t3.each("end", function(){
		    	  		 
		    	d3.select("#inputs").remove();
		    	d3.select("table").select("thead").remove();
		    	otherrows.remove();
		    	col.remove();

		       			
		    	
		    	selectedrow.selectAll("td")
		    	.on("mouseover", function(){
		    		// d3.select(this).style("font-weight","bold");
		    		    		return;
		    			})	
		    			.on("mouseout", function(){
		    				// d3.select(this).style("font-weight","bold");
		    	  	    		return;
		    			}) 
		    	  			.on("click",function() {
		    	  				return;								
							  })		    	  				
		    	  			;
				 detailspage();	 
    	     });
    }//end of else	  
    	  
    	  })       	    
    
    }) 
    
    
    .selectAll("td")  //all the columns
     .data(function(d) { return jsonToArray(d); })
    .enter().append("td")
    .attr("class", function(d, i){
    	if(i==1) return "td-name";
    	else return "td-"+i;
    })
    .style("font-size",fontsize+"px")
    .style("height", rowheight+"px")
    .style("display", function(d,i){
            	if(otherinfo!="yes"){
    						if(i==5  || i==6 || i==7) return "none";    					
    				}
    				
    			if(pic!="yes"){
    					if (i==0)  return "none";		
    					
    				}
    			 // return "table-cell";	
            })
    	
    .html( function(d,i){ 
    	    	
    	if( i!=0 ){	      
       	   
       	   	if(otherinfo!="yes" && (i==5 || i==6 || i==7 ) ){
    	     // d3.select(this).style("display","none");// TODO:display or visibility none ?
    	     return;
    	  }    	    		
    		// else return "<div>"+d[1]+"</div>";
    		else return d[1];
    	}    		
    	// return d;
      	else if(i==0 && pic!="yes") {
    	     // d3.select(this).style("display","none");// TODO:display or visibility none ?     
    		 return;
    	}
    	else if(i==0 && pic=="yes") {     		 
    		 var height = rowheight+"px";
    		 var str= "<div class='patientphoto' style='height:"+height+";width:"+height+";'><img src='"+d[1]+"'></div>";
    		 return str;
    		    }    		
    		});
    	
   //end of table populating//    
    	
    var simnames= d3.selectAll(".td-name").filter( function(d){
    	return (d[1].indexOf("Josh")!=-1);
    	});   
    	
    simnames.html("");
    simnames.append("span").html(function(d){ return d[1]});	 
    simnames.select("span").append("span").attr("class", "sim").html("<img src='css/group_forum.png'>");   //       
    var simlist= d3.select("#sim-list")
    .style("position", "absolute")
	.style("z-index", "10")
	.style("visibility", "hidden");  
	
	d3.select("#shosim").on("click", function(){
		highlight();
	});
	
	d3.select("#highlightsim").on("click", function(){
			  d3.selectAll(".td-name")
      .style("background-color", function(d){
      	   // var content = d3.select(this).html();
           var name= d[1];          
           var bgcolor= d3.select(this).style("background-color");
           
           if(name.indexOf("Josh")!=-1 ){
           	    // console.log("in sim="+name + " bcolor " + bgcolor);
          		return "lightBlue";    	    	
           	
           } else 
           	{
           		return bgcolor;
           	}
      }); 	  
	      
	});
    
    d3.select("#shosim").on("click", function(){
		highlight();
	});
	
	d3.select("#off").on("click", function(){
		d3.select("#sim-list").style("visibility","hidden");
	});  
     
      
    d3.selectAll(".sim")
      .on("mouseover", function(){      	 
      	 simlist.style("visibility", "visible");
	     simlist.style("top", (event.pageY+5)+"px").style("left",(event.pageX+5)+"px");	     
	     })
      ;
// d3.selectAll(".sim").style("visibility","hidden");

}


