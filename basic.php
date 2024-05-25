<?php 
echo "Hi there, it's me who know nothing but still trying and succussed at last attempt:" . "<br>";
echo "Here I just do Pre-incretment" ."<br>";
$x=45;
$y=14;
$z=++$x+$y;
echo "The Pre-incretment is " ."<br>" .$z  ."<br>";
echo "Applying Switch Statement" ."<br>";
$order =2;
switch ($order){
case 1:
    echo "U order juice" ;
	break;
case 2: echo "U order Coffee" ."<br>";
	break;
case 3: echo "U order Mint-falover Cake";
	break;
deafult: echo "U order nothing:" ;
	break;
}
echo "Trying some code from w3schools.in:" ."<br>";
function itswork(){
echo "copy code to work see what happed" ."<br>";
}
$test ="itswork" ;
$test() ;
echo "finally successed" ."<br>";
define ("CHECK","Here i use define function it's just a test is it work or not :)",false);
echo CHECK ."<br>";
$name ="Asad";
$num="79";
echo $name .$num."<br>";
echo "<p>";
echo $name ."  " .$num;
echo "</p>";
echo "Trying to print my name with a $num on screen:" ."<br>";

$var =1;

echo $var ++ ."<br>";
echo $var ."<br>" ;
echo ++$var ."<br>";
echo "Reference link with & sign" ."<br>";
$a=5;
$b=&$a;
$b=7;
echo $a ."<br>";
echo "To improve conditional statement ternary opeartor: " ."<br>";
$var=8;
echo ($var<=9) ? "passed" ."<br>" :"fail"  ."<br>";
echo "Usign concatenatin assiment operator join my name :)" ."<br>";
$n="Muhammad Asad";
$n .=" Raza";
echo $n ."<br>";
echo "If statement: " ."<br>" ;
$date=date ("01-10");
if ($date=="01-10")
{ echo "Wishing me birthday:)" ."<br>";
}
else {	echo "My birthday is 05-09" ."<br>";
	};
echo "Looping structure apply foreach" ."<br>";
$names = array("Muhammad","Asad","Raza");

foreach($names as $name){
   echo $name."<br>";}
echo "While loop" ."<br>" ;
$i=1;
$num=0;
while($i<=5){
echo "This loop run by pre-increment :" .$num ."<br>";
$i++;
$num++;
}
echo "Do while loop:" ."<br>";
$i=0;
do{ $i++;
	echo "do loop run at least one time or until condition is wrong $i" ."<br>";}
while ($i<=5);


?>

