<?php

function crud($choice){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "user_account";

    $conn = new mysqli($servername, $username, $password, $db);

    //check connections
    if ($conn->connect_error){
        die("Connection Failed:" . $conn->connect_error);
    }

    switch($choice){

        case "1":
             
                $sql = "INSERT INTO accounts (username,password,email) VALUES('Kuya Fu','gwapo','kuyafugwapo@gmail.com')";

                if($conn->query($sql)){
                    echo "Inserted Successfully!";
                }else{
                    echo "Inserted Failed:".$conn->error;
                }
               
                break;

        case "2":
                  
               $sql = "SELECT * FROM 'accounts'";
               $result = $conn->query($sql);
            
               if( $result && $result->num_rows > 0){
                   
                   while($row = $result->fetch_assoc()){

                    echo $row['id']." ".$row['username']." ".$row['password']." ".$row['email']."<br";
                  
                    }

               }else{
                    echo "There is no record exists!";
               }
               
               break;
              
        case "3":
               
            $sql = "DELETE  FROM accounts WHERE id = 1 ";

            if($conn->query($sql)){
                echo "Deleted Successfully!";
            }else{
                echo "Deleted Failed:".$conn->error;
            }

            break;

        // case "4":

        //     $sql = "UPDATE * FROM 'accounts' WHERE id = '2' ";

        default: 
         echo "GAGU!";
      }

    }
    
    crud(rand(1,4));

?>
