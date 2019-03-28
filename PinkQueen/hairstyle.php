<!DOCTYPE html>
<html>

<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="wrapper">
        <div class="content-header">
            <h3 class="display-3 text-center">Hairstyle</h3>
        </div>
        <section class="Main-image-content">
            <hr>
            <img class="img-main" src="assets/images/1.png" alt="Hairstyle" width="80%" class="responsive">
            <br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus doloremque
                quidem mollitia perferendis molestias quia reprehenderit porro voluptatum, nisi vero eaque.
            </p>
        </section>
        <div class="heading-featured">
            <h3> Featured Hairstyles</h3> <br>
        </div>
        <section class="Featured-container">
            <div class="box1">
                <img class="img-featured" src="assets/images/2.jpg" alt="Hairstyle" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/3.jpg" alt="Hairstyle" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/4.jpg" alt="Hairstyle" class="responsive">
            </div>
            <div class="box1">
                <img class="img-featured" src="assets/images/5.jpg" alt="Hairstyle" class="responsive">
            </div>
        </section>
    </div>
    <br>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>