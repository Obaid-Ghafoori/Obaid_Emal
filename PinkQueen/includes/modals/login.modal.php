<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signIn" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signIn">Log in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="statusMsg"></p>

                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="signInEmail" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="signInPassword" placeholder="Password" required>
                    </div>
                    <button type="button" class="btn btn-red" onclick="submitLogin()">Log in</button>
                </form>
                <br>
                <div class="modal-footer">
                    <a id="no-account" data-toggle="modal" data-target="#signUpModal">Don't have an account? Sign up</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>