<div dir="rtl" style="text-align: right">
    <div class="container" style="padding: 30px 0;" >
        <title>@section('title','تغيير كلمة المرور | ')</title>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{__('mshmk.Change_Password')}}</h4> 
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('password_success'))
                        <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                    @endif
                    @if(Session::has('password_error'))
                        <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent='changepassword'>
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.Current_Password')}}</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="{{__('mshmk.Current_Password')}}" class="form-control input-md" name="current_password" wire:model='current_password' >
                                @error('current_password') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.NewPassword')}}</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="{{__('mshmk.NewPassword')}}" class="form-control input-md" name="password" wire:model='password'>
                                @error('password') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.Confirm_Password')}}</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="{{__('mshmk.Confirm_Password')}}" class="form-control input-md" name="password_confirmation" wire:model='password_confirmation'>
                                @error('password_confirmation') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 pull-left" style="margin-left: 390px; ">
                                <button type="submit" class="btn btn-primary ">{{__('mshmk.Submit')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
