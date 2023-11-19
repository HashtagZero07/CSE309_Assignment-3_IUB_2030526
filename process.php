<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $name= $_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];
        
        if(!empty($username) || !empty($email) || !empty($phone)||!empty($message)){

            $host='localhost';
            $dbUsername= 'root';
            $dbPassword= '';
            $dbname='customer_info';

            $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$phone' ,'$message')";

            if ($conn->query($sql) === TRUE) {
                echo "Form submitted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();



        }

        else{

            echo 'All Fields Are Needed';
            die();  

        }


    ?>




</body>


</body>
</html>