<?php
include('header.php');
//Start session
//session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        
                        
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to E-Learning Site.
                </div>
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Lorem Ipsum</strong></div>
                        <div class="hero-unit-2">
                            Announcements
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla aliquet porttitor lacus luctus. Elit scelerisque mauris pellentesque pulvinar pellentesque. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Pharetra magna ac placerat vestibulum lectus mauris ultrices. In fermentum et sollicitudin ac orci. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Nisi scelerisque eu ultrices vitae. Arcu ac tortor dignissim convallis aenean et tortor at risus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Et netus et malesuada fames ac turpis egestas maecenas. Enim eu turpis egestas pretium. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. Tincidunt vitae semper quis lectus nulla at volutpat diam. Ut lectus arcu bibendum at. Sed faucibus turpis in eu mi bibendum neque egestas. Blandit libero volutpat sed cras ornare.
                        </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Campuses

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Campus 1</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Campus 2</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Campus 3</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Campus 4</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br>
        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Lorem Ipsum</strong></div>
        <div class="hero-unit-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla aliquet porttitor lacus luctus. Elit scelerisque mauris pellentesque pulvinar pellentesque. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Pharetra magna ac placerat vestibulum lectus mauris ultrices. In fermentum et sollicitudin ac orci. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Nisi scelerisque eu ultrices vitae. Arcu ac tortor dignissim convallis aenean et tortor at risus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Et netus et malesuada fames ac turpis egestas maecenas. Enim eu turpis egestas pretium. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. Tincidunt vitae semper quis lectus nulla at volutpat diam. Ut lectus arcu bibendum at. Sed faucibus turpis in eu mi bibendum neque egestas. Blandit libero volutpat sed cras ornare.
        </div>

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


