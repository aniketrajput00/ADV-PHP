<html>
    <body>
        <form method="POST" action="">
            Enter no1:
            <input type="text" name="t1"><br>
            Enter no2:
            <input type="text" name="t2"><br>
            Enetr choice: 1-add<br>
                          2-SUB<br>
                          3-MUL<br>
            <input type="text" name="t3" name="t3"><br>
            <input type="submit" value="submit">             
        </form>
    </body>
</html>

<?php
class calc
 {
  
    public function ADD($a,$b)
    {
        $c=$a+$b;
        echo("<br> Addition=".$c);
    }

    public function SUB($A,$b)
    {
        $c=$a-$b;
        echo("<br> Substraction=".$c);
    }

    public function MUL($a,$b)
    {
        $c=$a*$b;
        echo("<br> Multiplication=".$c);
    }
 }

 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $ob=new calc();
 $ch=$_POST["t3"];
 switch($ch)
 {
    case '1':$ob->ADD($a,$b);
           break;
    case '2':$ob->SUB($a,$b);
           break;
    case '3':$ob->MUL($a,$b);
           break;  
   }
 
?>