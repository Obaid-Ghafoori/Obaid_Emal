<!DOCTYPE html>
<html>
<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="container">
        <div class="content-header">
            <h3 class="display-3 text-center">Your account is succesfully created!</h3>
        </div>
        <hr>
        <div class="content">
            <p>
            <a class="btn btn-info" data-toggle="modal" data-target="#signInModal">
                        Log in
                    </a> 
            </p>
        </div>
    </div>
    </div>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>