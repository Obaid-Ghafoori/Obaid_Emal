<!DOCTYPE html>
<html>

<?php include('includes/header.inc.php'); ?>

<body>
    <?php include('includes/nav.inc.php'); ?>
    <?php include('includes/modals/login.modal.php'); ?>
    <?php include('includes/modals/signup.modal.php'); ?>
    <div class="container">
        <h3 class="display-3 text-center">Make an appointment</h3>
        <hr>
        <form>
            <div class="form-row justify-content-center">
                <div class="form-group col-5 text-center">
                    <label for="datePicker">Pick a date</label>
                    <select id="datePicker" class="form-control" placeholder="Select">
                        <option selected>
                            <?php 
                                echo date("d.m.Y");
                            ?>
                        </option>
                        <?php
                            for ($i = 1; $i <= 30; $i++) {
                                ?>
                                <option>
                                    <?php 
                                        $date = new DateTime(date("d-m-Y"));
                                        $date->modify('+' . $i . ' day');
                                        echo $date->format('d.m.Y');
                                        // $cur_date = strtotime("+1 day", strtotime(date("d/m/Y")));
                                        // echo($cur_date);
                                        // echo date('d.m', strtotime($cur_date . ' + ' . i . ' days')); 
                                    ?>
                                </option>
                                <?php
                            } ?>
                    </select>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-5 text-center">
                    <label for="timePicker">Pick a time</label>
                    <select id="timePicker" class="form-control">
                        <option selected>Select a time</option>
                        <option>10:00</option>
                        <option>10:15</option>
                        <option>10:30</option>
                        <option>10:45</option>
                        <option>11:00</option>
                        <option>11:15</option>
                        <option>11:30</option>
                        <option>11:45</option>
                        <option>12:00</option>
                        <option>12:15</option>
                        <option>12:30</option>
                        <option>12:45</option>
                        <option>13:00</option>
                        <option>13:15</option>
                        <option>13:30</option>
                        <option>13:45</option>
                        <option>14:00</option>
                        <option>14:15</option>
                        <option>14:30</option>
                        <option>14:45</option>
                        <option>15:00</option>
                        <option>15:15</option>
                        <option>15:30</option>
                        <option>15:45</option>
                        <option>16:00</option>
                        <option>16:15</option>
                        <option>16:30</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-row justify-content-center">
                <div class="form-group col-7 text-center">
                    <textarea class="form-control" id="inputRemarks" rows="5"
                        placeholder="Comments"></textarea>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <button style="background-color: skyblue; color: white;" type="button" onclick="test()" 
                    class="btn btn-lg btn-block col-5">
                    <ion-icon style="max-width: 20px; max-height: 20px;" name="create"></ion-icon>Book
                </button>
            </div>
            <div id="test-content">
                
            </div>
        </form>
        <br>
    </div>
    <?php include('includes/footer.inc.php'); ?>
</body>

</html>