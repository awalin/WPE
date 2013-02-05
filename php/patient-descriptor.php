
	<table width="90%" align="center">
		<tr>
			<td valign="top"><font style="font-size: 24px;"><b> 
			<?php
			include_once 'php/patients.php';
			echo getName($_GET["MRN"]);
			?> </b> </font> <br /> <br /> <b>Medical Record
						Number:</b> <?php 
						echo $_GET["MRN"];
						?> </font> <br /> <b>Age:</b> <?php
						echo getAge($_GET["MRN"]);
						?> </font> <br /> <b>Sex:</b> <?php
						echo getSex($_GET["MRN"]);
						?> </font> <br /> <b>DOB:</b> <?php
						echo getDOB($_GET["MRN"]);
						?> </font> <br /> <b>Attending Doctor:</b> <?php
						echo getAttDoc($_GET["MRN"]);
						?> </font></td>

			<td align="right"><font style="font-size: 24px;"> <img
					src="<?php echo getPicurl($_GET["MRN"]);?>" width="175"
					height="150" alt=" "> </font></td>

		</tr>
	</table>


