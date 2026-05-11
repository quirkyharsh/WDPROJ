<!DOCTYPE html>
<html>

<head>

    <title>PHP String Functions</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightgray;
            text-align: center;
            margin-top: 80px;
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

        <h1>PHP String Manipulation</h1>

        <?php

            $str = "Welcome to PHP Programming";

            echo "<p><b>Original String:</b> " . $str . "</p>";

            // String Length
            echo "<p><b>String Length:</b> " . strlen($str) . "</p>";

            // Reverse String
            echo "<p><b>Reverse String:</b> " . strrev($str) . "</p>";

            // Substring
            echo "<p><b>Substring:</b> " . substr($str, 11, 3) . "</p>";

        ?>

    </div>

</body>

</html>