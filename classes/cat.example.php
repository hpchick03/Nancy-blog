<?php
class Cat
{
	private $lives = 7;

	public function kill()
	{
		echo '['.$this->lives.'] ';
		$this->lives = $this->lives - 1;
		if($this->lives > 0)
		{
			echo 'Kitty now has ' . $this->lives . ' lives!<br>';
		} 
		else 
		{
			if($this->lives < 0)
			{
				echo '<br>You over killed the kitty!';
			} 
			else 
			{
				echo 'Oh no the kitty is dead!';
			}
		}
	}
}

$c = new Cat();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
$c->kill();
?>