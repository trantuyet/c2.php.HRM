<?php


class Employee
{
    protected $firstName;
    protected $lastName;
    protected $birthday;
    protected $address;
    protected $role;

    public function __construct($arr)
    {
        $this->firstName = $arr['firstName'];
        $this->lastName = $arr['lastName'];
        $this->birthday = $arr['birthday'];
        $this->address = $arr['address'];
        $this->role = $arr['role'];
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }
    public function getFullName()
        {
            return $this->firstName. " ".$this->lastName;
        }


    public function getRole()
    {
        return $this->role;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

}