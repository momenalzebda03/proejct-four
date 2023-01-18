<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest news</title>
</head>

<body>
    <?php

    session_start();

    $data = new mysqli("localhost", "root", "", "sinup");

    if (isset($_POST["button"])) {

        $my_id = $_POST["id"];
        $my_stringg = $_POST["stringg"];
        $my_strig = $_POST["strig"];

        $table = $data->query("UPDATE `table_img` SET `stringg`='$my_stringg',`strig`='$my_strig' WHERE id = $my_id");

        if ($table > 0) {
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";
        } else {
            print "يوجد خطا";
        }
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="enter the number id">
        <br>
        <br>
        <input type="text" name="stringg" placeholder="enter string 1">
        <br>
        <br>
        <input type="text" name="strig" placeholder="enter string 2">
        <br>
        <br>
        <input type="submit" name="button">
    </form>
</body>

</html>