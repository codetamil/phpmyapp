<?php
class Employee
{

 var $id;
 var $name;
 var $email;

public function setId($id)
{
    $this->id=$id;
}
public function setName($n)
{
    $this->name=$n;
}
public function setEmail($email)
{
    $this->email=$email;
}
public function getId()
{
    return $this->id;
}
public function getEmail()
{
    return $this->email;
}
public function getName()
{
    return $this->name;
}


}


?>