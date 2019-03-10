<!-- register -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Register Now</h5>
                    <form action="#" method="post" id="reg-form">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="uname" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select type="text" class="form-control" name="city" placeholder="" required="">
                                <option value="Jammu">Jammu </option>
                                <option value="Delhi">New Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chandigarh">Chandigarh</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea cols="50" rows="3" name="addr" maxlength="10" class="form-control"
                                placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Business Type</label>
                            <select type="text" name="buss_type" class="form-control" name="city" placeholder="Select Business Type"
                                required="">
                                <option value="Hall">Banquet Hall</option>
                                <option value="Party">Mini Party</option>
                                <option value="Resort">Resorts</option>
                                <option value="Conference">Conference Halls</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" name="pass" id="password1" placeholder=""
                                required="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="password2" placeholder=""
                                required="">
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//register-->