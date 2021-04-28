<?php

class validation {

    public $name, $address, $phonenumber, $age;
    // public $errorName = '', $errorAddress = '', $errorPhone = '',$errorAge = '';

    function __constructor($name, $address, $phonenumber, $age){

        $this->name = $name;
        $this->address = $address;
        $this->phonenumber = $phonenumber;
        $this->age = $age;

    }

    function check(){

        // if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(empty($this->name)){
                return 'Your name is required!';
                // return $this->errorName = 'Your name is required!';
            } else {
                return $this->errorName = 'Input Name is okay!';
            }

            if(empty($this->address)){
                return $this->errorAddress = 'Address is required!';
            } else {
                return$this->errorAddress = 'Input address is okay!';
            }

            if(empty($this->phonenumber)){
                return $this->errorPhone = 'Your phonenumber is required!';
            } else {
                return $this->errorPhone= 'Input phone number is okay!';
            }
            
            if(empty($this->age)){
                return $this->errorAge = 'Your age is required!';
            } else {
                return $this->errorAge= 'Input Age is okay!';
            }

        }

    // }
}
if(isset($_POST['submit'])){
    
    $obj = new validation($_POST['name'], $_POST['address'], $_POST['phonenumber'], $_POST['age']);
    echo $obj->check();

    // $errorN = $obj->errorName;
    // $errorA = $obj->errorAddress;
    // $errorP = $obj->errorPhone;
    // $errorAg = $obj->errorAge;
}



 ?>

  <!DOCTYPE html>
  <html lang = "en-US" dir = "ltr">
   <head>
    <title>Home</title>
    <meta charset = "UTF-8"/>
   </head>
   <body>

   <form method = "POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label>Name: </label>
        <input type = "text" name = "name" placeholder = "Your name ...."/>
        <!-- <p class = "error"><?php echo $errorN;?></p> -->

        <label>Address: </label>
        <input type = "text" name = "address" placeholder = "Your address ...."/>
        <!-- <p class = "error"><?php echo $errorA;?></p> -->

        <label>Phonenumber: </label>
        <input type = "text" name = "phonenumber" placeholder = "Your phonenumber .... "/>
        <!-- <p class = "error"><?php echo $errorP;?></p> -->

        <label>Age: </label>
        <input type = "text" name = "age" placeholder = "Your Age ...."/>
        <!-- <p class = "error"><?php echo $errorAg;?></p> -->

        <input type="button" name="submit" value="submit">
   </form>

  </body>
 </html>