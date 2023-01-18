<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update password</title>
</head>

<body>
    <?php

    session_start();

    $my_id = $_GET["id2"];

    $data = new mysqli("localhost", "root", "", "sinup");

    $table = $data->query("select * from singup where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["id"];
            $my_pass = $row["password"];
            $my_pass = $row["password"];
        }
    }

    if (isset($_POST["btn"])) {

        $id1 = $_POST["louk_id"];
        $pass = $_POST["louk_name"];
        $pass = $_POST["louk_datee"];

        $table = $data->query("UPDATE `singup` SET `id`='$id1',`password`='$pass' WHERE id = $id1");

        if ($table > 0) {
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";
        } else {
            print "لم يتم التعديل";
        }
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="number" name="louk_id" value="<?php print $id ?>" readonly>
        <br>
        <br>
        <input type="text" name="louk_name" value="<?php print $my_pass ?>">
        <br>
        <br>
        <input type="text" name="louk_datee" value="<?php print $my_pass ?>">
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>