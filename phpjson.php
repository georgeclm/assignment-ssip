<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigmnet SSIP - PHP x JSON</title>
</head>

<body>
    <?php
    $myObj = new stdClass();
    $myObj->name = "George";
    $myObj->age = 19;
    $myObj->city = "Semarang";
    // the json encode will convert json object formatted to string I usually use this to store json data to database
    $myJSON = json_encode($myObj);
    echo $myJSON;
    echo "<br>";
    $myArr = array("John", "George", "Donn", "Budi");
    // this is encoding from an array of data
    $myTest = json_encode($myArr);

    echo $myTest;
    echo "<br>";

    $conn = new mysqli("localhost", "root", "", "myfinance-livewire");
    $stmt = $conn->prepare("SELECT name FROM users LIMIT 5");
    $stmt->execute();
    $result = $stmt->get_result();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    // use json encode to make the data to string from database
    echo json_encode($outp);
    $jsonobj = '{"John":25,"George":18,"Donn":20}';
    // use json decode to convert back json string to object
    $obj = json_decode($jsonobj);
    echo '<br>';
    foreach ($obj as $key => $object) {
        echo "$key is $object years old <br>";
    }
    ?>
    <br><br>
    <a href="exception.php">
        <input type="submit" value="To PHP Exception" />
    </a>
</body>

</html>