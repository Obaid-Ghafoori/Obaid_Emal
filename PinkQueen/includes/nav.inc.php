<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php" id="logo">
            <div class="logo_container">
                <h1>Pink<span>Queen</span></h1>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../html/" id="navbarAboutUsMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarAboutUsMenuLink">
                        <a class="dropdown-item" href="aboutus.php">About us</a>
                        <a class="dropdown-item" href="faq.php">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../html/" id="navbarServicesMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarServicesMenuLink">
                        <a class="dropdown-item" href="hairstyle.php">Hairstyling</a>
                        <a class="dropdown-item" href="makeup.php">Makeup</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacts</a>
                </li>
                <?php if ($_SESSION["user_is_logged_in"] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="appointment.php">Make an appointment</a>
                    </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">

                    <?php if ($_SESSION["user_is_logged_in"] == 1) { ?>

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] ?>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="includes/auth/logout.php">Logout</a>
                        </div>

                    <?php } else { ?>

                    <a class="nav-link" data-toggle="modal" data-target="#signInModal">
                        Log in
                    </a>

                    <?php } ?>
                </li>

                
            </ul>
        </div>
    </nav>