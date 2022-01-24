<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupLabel">Sign Up to AD-Discuss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="full_name" 0 class="form-label">Full Name</label>
                        <input type="text" required name="full_name" class="form-control" id="username"
                            aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Your Full Name Is Your User Id.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email"  class="form-label">Email</label>
                        <input type="email" required name="email" class="form-control" id="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="mobile"  class="form-label">Mobile Number</label>
                        <input type="tel" required name="mobile_number" class="form-control" id="mobile_number"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" required name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="cpassword" required name="cpassword" class="form-control" id="cpassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>