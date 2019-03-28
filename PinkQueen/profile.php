<!DOCTYPE html>
<html>

<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <div class="content-header">
        <br>
        <h3 class="display-3 text-center">Personal information</h3>
        <hr>
    </div>
    <div id="account" class="row">
        <div class="col-2 divided">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                    role="tab" aria-controls="v-pills-profile" aria-selected="true">Personal information</a>
                <a class="nav-link" id="v-pills-appointments-tab" data-toggle="pill" href="#v-pills-appointments"
                    role="tab" aria-controls="v-pills-appointments" aria-selected="false">My appointments</a>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
                    <form>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="inputFirstName" placeholder="First name" value="<?php echo $_SESSION["user_firstname"]?>" >
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="inputLastName" placeholder="Last name" value="<?php echo $_SESSION["user_lastname"]?>" >
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" id="inputLastName" placeholder="Email" value="<?php echo $_SESSION["user_email"]?>">
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="form-row justify-content-center" id="save-button">
                            <button style="background-color: skyblue; color: white;" type="submit"
                                class="btn btn-lg btn-block col-3">Save</button>
                        </div>
                    </form>
                </div>
            
                <div class="tab-pane fade" id="v-pills-appointments" role="tabpanel"
                    aria-labelledby="v-pills-appointments-tab">...</div>

                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
                    <form>
                        
                    </form>
                </div>

            </div>
        </div>
        <div class="col"></div>
    </div>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>