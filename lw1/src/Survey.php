<?php
class Survey 
{
	private ?string $firstName; 
	private ?string $lastName;
	private string $email;
	private ?int $age;

	public function __construct(string $email, ?string $firstName, ?string $lastName, ?int $age)
	{
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->age = $age;			
	}
	
	public function getFirstName(): ?string
	{
 		return $this->firstName;
	}

	public function getLastName(): ?string
	{
 		return $this->lastName;
	}

	public function getEmail(): string
	{
 		return $this->email;
	}

	public function getAge(): ?int
	{
 		return $this->age;
	}	
}