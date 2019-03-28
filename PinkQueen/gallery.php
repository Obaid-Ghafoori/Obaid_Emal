<!DOCTYPE html>
<html>
<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="container">
        <h3 class="display-3 text-center">Gallery</h3>
        <hr>
        <a class="lightbox" href="#main">
            <img id="head-img" class="mx-auto d-block" src="assets/images/fslide.jpg">
        </a>
        <br>
        <div class="row">
            <div class="col">
                <a class="lightbox" href="#pic1">
                    <img id="ppic1" class="img-fluid" src="assets/images/fslide.jpg">
                </a>
            </div>
            <div class="col">
                <a class="lightbox" href="#pic2">
                    <img id="ppic2" class="img-fluid" src="assets/images/fslide.jpg">
                </a>
            </div>
            <div class="col">
                <a class="lightbox" href="#pic3">
                    <img id="ppic3" class="img-fluid" src="assets/images/fslide.jpg">
                </a>
            </div>
        </div>
    </div>
    <div class="lightbox-target" id="main">
        <img src="assets/images/fslide.jpg" />
        <a class="lightbox-close" href="#head-img"></a>
    </div>
    <div class="lightbox-target" id="pic1">
        <img src="assets/images/fslide.jpg" />
        <a class="lightbox-close" href="#ppic1"></a>
    </div>
    <div class="lightbox-target" id="pic2">
        <img src="assets/images/fslide.jpg" />
        <a class="lightbox-close" href="#ppic2"></a>
    </div>
    <div class="lightbox-target" id="pic3">
        <img src="assets/images/fslide.jpg" />
        <a class="lightbox-close" href="#ppic3"></a>
    </div>
    <br>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>