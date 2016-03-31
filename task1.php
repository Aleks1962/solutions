
<?php

$res = mysqli_query($desc, 'SELECT * FROM `task1`');
if(!$res) {
	exit(mysqli_error($desc));
}
$tr = "";
while($rows = mysqli_fetch_assoc($res)){
	$td = "";		
			
	$rep = preg_replace("/[^0-9]/", "", $rows['Phone']);
	if($rep !== ""){
		if(strlen($rep) < 11){
			$td .= "<td>+7".$rep."</td>";
		}
		else{
			$td .= "<td>+".$rep."</td>";	
		}
	}
	else{
		continue;	
	}	
	$tr .="<tr>".$td."</tr>";		
			
}
print "<table>".$tr."</table>";
?>