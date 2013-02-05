<?php

require 'patients.php';
//Print Data

//print table header
echo "<table border='0' class='reset span-17'>";
$cnt = 0;
foreach ($arr as $row => $columns){
	if($row == "header"){
		echo "<tr class='alternate-1 space-bottom' style='background-color: #000000;'>";
		foreach ($columns as $column){
			echo "<th><h3>".$column."</h3></th>";
		}
		echo "</tr>";
		continue;
	}
	else{
		$numberofColumns =count($columns);
		//echo "\n----NOOfCOLS--".$numberofColumns."------------\n";

		if($cnt % 2 == 0){
			echo "<tr class='alternate-1' id='".$columns[4]."' height='65px'>";
		}
		else{
			echo "<tr class='alternate-0' id='".$columns[4]."' height='65px'>";
		}
		$cnt++;

		for ($i = 0; $i < $numberofColumns; $i++){

			//echo "\n----------".$i."------------\n";

			//print the image
			if($i==0){
				if($columns[$i] == "&nbsp;&nbsp;&nbsp;&nbsp;<br /> <br /> <br />"){
					echo "<td>";
					echo $columns[$i];
					echo "</td>";
				}
				else{
					$junk = "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<td width='75px'><img id='I".$columns[4]."' class=' ' src='".$columns[$i]."' width='70px' height='65px' alt='".$junk."' />";
					echo "</td>";
				}
			} 
			
			//print Name with URL
			elseif($i==1){
				//echo "<td><a href='patient-summary.php?MRN=".$columns[4]."'>";
				echo "<td><a onclick='hideotherrows(\"".$columns[4]."\")'>";
				echo $columns[$i];
				echo "</a></td>";
			}
			else{
				//echo "<td><a href='patient-summary.php?MRN=".$columns[4]."'>";
				echo "<td><a onclick='hideotherrows(\"".$columns[4]."\")'>";
				//echo "<font color='000000'>";
				echo $columns[$i];
				//echo "</font>";
				echo "</a></td>";
			}
		}
		echo "</tr>";
	}
}
echo "</table>";
?>