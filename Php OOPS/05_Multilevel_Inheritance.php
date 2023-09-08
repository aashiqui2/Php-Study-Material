

<h2> MULTILEVEL </h2>

<?php
     class Grandfa{
		 public $name="Prabakaran";
		 public function sing(){
			 echo "I am singing a song<br>";
		 }
		 public function dance()
		 {
			 echo "I know dance<br>";
		 }
	 }
	 
	 class Son extends Grandfa{
		 
		 public function teaching(){
			 
			 echo "I am a teacher<br>";
		 }
		 public function dance()
		 {
			 echo "I know dance very well<br>";
		 }
		 
	 }
	 
	 class Grandson extends Son{
		 
		 public function teaching(){
			 
			 echo "I am a grandson I know with teaching<br>";
			 }
		public function sing(){
			
			echo "I am a grandson I know with teaching<br>";
		}	 
		 public function dance(){
			 
			 echo "I am grandson I know dance also<br>";
		 }
	 }
	 
	 $p = new Grandfa();
	 $q = new Son();
	 $r = new Grandson();
	 
	 $p->sing();
	 $p->dance();
	 
	 $q->teaching();
	 $q->dance();
	 echo $q->name;
	 echo"<br>";
	 
	 $r->teaching();
	 $r->sing();
	 $r->dance();
	 echo $r->name;
?>