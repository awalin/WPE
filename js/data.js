<?php 
//Enter Data
$arr = {
"header"  {"","Name","Age","Sex","MRN","DOB","Admit Date","Attn Doctor"},
"row1"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Altman, William","82","M","988232","11/23/1929","07/23/2011","Hollander, John"},
"row2"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Dimassio, Josh","41","M","988234","03/21/1970","07/23/2011","Goodman, Mary"},
"row3"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Driscoll, Georges","77","M","988235","04/01/1934","07/23/2011","Elizabeth, Harris"},
"row4"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Evans, Rachel","58","F","988236","05/27/1953","07/24/2011","Ben, Schneider"},
"row5"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Fateesh, Aboud","54","M","988237","07/23/1957","07/24/2011","Goodman, Mary"},
"row6"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Gomez, Fred","52","M","988233","05/11/1959","07/23/2011","Hoffman, Kenneth"},
"row7"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Holmes, Danny","52","M","988239","09/12/1959","07/23/2011","Hoffman, Kenneth"},
"row8"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Johnson, Emma","54","F","988238","02/28/1957","07/23/2011","Ben, Schneider"},
"row9"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Poulson, Samantha","32","F","988241","09/17/1979","07/24/2011","Hoffman, Kenneth"},
"row10"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Walsh, Nancy","75","F","988242","04/08/1936","07/24/2011","Albertson, Susan"},
"row11"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Willson, Charlie","67","M","988243","06/12/1944","07/23/2011","Goodman, Mary"},
"row12"  {"&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />","Zeltser, Emily","38","F","988244","10/12/1973","07/24/2011","Franks, Georges")
);

//With Pics
var arrPICS = [

  {"images/reg/P1.jpg","Altman, William","82","M","988232","11/23/1929","07/23/2011","Hollander John"},
  
  
  {"images/reg/P2.jpg","Dimassio, Josh","41","M","988234","03/21/1970","07/23/2011","Goodman Mary"},
  
  
  {"images/reg/P3.jpg","Driscoll, Georges","77","M","988235","04/01/1934","07/23/2011","Elizabeth Harris"},
  
  
  {"images/reg/P4.jpg","Evans, Rachel","58","F","988236","05/27/1953","07/24/2011","Ben Schneider"},
  
  
  {"images/reg/P5.jpg","Fateesh, Aboud","54","M","988237","07/23/1957","07/24/2011","Goodman Mary"},
  
  
  {"images/reg/P6.jpg","Gomez, Fred","52","M","988233","05/11/1959","07/23/2011","Hoffman Kenneth"},
  
  
  {"images/reg/P7.jpg","Holmes, Danny","52","M","988239","09/12/1959","07/23/2011","Hoffman Kenneth"},
  
  
  {"images/reg/P8.jpg","Johnson, Emma","54","F","988238","02/28/1957","07/23/2011","Ben Schneider"},
  
  
  {"images/reg/P9.jpg","Poulson, Samantha","32","F","988241","09/17/1979","07/24/2011","Hoffman Kenneth"},
  
  
  {"images/reg/P10.jpg","Walsh, Nancy","75","F","988242","04/08/1936","07/24/2011","Albertson Susan"},
  
  
  {"images/reg/P11.jpg","Willson, Charlie","67","M","988243","06/12/1944","07/23/2011","Goodman Mary"},
  
  
  {"images/reg/P12.jpg","Zeltser, Emily","38","F","988244","10/12/1973","07/24/2011","Franks Georges"}
]


//COMMENT THE FOLLOWING STATEMENT TO TOGGLE VERSIONS
//$arr = $arrPICS;

function getPatientRow($mrn){
	$ret = {);
	global $arr;
	foreach ($arr as $row  $columns){
		foreach ($columns as $col){
			if($col == $mrn)
				return $columns;
		}
	}
}


function getPatientRowFromPics($mrn){
	$ret = {);
	global $arrPICS;
	foreach ($arrPICS as $row  $columns){
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
$patient_info= {
"988232"  "
<u>
<i>Vital signs:</i>
</u>
<br /> <br />
 - Temperature: 98.7 oF<br>
 - Blood Pressure: 135/90<br>
 - Pulse: 75 BMP<br>
 - Respiration: 17 breaths/min<br>
<br />
<u>
<i>Medical History:</i>
</u>
<br /> <br />
 - Osteoarthritis.<br>
 - History of stroke with manifestation on right side.<br>
<br />
<u>
<i>Allergies:</i>
</u>
<br /> <br />
 - Dust<br>
 - No Known Drug Allergies<br>
<br />
<u>
<i>Medications: </i>
</u>
<br /> <br />
 - Acetaminophen (Osteoarthritis)
",
"988234"  "

<u>
<i>Vital signs:</i>
</u>

<br /> <br />

 - Temperature: 902.7 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15<br>

<br /> <br />
<i><u> Medications: </u></i>
<br /> <br />

 - Tetanus

",
"988236"  "
<u>
<i>Vital signs:</i>
</u>

<br /><br />

 - Temperature: 98.7 oF<br>
 - Blood Pressure: 132/84<br>
 - Pulse: 68 BMP<br>
 - Respiration: 14<br>
 <br />

<u>
<i><b>Medications: </b></i>
</u>
<br /> <br />

 - Pneumonia

",
"988237"  "
<u>
<i>Vital signs:</i>
</u>
<br /><br />

 - Temperature: 99 oF <br>
 - Blood Pressure: 122/84 <br>
 - Pulse: 72 BMP<br>
 - Respiration: 17 breaths/min<br>

<br />


<u>
<i>Medical History:</i>
</u>
<br /><br />

 - None <br>

<br />


<u>
<i>Allergies:</i>
</u>
<br /><br />

- Gluten<br>
- No Known Drug Allergies
 <br>

<br />


<u>
<i>Medications:</i>
</u>
<br /><br />
 - None

",
"988236"  "

<u>
<i><b>Vital signs:</b></i>
</u>
<br /><br />

 - Temperature: 98.7 oF<br>
 - Blood Pressure: 132/84<br>
 - Pulse: 68 BMP<br>
 - Respiration: 14<br>
 <br /> </br >

<u>
<i><b>Medications: </b></i>
</u>
<br /><br />

 - Pneumonia

" 
,
"988239" "

<u>
<i>Vital signs:</i>
</u>

<br /><br />

 - Temperature: 98.7 oF <br>
 - Blood Pressure: 123/82 <br>
 - Pulse: 74 BMP<br>
 - Respiration: 16 breaths/min<br>

<br /><br />

<u>
<i>Medical History:</i>
</u>

<br /><br />

 - Asthma <br>
<br>

<u>
<i>Allergies:</i>
</u>

<br /><br />

 - Pollen <br>
 -  No Known Drug Allergies<br>


<br />

<u>
<i>Medications:</i>
</u>

<br /><br />

 - Albuterol (asthma)

",
"988241" " 
<u>
<i>Vital signs:</i>
</u>
<br /><br />

 - Temperature: 97.8 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15 breaths/min<br>

<br /> <br />


<u>
<i>Medical History:</i>
</u>
<br /><br />

 - No significant history <br>

<br /> <br />


<u>
<i>Allergies:</i>
</u>
<br /><br />

 - Penicillin <br>

<br /> <br />


<u>
<i>Medications:</i>
</u>

 <br />
 - Oral Contraceptive Pill

",
"988242"  "
<u>
<i>Vital signs:</i>
</u>
<br />
 <br />
 - Temperature: 902.7 oF <br>
 - Blood Pressure: 115/78 <br>
 - Pulse: 67 BMP<br>
 - Respiration: 15<br>


",
"988243" "
<u>
<i>Vital signs:</i>
</u>
<br /><br />

 - Temperature: 98.7 oF <br>
 - Blood Pressure: 135/90 <br>
 - Pulse: 82 BMP<br>
 - Respiration: 18 breaths/min<br>

<br /><br />

<u>
<i>Medical History:</i>
</u>
<br /><br />

 - Coronary artery disease <br>
 - Hypertension <br>

<br /><br />

<u>
<i>Allergies:</i>
</u>
<br /><br />

 - No Known Drug Allergies <br>

<br /><br />

<u>
<i>Medications:</i>
</u>
<br /><br />

- Hydrochlorothiazide (Hypertension)<br>
- Aspirin (CAD)


",
"988244" "
<u>
<i>Vital signs:</i>
</u>
<br /><br />


- Temperature: 98.3 oF <br>
- Blood Pressure: 140/95 <br>
- Pulse: 78 BPM<br>
- Respiration: 17 breaths/min<br>


<br /><br />
    <u><i>Medical History</i></u>
	<br>
	- Obesity<br>
	- Hypertension<br>
	
	<br><br>
    <u><i>Allergies</i></u>	
	<br><br>
	- No Known Drug Allergies<br>
	
    <br />

<u>
<i>Medications: </i>
</u>
<br /><br />

 - Simvastatin (high cholesterol)

",
"988235"  " " ,
"988233"  " ",
"988238"  " "
);

?>