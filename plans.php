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
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            print "<a href='frinde.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>frindes</p></div></a>";
            print "<a href='files.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-file icon'></i><p class='my_P'>files</p></div></a>";
            print "<a href='plans.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-plane icon'></i><p class='my_P'>plans</p></div></a>";
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
                        <div class="div_quick my_hithe">
                            <div class="div_box_color" style="background-color: #22C55E; outline: 4px solid #22C55E;">
                                <h4 class="welcome">free</h4>
                                <h5><span>$</span>0.00</h5>
                            </div>
                            <br>
                            <br>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all text lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all videos lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">appear on leaderboard</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">browse content without ads</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">access all assignemnts</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">get daily prizes</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">earn certifcate</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">1 GB space for hosting files</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">access badge system</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <br>
                            <button type="button" class="btn btn-success">join</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hithe">
                            <div class="div_box_color" style="background-color: #0075FF; outline: 4px solid #0075FF;">
                                <h4 class="welcome">basic</h4>
                                <h5><span>$</span>7.99</h5>
                            </div>
                            <br>
                            <br>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all text lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all videos lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">appear on leaderboard</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">browse content without ads</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all assignemnts</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">get daily prizes</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">earn certifcate</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">1 GB space for hosting files</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-times" style="color: red;"></i>
                                    <p style="margin-top: -5px;">access badge system</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary">join</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick my_hithe">
                            <div class="div_box_color" style="background-color: #F59E0B; outline: 4px solid #F59E0B;">
                                <h4 class="welcome">premium</h4>
                                <h5><span>$</span>19.99</h5>
                            </div>
                            <br>
                            <br>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all text lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all videos lessons</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">appear on leaderboard</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">browse content without ads</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access all assignemnts</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">get daily prizes</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">earn certifcate</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">1 GB space for hosting files</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="im_flex_between">
                                <div class="d-flex" style="gap: 5px;">
                                    <i class="fas fa-check" style="color: #22C55E;"></i>
                                    <p style="margin-top: -5px;">access badge system</p>
                                </div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <br>
                            <p class="my_color" style="text-align: center;">this is your current plan</p>
                        </div>
                    </div>
                    <!-- end main1 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>