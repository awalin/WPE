// var fontsize ;
// var rowheight;
// 
// 
function setSize(fs, rh){
	fontsize = fs;
	rowheight = rh;
	
}


var min= 10;
var max= 24;


function increaseFontSize() {
 
   var p = document.getElementsByTagName('td');
   var s ;
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
         s = parseInt(fontsize);
      }
      if(s < max) {
 
         s += 1;
      }
      p[i].style.fontSize = s+"px";
 
   }
}


function decreaseFontSize() {
   var p = document.getElementsByTagName('td');
   var s;
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
          s = parseInt(fontsize);
      }
      if(s > min) {
 
         s -= 1;
      }
      p[i].style.fontSize = s+"px"
 
   }
}



var minheight = 35;
var maxheight = 60;

function increaseRowSize() {
	
	 
   $('body').focus(); 
   $('#search').focusout();
   
   var p = document.getElementsByTagName('td');
   var s ;
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.height) {
         s = parseInt(p[i].style.height.replace("px",""));         
         // console.log("inside row increase ");
      } else { 
         s = parseInt(rowheight); //30+5
         // console.log("has not size ");
      }
      if(s<maxheight) { 
         s += 2;
         // console.log("increasing");
      }
      p[i].style.height = s+"px";
      // console.log(p[i].style.height);     
     }    
   
    rowheight = s ;
   	
	d3.selectAll("tr").selectAll("td").selectAll(".patientphoto")
		.style("width", function(d,i){
    	     		 return width = d3.select("td").style("height")  })
    	.style("height", function(d,i){
    	     		 return width = d3.select("td").style("height");  });	    
    	
     

	d3.selectAll(".image").style("width", function(d,i){
    	 { 
    		 return width = d3.select("td").style("height");		    
    	}
});
}

function decreaseRowSize() {   
   
   var p = document.getElementsByTagName('td');
   var s; 
   
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.height) {
        s = parseInt(p[i].style.height.replace("px",""));
         // console.log("has ");
      } else {
 
         s = parseInt(rowheight);
          // console.log("has not ");
      }
      
      if(s > minheight) {
 
         s -= 2;
          // console.log("doing ");
      }
      
      p[i].style.height = s+"px";
      console.log(p[i].style.height);
 
   }
   
   rowheight = s ;
   
  d3.selectAll("tr").selectAll("td").selectAll(".patientphoto")
		.style("width", function(d,i){
    	     		 return width = d3.select("td").style("height")  })
    	.style("height", function(d,i){
    	     		 return width = d3.select("td").style("height");  });	    
    	

	d3.selectAll(".image").style("width", function(d,i){
    	 { 
    		 return width = d3.select("td").style("height");		    
    	}
});
  
   
}

function pageRefresh(){
  console.log("inside refresh");
   
   url="list.html?";
   url+="transition=yes";
   url+="&animation=yes";
   url+="&totop=yes";
   url+="&trans=fast";
   url+="&anim=fast";
   url+="&spot=fast";
   url+="&otherinfo=yes";
   url+="&pic=yes";
   url+="&kr=name"
   
   window.location.href = url;
   
	
}
