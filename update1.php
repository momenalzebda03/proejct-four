<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update table</title>
</head>

<body>
    <?php

    session_start();

    $my_id = $_GET["my_id1"];

    $data = new mysqli("localhost", "root", "", "sinup");

    $table = $data->query("select * from table_projects where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["id"];
            $my_name = $row["name"];
            $my_datee = $row["datee"];
            $my_Client = $row["Client"];
            $my_Price = $row["Price"];
        }
    }

    if (isset($_POST["btn"])) {

        $id1 = $_POST["louk_id"];
        $name1 = $_POST["louk_name"];
        $datee1 = $_POST["louk_datee"];
        $Client1 = $_POST["louk_Client"];
        $Price1 = $_POST["louk_Price"];
        $image1 = basename($_FILES["my_image1"]["name"]);
        $image2 = basename($_FILES["my_image2"]["name"]);
        $image3 = basename($_FILES["my_image3"]["name"]);
        $image4 = basename($_FILES["my_image4"]["name"]);

        $table = $data->query("UPDATE `table_projects` SET `id`='$id1',`name`='$name1',`datee`='$datee1',`Client`='$Client1',`Price`='$Price1',`Team`='$image1',`image_one`='$image2',`image_tow`='$image3',`image_three`='$image4' WHERE id = $id1");

        if ($table > 0) {
            print "<a href='dashboard.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";        
        } else {
            print "لم يتم التعديل";
        }
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="number" name="louk_id" value="<?php print $id ?>" readonly>
        <br>
        <br>
        <input type="text" name="louk_name" value="<?php print $my_name ?>">
        <br>
        <br>
        <input type="text" name="louk_datee" value="<?php print $my_datee ?>">
        <br>
        <br>
        <input type="text" name="louk_Client" value="<?php print $my_Client ?>">
        <br>
        <br>
        <input type="text" name="louk_Price" value="<?php print $my_Price ?>">
        <br>
        <br>
        <input type="file" name="my_image1">
        <br>
        <br>
        <input type="file" name="my_image2">
        <br>
        <br>
        <input type="file" name="my_image3">
        <br>
        <br>
        <input type="file" name="my_image4">
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>