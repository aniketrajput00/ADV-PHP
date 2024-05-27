<html>
 <body>
  <form method="post" action="#">
  Enter date:
  <input type="text" name="t1"><br>
 <input type="submit" value="detail">
 </body>
</html>

<?php
 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
  die("Error in database connection..");
 }
 $d=$_POST["t1"];
 mysql_select_db(ram);
  $res=mysql_query(" select max(passenger.p_no) from train,passenger,tp where t_no.train=tp.t_no and p_no.passenger=tp.t_no and date='2023-06-20';");
  
  if($row=mysql_fetch_array($res))
  {
   echo("<br>train no=".$row[0]);
   echo("<br>train name=".$row[1]);
  }
 mysql_close($con);
?>

