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

        if (empty($this->name) && $this->name == null) {
            echo("Your name is required!<br>");
        } 
        else {
            echo $this->name;
        }
        
        if (empty($this->address) && $this->address == null) {
            echo("Your address is required!<br>");
        } 
        else {
            echo $this->address;
        }
        
        if (empty($this->phonenumber) && $this->phonenumber == null) {
            echo("Your phonenumber is required!<br>");
        } 
        else {
            echo $this->phonenumber;
        }

        if (empty($this->age) && $this->age == null) {
            echo("Your age is required!");
        } 
        else {
            echo $this->age;
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