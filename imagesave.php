<?php

  	$conn = mysql_connect('localhost','root','');
  	mysql_select_db('stallstop');
  	 $select = mysql_query("SELECT * FROM stock"); 
  while ($row = mysql_fetch_assoc($select))
  {
  	$decoded = $row['PIC'];
  	file_put_contents('C:\xampp\htdocs\onsitetask\images\ '.$row['SNO'].'.jpg',$decoded);
}
?>