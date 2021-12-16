<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigmnet SSIP - Uploading File</title>
</head>

<body>


    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = false;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = true;
        } else {
            echo "File is not an image.";
            $uploadOk = false;
        }
    }


    echo '<br>';
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = false;
    }

    // Check if $uploadOk is set to 0 by an error
    if (!$uploadOk) {
        echo '<br>';
        echo "Sorry, your file was not uploaded.";
        echo '<br><br>
    <a href="fileupload.php">
        <input type="submit" value="Try Again" />
    </a>';
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $fileName = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
            echo "The file " . $fileName . " has been uploaded. ";
            echo '    <br><br>
            <a href="callback.php">
                <input type="submit" value="To PHP Callback" />
            </a> <br>';
            echo "<img src='uploads/$fileName'>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>

</body>

</html>