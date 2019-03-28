<!DOCTYPE html>
<html>

<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="container">
        <h3 class="display-3 text-center">Contact us</h3>
        <hr><br><br>
        <section class="section pb-5">
            <div class="col">
                <div class="col-sm-11">
                    <br>
                    <p><i class="fa fa-fas fa-map-marker" size="10"></i> Flupkestreet 5645Pb Blipo, Netherlands</p>
                    <p><i class="fa fa-fas fa-phone" size="10">
                        </i>+311234569</p>
                    <p><i class="fa fa-fas fa-envelope">
                        </i>info@pinkqueen.nl</p>
                    <br>
                </div>
                <br>
                <div class="col">
                    <div class="col-sm-11">
                        <!--Google map-->

                        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                            <iframe src="https://maps.google.com/maps?q=eindhoven&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" style="width:100%" allowfullscreen></iframe>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </section>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>