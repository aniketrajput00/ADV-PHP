<html>
<body>
<form method="post" acton="arithimatic.php">
 Enter no1:
 <input type="text" name="t1"><br>
 Enter no2:
 <input type="text" name="t2"><br>
 <input type="submit" value="calculate">
 <input type="reset"  value="clear">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
echo("<br>Addition=".$c);
echo("<br>Sub=".$d);
echo("<br>Mul=".$e);
echo("<br>Div=".$f);
?>