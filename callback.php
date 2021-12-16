<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigmnet SSIP - PHP Callback</title>
</head>

<body>
    <?php
    function check_length($item)
    {
        return strlen($item);
    }

    $strings = ["php", "framework", "laravel", "assignment"];
    // The array map just like js map loop for every item in string, first param is the function, second param is the array
    // In here the function on first param is using php callback to a function named 'check_length'.
    $lengths = array_map("check_length", $strings);
    // This will yield the same result by using anonymous function
    $lengths2 = array_map(function ($item) {
        return strlen($item);
    }, $strings);
    echo "This is with callback function<br><br>";
    foreach ($lengths as $key => $length) {
        echo "$key name is $strings[$key] and the length of the word is  $length <br>";
    }
    echo "<br>This below is using the anonyomous function<br><br>";
    foreach ($lengths2 as $key => $length) {
        echo "$key name is $strings[$key] and the length of the word is  $length <br>";
    }
    ?>
    <br><br>
    <a href="phpjson.php">
        <input type="submit" value="To PHP x JSON" />
    </a>
</body>

</html>