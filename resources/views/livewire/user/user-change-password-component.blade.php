<div>
    <div class="container" style="padding: 30px 0;" >
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password 
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('password_success'))
                    <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                    @endif
                    @if(Session::has('password_error'))
                    <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                    @endif
                    <form class="form-horizontal" wire.submit.prevent='changepassword'>
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Current Password</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password" wire:model='current_password' >
                                @error('current_password') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">NewPassword</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="New Password" class="form-control input-md" name="password" wire:model='password'>
                                @error('password') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation" wire:model='password_confirmation'>
                                @error('password_confirmation') <span class="text-danger">{{$message}}</span> @enderror
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
