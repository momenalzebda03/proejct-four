<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>settigns</title>
</head>

<body>
    <!-- stast header -->
    <div class="div_flex">
        <div class="div_left">
            <?php

            session_start();

            $louk_id = $_GET["louk_session"];

            $data = new mysqli("localhost", "root", "", "sinup");

            $table = $data->query("select * from singup where id = $louk_id");

            if ($table->num_rows > 0) {
                while ($row = $table->fetch_assoc()) {
                    print "<p class='my_name'>" . $row["name"] . "</p>";
                }
            }
            ?>
            <br>
            <?php
            print "<a href='dashboard.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-chart-line icon'></i> <p class='my_P'>dashboard</p></div></a>";
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-gear icon'></i><p class='my_P'>settings</p></div></a>";
            ?>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-user icon"></i>
                    <p class="my_P">profile</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fas fa-project-diagram icon"></i>
                    <p class="my_P">projects</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-graduation-cap icon"></i>
                    <p class="my_P">courses</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-user icon"></i>
                    <p class="my_P">frindes</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fas fa-file icon"></i>
                    <p class="my_P">files</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-plane icon"></i>
                    <p class="my_P">plans</p>
                </div>
            </a>
        </div>
        <div class="div_right">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div class="div_flex">
                                <form action="" method="">
                                    <i class="fa-solid fa-magnifying-glass icon"></i>
                                    <input type="text" placeholder="type a keyword">
                                </form>
                            </div>
                        </ul>
                        <div class="d-flex">
                            <i class="fa-solid fa-bell pt-2 icon"></i>
                            <img src="image5/avatar.png" alt="">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end header -->
            <!-- start main -->
            <div class="div_main1">
                <h2>dashboard</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <h5 class="welcome">site control</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        hello
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        hello
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        hello
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        hello
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        hello
                    </div>
                    <!-- end main2 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>