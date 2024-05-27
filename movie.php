<?php
    $con=mysql_connect("localhost","root","");
    if($con==false)
      die("Error in connection");

   $an=$_POST["t1"];
    mysql_query("xyz");
  
   $res=mysql_query("select movie.* from movie,actor
where movie.mno=actor.mno
and aname='$an' ");
    
  if($row=mysql_fetch_array($res))
   {
     echo("<br> Movie No=".$row[0]);
     echo("<br> Movie Name Name=".$row[1]);
     echo("<br> Release Year=".$row[2]);
   }

?>