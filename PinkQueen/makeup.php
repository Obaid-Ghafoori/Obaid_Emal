<!DOCTYPE html>
<html>
<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="wrapper">
        <h3 class="display-3 text-center">Makeup</h3>
        <section class="Main-image-content">
            <hr> <img class="img-main" src="assets/images/11.jpeg" alt="Makeup" width="80%" class="responsive">
            <br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus doloremque
                quidem mollitia perferendis molestias quia reprehenderit porro voluptatum, nisi vero eaque.
            </p>
        </section>
        <div class="heading-featured">
            <h3> Featured Looks</h3> <br>
        </div>
        <section class="Featured-container">
            <div class="box1">
                <img class="img-featured" src="assets/images/12.jpeg" alt="Makeup" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/13.jpeg" alt="Makeup" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/14.jpg" alt="Makeup" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/15.jpeg" alt="Makeup" class="responsive">
            </div>
        </section>
    </div>
    <br>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>