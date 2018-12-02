<?php


class Test
{
	public function myName()
	{
		return "my name is mahi chowdhury";
	}

	public final function myAge()
	{
		return "i am 28";
	}
}


class Test2 extends Test
{
	public function myName()
	{
		return "mahi chowdhury";
	}

	
}

$ob = new Test2;

echo $ob->myName();
echo "<br/>";
echo $ob->myAge();
echo "<br/>";


//final if u use final key this will be fixed u cant overwrite this or use in differnt place 













?>