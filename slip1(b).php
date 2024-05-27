<html>
    <body>
        <form method="post" action="#">
            Enter course:
            <input type="text" name="t1"><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
 $xml=simplexml_load_file("slip1(b).xml");
 if(!$xml)
 {
    die("File not found...");
 }
 $n=$_POST['t1'];
 echo("<table border=''>");
 echo("<tr><th>Rno<th>name<th>address<th>college<th>course</tr>");
 foreach($xml->student as $a)
 {
    if($n==$a->course)
    {
        echo("<tr><td>".$a->roll);
        echo("<td>".$a->name);
        echo("<td>".$a->add);
        echo("<td>".$a->college);
        echo("<td>".$a->course);
    }
 }
?>