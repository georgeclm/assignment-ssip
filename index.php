<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment SSIP - PHP Filter</title>
</head>

<body>

    <?php
    $str = "<h1>Word Inside H1 Tag</h1>";
    // to clean html tag from the string
    echo filter_var($str, FILTER_SANITIZE_STRING);
    $int = '100';
    echo '<br/> ';
    // to filter if the variable is a number or 0
    echo (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false)
        ? "$int Integer is valid"
        : "$int Integer is not valid";

    $ip = "127.0.0.1";
    echo '<br/> ';
    // to filter a valid IP Address
    echo (!filter_var($ip, FILTER_VALIDATE_IP) === false) ? "$ip is a valid IP address" : "$ip is not a valid IP address ";
    echo '<br/> ';
    $email = "john.doe@example.com";
    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // to filter a valid email address
    echo (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        ? "$email is a valid email address"
        : "$email is not a valid email address";

    echo '<br/> ';

    $url = "https://web.epafroditusgeorge.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // to filter a valid url
    echo (!filter_var($url, FILTER_VALIDATE_URL) === false)
        ? "<a href=\"$url\" target=_blank> $url is a valid URL</a>"
        : "$url is not a valid URL";
    // And there is a lot more on PHP Filter Function in the documentation filter to validate, sanitaze and other in https://www.php.net/manual/en/filter.filters.php
    ?>
    <br><br>
    <a href="fileupload.php">
        <input type="submit" value="To PHP File Uploads" />
    </a>
</body>

</html>