<?php
class Book
{

    var $bookname;
var $author;

function setBookName($bookname)
{
    $this->bookname=$bookname;
}

function getBookName()
{
    return $this->bookname;
}
function setAuthor($author)
{
$this->author=$author;
}
function getAuthor()
{
    return $this->author;
}
}
    $kumudham=new Book();

$obj2=new Book();

$kumudham->setBookName("Kumudham");
$kannan=new Book();
$kannan->setAuthor("kannan");
$obj2->setBookName("Oliver Twist");
echo $kumudham->getBookName()."<br>";
echo $kannan->getAuthor()."<br>"; 
echo $obj2->getBookName();
?>