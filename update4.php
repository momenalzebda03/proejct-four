<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Tickets</title>
</head>

<body>
    <?php

    session_start();

    $data = new mysqli("localhost", "root", "", "sinup");

    $table = $data->query("select * from table_tickets");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["id"];
            $total = $row["total"];
            $pending = $row["pending"];
            $closed = $row["closed"];
            $deleted = $row["deleted"];
        }
    }

    if (isset($_POST["button"])) {

        $my_total = $_POST["total"];
        $my_pending = $_POST["pending"];
        $my_closed = $_POST["closed"];
        $my_deleted = $_POST["deleted"];

        $table = $data->query("UPDATE `table_tickets` SET `total`='$my_total',`pending`='$my_pending',`closed`='$my_closed',`deleted`='$my_deleted' WHERE id = 1");

        if ($table > 0) {
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";
        } else {
            print "يوجد خطا";
        }
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="id" value="<?php print $id ?>" readonly>
        <br>
        <br>
        <input type="text" name="total" value="<?php print $total ?>">
        <br>
        <br>
        <input type="text" name="pending" value="<?php print $pending ?>">
        <br>
        <br>
        <input type="text" name="closed" value="<?php print $closed ?>">
        <br>
        <br>
        <input type="text" name="deleted" value="<?php print $deleted ?>">
        <br>
        <br>
        <input type="submit" name="button">
    </form>
</body>

</html>