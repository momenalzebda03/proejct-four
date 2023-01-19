<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>PROFILE</title>
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
            print "<a href='profile.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-user icon'></i><p class='my_P'>profile</p></div></a>";
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            ?>
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
                <h2>profile</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <i class="fal fa-check"></i>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 div_col">
                        <div class="div_box">
                            <div class="yesthe_flex">
                                <div class="div_myimage">
                                    <?php

                                    $louk_id = $_GET["louk_session"];

                                    $data = new mysqli("localhost", "root", "", "sinup");

                                    $table = $data->query("select * from singup where id = $louk_id");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<img src='image5/" . $row["image"] . "'>";
                                        }
                                    }
                                    ?>
                                    <br>
                                    <br>
                                    <?php

                                    $louk_id = $_GET["louk_session"];

                                    $data = new mysqli("localhost", "root", "", "sinup");

                                    $table = $data->query("select * from singup where id = $louk_id");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h5 class='welcome'>" . $row["name"] . "</h5>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">level 20</p>
                                    <div class="my_before"></div>
                                    <br>
                                    <div class="div_icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <br>
                                    <p class="my_color">550 rating</p>
                                </div>
                                <div class="div_Organization">
                                    <div class="the_flex">
                                        <div class="my_flex1">
                                            <p class="my_color">general information</p>
                                            <p class="my_color">full name
                                                <?php

                                                $louk_id = $_GET["louk_session"];

                                                $data = new mysqli("localhost", "root", "", "sinup");

                                                $table = $data->query("select * from singup where id = $louk_id");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<span class='welcome'>" . $row["name"] . "</span>";
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">gender:<span class="welcome">male</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">country:<span class="welcome">Palestine</span></p>
                                        </div>
                                        <div class="my_size">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-left: 50px;">
                                    <div class="the_flex">
                                        <div class="my_flex1">
                                            <p class="my_color">personal information</p>
                                            <p class="my_color">email:<span class="welcome">o@nn.sa</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">phone:<span class="welcome">01919123456789</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">date of birth:<span class="welcome">13/3/2003</span></p>
                                        </div>
                                        <div class="my_size">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-left: 50px;">
                                    <div class="the_flex">
                                        <div class="my_flex1">
                                            <p class="my_color">jop information</p>
                                            <p class="my_color">title:<span class="welcome">full stack developer</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">programming language:<span class="welcome">php</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">years of experience:<span class="welcome">15+</span></p>
                                        </div>
                                        <div class="my_size">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-left: 50px;">
                                    <div class="the_flex">
                                        <div class="my_flex1">
                                            <p class="my_color">billing information</p>
                                            <p class="my_color">payment method:<span class="welcome">paypal</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">email:<span class="welcome">email@website.com</span></p>
                                        </div>
                                        <div class="my_top">
                                            <p class="my_color">subscription:<span class="welcome">monthly</span></p>
                                        </div>
                                        <div class="my_size">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-12 col-lg-4 div_col">
                        <div class="div_quick my_hint">
                            <h4 class="welcome">my skills</h4>
                            <br>
                            <div class="div_flex div_hint">
                                <p class="my_cours">HTML</p>
                                <p class="my_cours">PUGJS</p>
                                <p class="my_cours">HTML</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">CSS</p>
                                <p class="my_cours">SASS</p>
                                <p class="my_cours">STYLUS</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">javascript</p>
                                <p class="my_cours">typescript</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">vuejs</p>
                                <p class="my_cours">reactjs</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">jest</p>
                                <p class="my_cours">jasmine</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">php</p>
                                <p class="my_cours">laravel</p>
                            </div>
                            <div class="div_flex div_hint">
                                <p class="my_cours">python</p>
                                <p class="my_cours">django</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8 div_col">
                        <div class="div_top my_hint">
                            <h4 class="welcome">latest activities</h4>
                            <p class="my_color">latest activities done by the user</p>
                            <div class="here_image">
                                <div class="div_flex">
                                    <div class="div_flex_image">
                                        <img src="image5/activity-01.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="welcome">store</p>
                                        <p class="my_color" style="width: 250px;">bought the mastering php course</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="my_back">18:10</p>
                                    <p class="my_color">yesterday</p>
                                </div>
                            </div>
                            <div class="here_image">
                                <div class="div_flex">
                                    <div class="div_flex_image">
                                        <img src="image5/activity-02.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="welcome">acadmey</p>
                                        <p class="my_color" style="width: 250px;">Al-Azhar University</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="my_back">16:05</p>
                                    <p class="my_color">yesterday</p>
                                </div>
                            </div>
                            <div class="here_image">
                                <div class="div_flex">
                                    <div class="div_flex_image">
                                        <img src="image5/activity-03.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="welcome">badges</p>
                                        <p class="my_color" style="width: 250px;">unlocked the 10 skills badge</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="my_back">18:05</p>
                                    <p class="my_color">yesterday</p>
                                </div>
                            </div>
                            <div class="here_image">
                                <div class="div_flex">
                                    <div class="div_flex_image">
                                        <img src="image5/activity-01.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="welcome">store</p>
                                        <p class="my_color" style="width: 250px;">bought the mastering php course</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="my_back">12:05</p>
                                    <p class="my_color">yesterday</p>
                                </div>
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