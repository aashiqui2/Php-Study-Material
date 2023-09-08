<?php
      class RBI{
		 public static $r=10;     // private
		 public function  rate()   // private
		   {
			  echo "This is parent class<br>"; 
		   }
	   }
	   
	   class SBI extends RBI{
		   
		   function rate1()
		   {
			   echo "This is child class<br>";
			   
			   //self::$r=10;
			   
			   echo(parent::$r);
			   echo "<br>";    // cannot access property of $r
			   
			   parent::rate();  //Fatal error: Call to private method RBI::rate() from context 'SBI' 
		   }
	   }
	   
	   $obj1 = new SBI();
	   $obj1->rate1();
?>