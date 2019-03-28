<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUp" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUp">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="signUpFirstName" name="signUpFirstName" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="signUpLastName" name="signUpLastName" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="signUpEmail" name="signUpEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="signUpPassword" name="signUpPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="signUpConfirmPassword"
                                placeholder="Confirm password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input id="terms-checkbox" class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <p>I accept the
                                        <a id="no-account"
                                            href="https://termsandcondiitionssample.com/live.php?token=fgLx8Y5TBlzuhHqp68cKHCtLqhYhcovk"
                                            target="_blank">
                                            terms & conditions
                                        </a>
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div id="err-wrapper" class="error-wrapper">
                            <p id="error-message"></p>
                        </div>
                        <button id="sign-up-button" type="button" onclick="signupUser()" class="btn btn-red">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>