<?php
// 1. Write a simple PHP class which displays the following string. Go to the editor

// 'MyClass class has initialized !'
class newClass {
    public function __construct() 
    {
     echo 'MyClass class has initialized !'."<br>";
    }
   }
  $userclass = new newClass;
// 2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. Go to the editor 
class ms {
    public $ms = 'Hello All, I am ';
    public function introduce($name)
    {
     return $this->ms.$name;
    }
    }
   $myms = New ms();
   echo $myms->introduce('Scott')."<br>";

// 3. Write a PHP class that calculates the factorial of an integer. Go to the editor
class factNum
{
  protected $j;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->j = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->j; $i++)
	  {
        
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factNum(5);
echo $newfactorial->result();
echo "<br>";
// 4. Write a PHP class that sorts an ordered integer array with the help of sort() function. 
// Go to the editor
// Sample array : array(11, -2, 4, 35, 0, 8, -9)
// Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class arrSort
{
    protected $as;
    
    public function __construct(array $asort)
     {
        $this->as = $asort;
     }
    public function alhsort()
     {
        $sorted = $this->as;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new arrSort(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->alhsort());
echo "<br>";


// 5. Calculate the difference between two dates using PHP OOP approach. Go to the editor
// Sample Dates : 1981-11-03, 2013-09-04 
// Expected Result : Difference : 31 years, 10 months, 1 days 
$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
echo "<br>";
// 6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. Go to the editor
// For example :
// $mycalc = new MyCalculator( 12, 6); 
// echo $mycalc- > add(); // Displays 18 
// echo $mycalc- > multiply(); // Displays 72 
class MyCalculator {
    private $_fval, $_sval;
    public function __construct( $fval, $sval ) {
    $this->_fval = $fval;
    $this->_sval = $sval;
    }
    public function add() {
    return $this->_fval + $this->_sval;
    }
    public function subtract() {
    return $this->_fval - $this->_sval;
    }
    public function multiply() {
    return $this->_fval * $this->_sval;
    }
    public function divide() {
    return $this->_fval / $this->_sval;
    }
    }
    $mycalc = new MyCalculator(12, 6); 
    echo "calculate(12, 6)<br>";
    echo "add: ".$mycalc-> add()."<br>"; // Displays 18 
    echo "multiply: ".$mycalc-> multiply()."<br>"; // Displays 72
    echo "subtract: ".$mycalc-> subtract()."<br>"; // Displays 6
    echo "divide: ".$mycalc-> divide()."<br>"; // Displays 2
// 7. Write a PHP script to convert a string to Date and DateTime. Go to the editor
// Sample Date : '12-08-2004'
// Expected Output : 2004-12-08
// Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
echo "<br>";