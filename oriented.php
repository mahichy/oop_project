<?php

//object orinted programing

/*class 
object*/

class Person
{
	public $name = "mahi chowdhury";
	public $age = 21;

	public function myfullname()
	{
		return "this is my full name";
	}

	public function hello($name)
	{
		return "Hello," . $name;
	}

}

$ob1 = new Person;


echo $ob1->name."<br>"; 
echo $ob1->myfullname()."<br>"; 
echo $ob1->hello('mahi'); 


?>