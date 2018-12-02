<?php

//access modifier

/*class Test
{
	public $x = 100;
	private $y = 200;
	protected $z = 300;


	private function getY()
	{
		return $this->y;
	}


	public function gettt()
	{
		return $this->getY();
	}
}


class childClass extends Test 
{
	public function getZ()
	{
		return $this->z;
	}
}



$ob = new childClass;



echo $ob->getZ();*/



/*public ---- access from anywher.
private ---only access from own class.
protected --access from own class and subclass.*/


class Test


{
	public $x = 100;
	private $y = 200;
	protected $z = 300;


	private function getY()
	{
		return $this->y;
	}

	public function gettt()
	{
		return $this->getY();
	}
}


class Child extends Test
{
	public function getZ()
	{
		return $this->z;
	}
}

$ob = new Child;

echo $ob->x;
echo '<br/>';

echo $ob->gettt();
echo '<br/>';

echo $ob->getZ();

















?>