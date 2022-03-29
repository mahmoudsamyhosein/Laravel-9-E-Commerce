<div dir="rtl" style="text-align: right">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{__('mshmk.Settings')}}
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='savesettings'>
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Email')}}</label>
                                <div class="col-md-4">
                                    <input type="email" placeholder="{{__('mshmk.Email')}}" class="form-control input-md" wire:model='email'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Phone')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Phone')}}" class="form-control input-md" wire:model='phone'>
                                    @error('Phone') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Phone_2')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Phone_2')}}" class="form-control input-md" wire:model='phone2'>
                                    @error('Phone2') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Address')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Address')}}" class="form-control input-md" wire:model='address'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Map')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Map')}}" class="form-control input-md" wire:model='map'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Twitter')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Twitter')}}" class="form-control input-md" wire:model='twiter'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.FaceBook')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.FaceBook')}}" class="form-control input-md" wire:model='facebook'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Pinterest')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Pinterest')}}" class="form-control input-md" wire:model='pinterest'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Instagram')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Instagram')}}" class="form-control input-md" wire:model='instagram'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Youtube')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Youtube')}}" class="form-control input-md" wire:model='youtube'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">{{__('mshmk.Save')}}</button>
                                </div>
                            </div>
                            
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
