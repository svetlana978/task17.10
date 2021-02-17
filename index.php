<?php

class Family
{
  public $peopleCount = 3;
  public $surname = 'Smith';
  public $address = 'Moscow';

  public function loveFamilyMembers()
  {
    //...
  }
}

class Father extends Family
{
  public $wife = 'Alice';
  public $age = 35;
  
  public function careForChildren()
  {
    //...
  }

  public function earnMoney()
  {
    //...
  }
}

class Mother extends Family
{
  public $husband = 'John';
  public $age = 33;
  
  public function careForChildren()
  {
    //...
  }

  public function provideComfort()
  {
    //...
  }
}

class Child extends Family
{
  public $sex = 'male';
  public $age = 11;
  
  public function study()
  {
    //...
  }

  public function helpParents()
  {
    //...
  }  
}

?>