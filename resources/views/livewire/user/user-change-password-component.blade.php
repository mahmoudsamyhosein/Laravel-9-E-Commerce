<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password 
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Current Password</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">NewPassword</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="New Password" class="form-control input-md" name="new_password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
