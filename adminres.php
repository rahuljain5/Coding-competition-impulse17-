<?php 
error_reporting(-1);
?>
<img id="implogo" src="imp.png" alt="impulse logo" height="130px" width="250px" style="display:inline;"></img>
<h1 style="position:absolute; left:40%; display:inline;">Results-Round1:</h1>
<img id="fsmklogo" src="fsmk.jpg" alt="fsmk logo" height="100px" width="100px" style="float:right; display:inline;" />
<?php
$connect=mysqli_connect('localhost','root','password','tsc');
$str= "<meta name=viewport content=width=device-width, initial-scale=1><link rel='stylesheet' href='bootstrap.min.css'>";
$str +="<table class=table table-striped>";	
$r=mysqli_query($connect,"select * from code order by score DESC ");
		$str .="<tr>";
		$str .="<td>Team Name</td><td>Score</td><td>Time-taken</td>";
		 $str .="</tr>";
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
			$str .="<tr>";
			$str .="<td>".$row['teamname']. "</td>";
			$str .="<td>".$row['score']."</td>";
			$str .="<td>".$row['time_taken']."</td>";			
			$str .="</tr>";
		}
		$str .="</table>";
		echo $str;
	

?>
