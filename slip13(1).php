<?php /*a) Create a form to accept Employee detail and display it in next 
page. (Use sticky form concept).
*/?>

<html>
    <body>
        <form method="POST" action="next.php">
          Enter emp no:
          <input type="text" name="t1" value="<?php echo($_POST['t1']);?>"><br>
          Enter emp name:
          <input type="text" name="t2" value="<?php echo($_POST['t2']);?>"><br>
          Enter emp sal:
          <input type="text" name="t3" value="<?php echo($_POST['t3']);?>"><br>
         <input type="submit"> 
        </form>        
    </body>
</html>
