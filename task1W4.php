<?php
echo "Multiple inheritance is the process where a subclass can be derived from more than one super-class.\n";
echo "Its advantage is that a class can inherit the functionality of more than one base class,but its disadvantage is that it can lead to a lot of confusion whentwo base classes implement a method with the same name.\n\n";
trait index1
{
	public function t1()
	{
		echo "I'm from Cambodia";
	}
}
trait index2
{
	public function t2()
	{
		echo "and You?";
	}
}
class Test
{
	use index1;
	use index2;
	public function index1_2()
	{
		echo "\nI'm from Cambodia and You?";
	}
}
$test = new Test();
$test->t1();
$test->t2();
$test->index1_2();
