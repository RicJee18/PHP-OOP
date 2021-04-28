<?php

class Validate{
    public $email;

    function __construct($email){
       $this->email = $email;
    }
    
    function check(){

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo("$this->email is a valid email address");
        } 
        else {
            echo("$this->email is not a valid email address");
        }
    }
}


if(isset($_POST['submit'])){
    $userInput = $_POST['email'];
    $input = new Validate($userInput);
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
        <h4>Enter your email :</h4>
        <input type="text" name="email">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>