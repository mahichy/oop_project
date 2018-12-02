<?php

class paranClass
{
	public $eyeCount = 2;
	public $legCount = 2;
	public $age =21;

	public function bongSho()
	{
		return 'chowdhury bongsho';
	}
}

class childClass extends paranClass
{
	public $name = 'mahichowdhury';

}

$child = new childClass;

echo $child->bongsho();
echo '<br/>';
echo $child->eyeCount;
echo '<br/>';
echo $child->legCount;
echo '<br/>';
echo $child->age;
echo '<br/>';
echo $child->name;
echo '<br/>';






?>