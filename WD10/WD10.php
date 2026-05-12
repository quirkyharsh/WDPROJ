<!DOCTYPE html>
<html>

<head>
    <title>PHP String Functions</title>
</head>

<body>

    <h2>PHP String Functions</h2>

    <form method="post">

        Enter String:
        <input type="text" name="str">

        <input type="submit" value="Submit">

    </form>

    <?php

    if (isset($_POST['str'])) {

        $str = $_POST['str'];

        echo "<h3>Results</h3>";

        echo "Original String: " . $str . "<br><br>";

        echo "String Length: " . strlen($str) . "<br><br>";

        echo "Reverse String: " . strrev($str) . "<br><br>";

        echo "Substring: " . substr($str, 0, 5);
    }

    ?>

</body>

</html>