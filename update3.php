<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Yearly</title>
</head>

<body>
    <?php

    session_start();

    $data = new mysqli("localhost", "root", "", "sinup");

    $table = $data->query("select * from table_number");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["primarykey"];
            $money = $row["money"];
            $project = $row["project"];
            $team = $row["team"];
        }
    }

    if (isset($_POST["button"])) {

        $my_money = $_POST["money"];
        $my_project = $_POST["project"];
        $my_team = $_POST["team"];

        $table = $data->query("UPDATE `table_number` SET `money`='$my_money',`project`='$my_project',`team`='$my_team' WHERE primarykey = 1");

        if ($table > 0) {
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'>الرجوع</a>";
        } else {
            print "يوجد خطا";
        }
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="money" value="<?php print $id ?>" readonly>
        <br>
        <br>
        <input type="text" name="money" value="<?php print $money ?>">
        <br>
        <br>
        <input type="text" name="project" value="<?php print $project ?>">
        <br>
        <br>
        <input type="text" name="team" value="<?php print $team ?>">
        <br>
        <br>
        <input type="submit" name="button">
    </form>
</body>

</html>