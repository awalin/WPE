function allCompare(a,b,attrName){	

	
	// console.log("cmp: " + attrName);
	if(attrName=='last_update'){
            		//create date comparator
            	return dateCompare(a[attrName], b[attrName]); 
            	}
    else if(attrName=='screen_name'){
            		return stringCompare(a[attrName], b[attrName]); }
    else {
            		return intCompare(a[attrName], b[attrName]);
            		}       		
            	
}
function dateCompare( a,b ){


	// var format = d3.time.format("%Y-%m-%d %H:%M:%S");
	var format = d3.time.format("%Y-%m-%d");  	
	var daya = format.parse(a);
	var dayainsec = +daya;
			// console.log("b4 parse "+ val.tweet_time);
	var dayb = format.parse(b);
	var daybinsec = +dayb;
			// console.log( dayainsec);
			// console.log( daybinsec);//" : Today is within  1 week");
 
	if(sortDesc){
		return dayainsec < daybinsec ? 1 : dayainsec == daybinsec ? 0 : -1;}
	else 
	    return 	dayainsec > daybinsec ? 1 : dayainsec == daybinsec ? 0 : -1;
	
}

function stringCompare(a, b) {
    a = a.toLowerCase();
    b = b.toLowerCase();
    if(sortDesc)
    	return a < b ? 1 : a == b ? 0 : -1;
    else  return a > b ? 1 : a == b ? 0 : -1;
}

function intCompare(a, b) {
	a=+a;
	b=+b;
	if(sortDesc)
    	return a < b ? 1 : a == b ? 0 : -1;
    else 
        return a > b ? 1 : a == b ? 0 : -1;
}

function jsonKeyValueToArray(k, v) {return [k, v];}

function jsonToArray(json) {
    var ret = new Array();
    var key;
    for (key in json) {
        if (json.hasOwnProperty(key)) {
            ret.push(jsonKeyValueToArray(key, json[key]));
        }
    }
    return ret;
};