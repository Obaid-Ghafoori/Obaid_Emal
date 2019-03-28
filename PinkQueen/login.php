<?php
if(isset($_POST)){
    echo "hello ".$_POST['email'];
}

?>
<!DOCTYPE html>
<html>

<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <div style="height: 65vh; padding-top: 3%" class="container">
        <button type="button" class="btn btn-red" data-toggle="modal" data-target="#signUpModal">Sign up</button>
        <button type="button" class="btn btn-red" data-toggle="modal" data-target="#signInModal">Sign in</button>

        <?php include('includes/modals/login.modal.php'); ?>
        <?php include('includes/modals/signup.modal.php'); ?>
    </div>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>