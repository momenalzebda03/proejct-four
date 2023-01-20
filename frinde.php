<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>FRINDES</title>
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
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-gear icon'></i><p class='my_P'>settings</p></div></a>";
            print "<a href='profile.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>profile</p></div></a>";
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            print "<a href='frinde.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-user icon'></i><p class='my_P'>frindes</p></div></a>";
            print "<a href='files.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-file icon'></i><p class='my_P'>files</p></div></a>";
            print "<a href='plans.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-plane icon'></i><p class='my_P'>plans</p></div></a>";
            ?>
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
                <h2>frindes</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <i class="fal fa-check"></i>
            <div class="container">
                <div class="row div_flex_here">
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php

                                $data = new mysqli("localhost", "root", "", "sinup");

                                $table = $data->query("select * from table_frind where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 1");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>99 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>15 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>25 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 1");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 2");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>30 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>11 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>12 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 2");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 3");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>80 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>20 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 3");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 4");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 4");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>70 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>30 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 4");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 5");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 5");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>80 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>30 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 5");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 6");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 6");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>70 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>30 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 6");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 7");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 7");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>30 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>11 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>12 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 7");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 8");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 8");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>80 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>30 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 8");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 9");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 9");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>90 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>15 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>25 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 9");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <div class="im_flex">
                                <i class="fas fa-phone icon"></i>
                                <i class="fas fa-envelope icon"></i>
                            </div>
                            <div class="div_center">
                                <?php
                                $table = $data->query("select * from table_frind where id = 10");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image5/" . $row["image"] . "'>";
                                    }
                                }
                                ?>
                                <div class="div_button">
                                    <?php
                                    $table = $data->query("select * from table_frind where id = 10");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["name"] . "</h6>";
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_flex">
                                <i class="far fa-grin-tongue icon"></i>
                                <p>80 friend</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-project-diagram icon"></i>
                                <p>20 projects</p>
                            </div>
                            <div class="div_flex">
                                <i class="fas fa-newspaper icon"></i>
                                <p>18 articles</p>
                            </div>
                            <hr>
                            <div class="im_between">
                                <div class="">
                                    <p class="my_color">joined 02/10/2021</p>
                                </div>
                                <div class="im_button">
                                    <?php

                                    $table = $data->query("select * from table_frind where id = 10");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update7.php?id5=" . $row["id"] . "' style='background-color: blue;'>update</a>";
                                        }
                                    }
                                    ?>
                                    <a href="#" style="background-color: red;">remove</a>
                                </div>
                            </div>
                        </div>
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