<?php
 
 class userInput{
 
    public $userInput;

    function __construct($userInput){
         $this->userInput = $userInput;
    }

    function addInput(){
        // echo $this->userInput;
        echo '<select name="dropdown">
                  <option value="'.$this->userInput.'">"'.$this->userInput.'"</option>
              </select>';
              
    }

 }

 
if(isset($_POST['submit'])){
    $userInput = $_POST['userInput'];
    $input = new userInput($userInput);
    $input->addInput();
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
        <h4>Enter Anything :</h4>
        <input type="text" name="userInput">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    

</body>
</html>