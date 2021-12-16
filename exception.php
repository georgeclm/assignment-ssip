<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigmnet SSIP - PHP Exception</title>
</head>

<body>
    <?php
    function divide($dividend, $divisor)
    {
        if ($divisor == 0) {
            // this exception will not be thrown becase it is inside the try statement it will go to catch
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $e) {
        // this is exception object that we can take
        $code = $e->getCode();
        $message = $e->getMessage();
        $file = $e->getFile();
        $line = $e->getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message";
    } finally {
        // will always get executed
        echo "<br>Division is done";
        echo "<br>That is all for the assignment THX";
        echo "<br>Epafroditus George Student ID:001202000080";
    }
    ?>

</body>

</html>