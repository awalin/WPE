<?php 
//Enter Data
$arr = array(
"header" => array("","Name","Age","Sex","MRN","DOB","Admit Date","Attn Doctor"),
"row1" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","William Altman","82","M","988232","11/23/1929","07/23/2011","Hollander John"),
"row2" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Josh Dimassio","41","M","988234","03/21/1970","07/23/2011","Goodman Mary"),
"row3" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Georges Driscoll","77","M","988235","04/01/1934","07/23/2011","Elizabeth Harris"),
"row4" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Rachel Evans","58","F","988236","05/27/1953","07/24/2011","Ben Schneider"),
"row5" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Fateesh Aboud","54","M","988237","07/23/1957","07/24/2011","Goodman Mary"),
"row6" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Gomez Fred","52","M","988233","05/11/1959","07/23/2011","Hoffman Kenneth"),
"row7" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Danny Holmes","52","M","988239","09/12/1959","07/23/2011","Hoffman Kenneth"),
"row8" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Emma Johnson","54","F","988238","02/28/1957","07/23/2011","Ben Schneider"),
"row9" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Samantha Poulson","32","F","988241","09/17/1979","07/24/2011","Hoffman Kenneth"),
"row10" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Nancy Walsh","75","F","988242","04/08/1936","07/24/2011","Albertson Susan"),
"row11" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Willson, Charlie","67","M","988243","06/12/1944","07/23/2011","Goodman Mary"),
"row12" => array("&nbsp;&nbsp;&nbsp;&nbsp;<br/> <br />","Zeltser, Emily","38","F","988244","10/12/1973","07/24/2011","Franks Georges")
);

//With Pics
$arrPICS = array(
"header" => array("","Name","Age","Sex","MRN","DOB","Admit Date","Attn Doctor"),
"row1" => array("images/reg/P1.jpg","Altman, William","82","M","988232","11/23/1929","07/23/2011","Hollander John"),
"row2" => array("images/reg/P2.jpg","Dimassio, Josh","41","M","988234","03/21/1970","07/23/2011","Goodman Mary"),
"row3" => array("images/reg/P3.jpg","Driscoll, Georges","77","M","988235","04/01/1934","07/23/2011","Elizabeth Harris"),
"row4" => array("images/reg/P4.jpg","Evans, Rachel","58","F","988236","05/27/1953","07/24/2011","Ben Schneider"),
"row5" => array("images/reg/P5.jpg","Fateesh, Aboud","54","M","988237","07/23/1957","07/24/2011","Goodman Mary"),
"row6" => array("images/reg/P6.jpg","Gomez, Fred","52","M","988233","05/11/1959","07/23/2011","Hoffman Kenneth"),
"row7" => array("images/reg/P7.jpg","Holmes, Danny","52","M","988239","09/12/1959","07/23/2011","Hoffman Kenneth"),
"row8" => array("images/reg/P8.jpg","Johnson, Emma","54","F","988238","02/28/1957","07/23/2011","Ben Schneider"),
"row9" => array("images/reg/P9.jpg","Poulson, Samantha","32","F","988241","09/17/1979","07/24/2011","Hoffman Kenneth"),
"row10" => array("images/reg/P10.jpg","Walsh, Nancy","75","F","988242","04/08/1936","07/24/2011","Albertson Susan"),
"row11" => array("images/reg/P11.jpg","Willson, Charlie","67","M","988243","06/12/1944","07/23/2011","Goodman Mary"),
"row12" => array("images/reg/P12.jpg","Zeltser, Emily","38","F","988244","10/12/1973","07/24/2011","Franks Georges")
);

//COMMENT THE FOLLOWING STATEMENT TO TOGGLE VERSIONS
//$arr = $arrPICS;

function getPatientRow($mrn){
	$ret = array();
	global $arr;
	foreach ($arr as $row => $columns){
		foreach ($columns as $col){
			if($col == $mrn)
				return $columns;
		}
	}
}


function getPatientRowFromPics($mrn){
	$ret = array();
	global $arrPICS;
	foreach ($arrPICS as $row => $columns){
		foreach ($columns as $col){
			if($col == $mrn)
				return $columns;
		}
	}
}

function getPicurl($mrn){
	$row = getPatientRowFromPics($mrn);
	return $row[0];
}

function getName($mrn){
	$row = getPatientRow($mrn);
	return $row[1];
}
function getAge($mrn){
	$row = getPatientRow($mrn);
	return $row[2];
	
}
function getSex($mrn){
	$row = getPatientRow($mrn);
	return $row[3];
	
}
function getDOB($mrn){
	$row = getPatientRow($mrn);
	return $row[5];
	
}
function getAdmitDate($mrn){
	$row = getPatientRow($mrn);
	return $row[6];
	
}
function getAttDoc($mrn){
	$row = getPatientRow($mrn);
	return $row[7];
	
}

//HARD CODING PATIENT SPECIFIC INFORMATION TO BE DISPLAYED
$patient_info= array(
"988232" => "
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>
<br/>
 - Temperature: 98.7 oF<br>
 - Blood Pressure: 135/90<br>
 - Pulse: 75 BMP<br>
 - Respiration: 17 breaths/min<br>
<br />
</div>


<div style='float:left;padding-left:30px;'>
<i>Medical History:</i>

<br/>
 - Osteoarthritis.<br>
 - History of stroke with manifestation on right side.<br>
<br />
</div>



<div style='float:left;padding-left:30px;'>
<i>Allergies:</i>

<br/>
 - Dust<br>
 - No Known Drug Allergies<br>
<br />
</div>
<div style='float:left;padding-left:30px;'>
<i>Medications: </i>

<br/>
 - Acetaminophen (Osteoarthritis)
 </div>
",
"988234" => "

<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>


<br/>

 - Temperature: 902.7 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15<br>

<br/>
</div>

<div style='float:left;padding-left:30px;'> <i>Medications: </i></div>
<br/>

 - Tetanus
</div>
",
"988236" => "
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>


<br/>

 - Temperature: 98.7 oF<br>
 - Blood Pressure: 132/84<br>
 - Pulse: 68 BMP<br>
 - Respiration: 14<br>
 <br />
</div>

<div style='float:left;padding-left:30px;'>
<i>Medications: </i>

<br/>

 - Pneumonia
</div>
",
"988237" => "
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>
<br/>
 - Temperature: 99 oF <br>
 - Blood Pressure: 122/84 <br>
 - Pulse: 72 BMP<br>
 - Respiration: 17 breaths/min<br>

</div>

<div style='float:left;padding-left:30px;'>
<i>Medical History:</i>
<br/>
 - None <br>
</div>

<div style='float:left;padding-left:30px;'>
<i>Allergies:</i>
<br/>
- Gluten<br>
- No Known Drug Allergies
</div>

<div style='float:left;padding-left:30px;'>
<i>Medications:</i>
<br/>
 - None
</div>
",
"988236" => "

<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>

<br/>

 - Temperature: 98.7 oF<br>
 - Blood Pressure: 132/84<br>
 - Pulse: 68 BMP<br>
 - Respiration: 14<br>
 <br /> </br >
</div>
<div style='float:left;padding-left:30px;'>
<i>Medications: </i>

<br/>

 - Pneumonia
</div>
" 
,
"988239" =>"

<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>
<br/>

 - Temperature: 98.7 oF <br>
 - Blood Pressure: 123/82 <br>
 - Pulse: 74 BMP<br>
 - Respiration: 16 breaths/min<br>

<br/>
</div>

<div style='float:left;padding-left:30px;'>
<i>Medical History:</i>


<br/>

 - Asthma <br>
<br>
</div>
<div style='float:left;padding-left:30px;'>
<i>Allergies:</i>


<br/>

 - Pollen <br>
 -  No Known Drug Allergies<br>


<br />
</div>
<div style='float:left;padding-left:30px;'>
<i>Medications:</i>


<br/>

 - Albuterol (asthma)
 </div>

",
"988241" =>" 
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>

<br/>

 - Temperature: 97.8 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15 breaths/min<br>

<br/>
</div>


<div style='float:left;padding-left:30px;'>
<i>Medical History:</i>

<br/>

 - No significant history <br>

<br/>
</div>

<div style='float:left;padding-left:30px;'>
<i>Allergies:</i>

<br/>

 - Penicillin <br>

<br/>
</div>

<div style='float:left;padding-left:30px;'>
<i>Medications:</i>


 <br />
 - Oral Contraceptive Pill
</div>
",
"988242" => "
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>

 <br />
 - Temperature: 902.7 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15<br>
 </div>


",
"988243" =>"
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>

<br/>

 - Temperature: 98.7 oF <br>
 - Blood Pressure: 135/90 <br>
 - Pulse: 82 BMP<br>
 - Respiration: 18 breaths/min<br>

<br/>
</div>
<div style='float:left;padding-left:30px;'>
<i>Medical History:</i>

<br/>

 - Coronary artery disease <br>
 - Hypertension <br>

<br/>
</div>
<div style='float:left;padding-left:30px;'>
<i>Allergies:</i>

<br/>

 - No Known Drug Allergies <br>

<br/>
</div>
<div style='float:left;padding-left:30px;'>
<i>Medications:</i>
</div>
<br/>

- Hydrochlorothiazide (Hypertension)<br>
- Aspirin (CAD)


",
"988244" =>"
<div style='float:left;padding-left:30px;'>
<i>Vital signs:</i>

<br/>


- Temperature: 98.3 oF <br>
- Blood Pressure: 140/95 <br>
- Pulse: 78 BPM<br>
- Respiration: 17 breaths/min<br>


<br/>
</div>
    <div style='float:left;padding-left:30px;'><i>Medical History</i>
	<br>
	- Obesity<br>
	- Hypertension<br>
	
	<br/>
	</div>
    <div style='float:left;padding-left:30px;'><i>Allergies</i></div>	
	<br/>
	- No Known Drug Allergies<br>
	
    <br />

<div style='float:left;padding-left:30px;'>
<i>Medications: </i>
</div>
<br/>

 - Simvastatin (high cholesterol)

",
"988235" => " " ,
"988233" => " ",
"988238" => " "
);

?>