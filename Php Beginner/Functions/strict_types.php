<?php  


  // function AddFloatAndInt(int $a, float $b) : int
  // {
  //     return $a + $b;
  // }

  // echo AddFloatAndInt(1.4, '2');
  // echo "<br>";

  /*
  * without strict typing, PHP will change float(1.4) to int(1)
  * and string('2') to float(2.0) and returns int(3)
  */


// declare(strict_types=1);

//   function AddIntAndFloat(int $a, float $b): int
//   {
//       return (string) $a + $b;
//   }

//   echo AddIntAndFloat(1.4,'2');
  // Fatal error: Uncaught TypeError: Argument 1 passed to AddIntAndFloat() must be of the type int, float given
//   echo AddIntAndFloat(1,'2');
  // Fatal error: Uncaught TypeError: Argument 2 passed to AddIntAndFloat() must be of the type float, string given

  // Integers can be passed as float-points :
//   echo AddIntAndFloat(1,1);
  // Fatal error: Uncaught TypeError: Return value of AddIntAndFloat() must be of the type integer, string returned



  declare(strict_types=1);
  
  function AddFloats(float $a, float $b) : float
  {
      return $a+$b;
  }
  
  $float = AddFloats(1.5,2.0); // Returns 3.5
  
  // function AddFloatsReturnInt(float $a, float $b) : int
  // {
  //     return (int) $a+$b;
  // }
  
  // $int = AddFloatsReturnInt($float,1.5); // Returns 5
  
  // function Say(string $message): void // As in PHP 7.2
  // {
  //     echo $message;
  // }
  
  // Say('Hello, World!'); // Prints "Hello, World!"
  
  function ArrayToStdClass(array $array): stdClass
  {
      return (object) $array;
  }
  
  $object = ArrayToStdClass(['name' => 'azjezz','age' => 100]); // returns an stdClass
  
  function StdClassToArray(stdClass $object): array
  {
      return (array) $object;
  }
  
  $array = StdClassToArray($object); // Returns array
  
  function ArrayToObject(array $array): object // As of PHP 7.2
  {
      return new ArrayObject($array);
  }
  
  function ObjectToArray(ArrayObject $object): array
  {
      return $object->getArrayCopy();
  }
  
  var_dump( ObjectToArray( ArrayToObject( [1 => 'a' ] ) ) ); // array(1 => 'a');

?>