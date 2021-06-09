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
    <img class="bg" src="ssbt.jpeg" alt="IIT SSBT">
    <div class="container">
        <h1>WellCome To SSBT US trip Form</h1>
        <p>Enter your details and submit this form to confirm your participatin in the trip</p>
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
</body>

</html>