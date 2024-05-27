<?php
 class student
 {
  public $roll_number,$stud_name,$percentage;
  function accept($roll_number,$stud_name,$percentage)
  {
   $this->roll_number=$roll_number;
   $this->stud_name=$stud_name;
   $this->percentage=$percentage;
  }  
 function disp()
  {
   echo("<br>roll_number=".$this->roll_number);
   echo("<br>stud_name=".$this->stud_name);
   echo("<br>percentage=".$this->percentage);
  }
 }
 $ob=new student();
 $ob->accept(101,"sai",77.56);
  $ob->disp();
?>