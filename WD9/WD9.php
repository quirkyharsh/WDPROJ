<!DOCTYPE html>
<html>

<head>

    <title>PHP Welcome Page</title>

    <style>

        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
            background-color: lightgray;
        }

        .box {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            color: darkblue;
        }

        p {
            font-size: 18px;
        }

    </style>

</head>

<body>

    <div class="box">

        <h1>Welcome to PHP</h1>

        <?php

            date_default_timezone_set("Asia/Kolkata");

            echo "<p>Welcome User!</p>";

            echo "<p>Current Date: " . date("d-m-Y") . "</p>";

            echo "<p>Current Time: " . date("h:i:s A") . "</p>";

        ?>

    </div>

</body>

</html>