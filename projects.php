<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>PROJECTS</title>
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
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            print "<a href='frinde.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>frindes</p></div></a>";
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
                <h2>projects</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <i class="fal fa-check"></i>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen dashboard</h6>
                                    <p class="my_color">momen dashboard project design and programming and hosting</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-05.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/10/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>marketing</p>
                                <p>hosting</p>
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: red; width: 80px;"></div>
                                </div>
                                <p class="my_color">$2500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">academy portal</h6>
                                    <p class="my_color">acadmey portal project design and programming</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 150px;"></div>
                                </div>
                                <p class="my_color">$1800</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">chatting application</h6>
                                    <p class="my_color">chatting application project design</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-05.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: blue; width: 185px;"></div>
                                </div>
                                <p class="my_color">$950</p>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen dashboard</h6>
                                    <p class="my_color">momen dashboard project design and programming and hosting</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>marketing</p>
                                <p>hosting</p>
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 130px;"></div>
                                </div>
                                <p class="my_color">$1700</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen dashboard</h6>
                                    <p class="my_color">momen dashboard project design and programming and hosting</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 140px;"></div>
                                </div>
                                <p class="my_color">$850</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen application</h6>
                                    <p class="my_color">momen application project design</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: red; width: 80px;"></div>
                                </div>
                                <p class="my_color">$950</p>
                            </div>
                        </div>
                    </div>
                    <!-- end main2 -->
                    <!-- start main3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen dashboard</h6>
                                    <p class="my_color">momen dashboard project design and programming and hosting</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>marketing</p>
                                <p>hosting</p>
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 130px;"></div>
                                </div>
                                <p class="my_color">$1950</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen portal</h6>
                                    <p class="my_color">momen portal project design and programming</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/10/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                                <p>programming</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 130px;"></div>
                                </div>
                                <p class="my_color">$1650</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hidth">
                            <div class="my_louk_between">
                                <div class="box_between">
                                    <h6 class="welcome">momen apllication</h6>
                                    <p class="my_color">momen apllication project design</p>
                                    <br>
                                    <img src="image5/team-01.png" alt="">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-03.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-02.png" alt="" style="margin-left: -25px;">
                                    <img src="image5/team-05.png" alt="" style="margin-left: -25px;">
                                </div>
                                <div class="">
                                    <p class="my_color">15/06/2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my_p3">
                                <p>design</p>
                            </div>
                            <hr>
                            <div class="my_box_between">
                                <div class="div_width">
                                    <div class="div_after" style="background-color: green; width: 185px;"></div>
                                </div>
                                <p class="my_color">$950</p>
                            </div>
                        </div>
                    </div>
                    <!-- end main3 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>