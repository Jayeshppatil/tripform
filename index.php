<?php
$insert = false;
if(isset($_POST['name'])){
    //Set Connection Variables

    // $server = "localhost";
    // $username = "root";
    // $password = "";

    // remote database connection
    $host = "remotemysql.com";
    // $server = "localhost";
    $db = "v6Y2zMt1dX";
    $username = "v6Y2zMt1dX";
    $password = "5tSRTdbZrb";
    $charset = "utf8mb4";

    //Create a  database connection
    $con = mysqli_connect($host,$db,$username,$password,$charset);

    // Check for Connection success
    if(!$con){
        die("connection to this database failed due to" .mysqli_connect());
    }
    // echo "Succes connecting to the db";

    //Collect Post Variables 
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name',
    '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql)==true){
        // echo "Successfully inserted";

        // Flage for successfull insertion
        $insert = true;
    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the data base connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WellCome To travel Form</title>
    <link rel="stylesheet" href="style.css">
    </style>
</head>

<body>
    <img class="bg" src="ssbt.jpeg" alt="IIT Kharagpur">
    <div class="container">
        <h1>WellCome To IIT Kharagpur US trip Form</h1>
        <p>Enter your details and submit this form to confirm your participatin in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks for submitting your form . we are happy to see you joining us for the US trip</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Entaer your age">
            <input type="text" name="gender" id="gender" placeholder="Entaer your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="email" placeholder="Enter your phone number">
            <textarea name="desc" id="sesc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>

    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testName23',
    '23', 'male', 'thise@gmail.com', '12345678910', 'thise is my first php myAdmin massage', current_timestamp()); -->
</body>

</html>