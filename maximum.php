<html>
<body>
<form method="post" acton="maximum.php">
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
$a>$b?$m=$a:$m=$b;
echo("Max no=".$m);
?>