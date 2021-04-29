<?php

class Validate{

    public $name;
    public $address;
    public $phonenumber;
    public $age;

    function __construct($name,$address,$phonenumber,$age){
       $this->name = $name;
       $this->address = $address;
       $this->phonenumber = $phonenumber;
       $this->age = $age;

    }
    
    function check(){
        
        if( empty($this->name) || empty($this->address) || empty($this->phonenumber)  || empty($this->age)){
            echo "Please fill out forms!";
        }
        else
        {
            echo "Name: ".$this->name."<br>";
            echo "Address: ".$this->address."<br>";
            echo "Phonenumber: ".$this->phonenumber."<br>";
            echo "Age: ".$this->age;
        }

    }
}


if(isset($_POST['submit'])){

    $userInput = $_POST['name'];
    $address = $_POST['address'];
    $pn = $_POST['phonenumber'];
    $ages = $_POST['age'];

    $input = new Validate($userInput, $address, $pn, $ages);
    $input->check();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <h4>Enter your name :</h4>
        <input type="text" name="name">
        <br>
        <h4>Enter your address :</h4>
        <input type="text" name="address">
        <br>
        <h4>Enter your phonenumber :</h4>
        <input type="text" name="phonenumber">
        <br>
        <h4>Enter your age :</h4>
        <input type="text" name="age">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>