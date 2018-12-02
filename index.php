<?php

class Student
{
	public $name;
	public $age;
	public $cgpa;


//getter
	public function getName()
	{
		return$this->name;
	}
	public function getAge()
	{
		return$this->age;
	}
	public function GetCgpa()
	{
		return$this->cgpa;
	}




//setter

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setCgpa($cgpa)
	{
		$this->cgpa = $cgpa; 
	}


	}

	//setter method

		$student1 = new Student;

		$student1->setName("Mahi chowdhury"); 
		$student1->setAge(21); 
		$student1->setCgpa(3.14); 

	//getter method

	echo $student1->getName();
	echo "<br/>";
	echo $student1->getAge();
	echo "<br/>";
	echo $student1->getCgpa();
	echo "<br/>";	







?>