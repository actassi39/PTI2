<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujungberung</title>
    <!-- Link to your CSS/LESS files if needed -->
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <a href="<?php echo base_url(); ?>" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add margin -->
            Ujungberung
        </a>
        
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button -->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <!-- <span class="sr-only">Toggle navigation</span> -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- User toggle button -->
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?php echo $this->session->userdata('nama'); ?> <i class="caret"></i></span>
                        </a>
                        
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/avatar04.png" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo $this->session->userdata('nama'); ?>
                                    <small><?php echo $this->session->userdata('role'); ?></small>
                                </p>
                            </li>

                            <!-- Menu Footer -->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat" disabled>Profile Setting</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo site_url('home/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
