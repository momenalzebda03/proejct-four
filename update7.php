<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update frind</title>
</head>

<body>
    <?php

    session_start();

    $my_id = $_GET["id5"];

    $data = new mysqli("localhost", "root", "", "sinup");

    $table = $data->query("select * from table_frind where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $jop = $row["jop"];
        }
    }

    if (isset($_POST["btn"])) {

        $my_id = $_POST["here_id"];
        $my_image = basename($_FILES["image"]["name"]);
        $my_name = $_POST["name"];
        $my_jop = $_POST["jop"];

        $table = $data->query("UPDATE `table_frind` SET `id`='$my_id',`image`='$my_image',`name`='$my_name',`jop`='$my_jop' WHERE id = $my_id");

        if ($table > 0) {
            print "<a href='frinde.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";
        } else {
            print "يوجد خطا";
        }
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="number" value="<?php print $id ?>" readonly name="here_id">
        <br>
        <br>
        <input type="file" name="image">
        <br>
        <br>
        <input type="text" value="<?php print $name ?>" name="name">
        <br>
        <br>
        <input type="text" value="<?php print $jop ?>" name="jop">
        <br>
        <br>
        <input type="submit" name="btn">
        <br>
        <br>
    </form>
</body>

</html>