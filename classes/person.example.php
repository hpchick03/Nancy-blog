<?php
class Person
{
	private $name;
	private $age;
	public static $breath = 'oxygen';

	public function setName($myName)
	{
		$this->name = $myName;
	}

	public function setAge($myAge)
	{
		$this->age = $myAge;
	}

	public function sayHello()
	{
		echo 'Hello my name is ' . $this->getName() . ' and I am ' . $this->age . ' years old!';
	}

	public function getName()
	{
		return '<a href="user.php?name='.$this->name.'">' . $this->name . '</a>';
	}

	public function sayHelloTo($other_person)
	{
		echo 'Hello ' . $other_person->getName() . ', nice to meet you! ';
		echo 'I am ' . $this->getName() . '.';
	}

	public function whatDoYouBreath()
	{
		echo $this->getName() . ' - I breath ' . self::$breath . '!';
	}
}

Person::$breath = $_GET['air'];

$a = new Person();
$a->setName('Nancy');
$a->setAge(28);
$a->sayHello();
echo "<br>";
echo $a->whatDoYouBreath();

echo "<br>";

$b = new Person();
$b->setName('Alan');
$b->setAge(35);
$b->sayHello();
echo "<br>";
echo $b->whatDoYouBreath();

echo "<br>";

$c = new Person();
$c->setName('Bob');
$c->setAge(55);
$c->sayHello();
echo "<br>";
echo $c->whatDoYouBreath();

echo "<br>";

$a->sayHelloTo($b);
echo "<br>";
$b->sayHelloTo($a);
echo "<br>";
$c->sayHelloTo($b);

echo "<br><br>";




$query = 'Hello ';
$query = $query . 'world';
?>