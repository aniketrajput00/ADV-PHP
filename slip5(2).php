<?php
 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
    die("Error in connection");
 }
 $name=$_POST["t1"];
 mysql_select_db("cdj");

 $res=mysql_query("select * from stud where sname='$name';");
echo("<table border='1'>");
echo("<tr><th>sno<th>sname<th>stander<th>markes<th>per</tr>");

 while($row=mysql_fetch_array($res))
 {
  echo("<tr><td>".$row['sno']);
  echo("<td>".$row['sname']);
  echo(" <td>".$row['stander']);
  echo("<td>".$row['markes']);
  echo("<td>".$row['per']);
  echo("</tr>"); 
}
 echo("</table>");
 mysql_close($con);

?>
 