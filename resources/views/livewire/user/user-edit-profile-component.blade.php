<div dir="rtl" style="text-align: right">
    <title>@section('title','| تعديل الملف الشخصي ')</title>

    <div class="container" style="padding: 30px 0" dir="rtl" style="text-align: right;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{__('mshmk.Update_Profile')}}</h4>
                </div>
                <div class="panel-body">
                    <form wire:submit.prevent='updateprofile'>
                        @csrf
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <div class="col-md-4">
                            @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%" >                            
                            @elseif($image)
                                <img src="{{ asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%" >                            
                            @else
                                <img src="{{ asset('assets/images/profile/default.jpg')}}" width="100%"> 
                            @endif
                            <input type="file" class="form-control" wire:model='newimage'>
                        </div>
                        <div class="col-md-8">
                            <p><b>{{__('mshmk.Name:')}}     </b><input type="text" class="form-control" wire:model='name'></p>
                            <hr>
                            <p><b>{{__('mshmk.Email:')}}    </b>{{$email}}</p>
                            <hr>
                            <p><b>{{__('mshmk.Phone:')}}    </b><input type="text" class="form-control" wire:model='mobile'></p>
                            <hr>
                            <p><b>{{__('mshmk.Country:')}}  </b><input type="text" class="form-control" wire:model='country'></p>
                            <p><b>{{__('mshmk.City:')}}     </b><input type="text" class="form-control" wire:model='city'></p>
                            <p><b>{{__('mshmk.Province:')}} </b><input type="text" class="form-control" wire:model='province'></p>
                            <hr>
                            <p><b>{{__('mshmk.Line1:')}}    </b><input type="text" class="form-control" wire:model='line1'></p>
                            <p><b>{{__('mshmk.Line2:')}}    </b><input type="text" class="form-control" wire:model='line2'></p>
                            <p><b>{{__('mshmk.Zip_Code:')}} </b><input type="text" class="form-control" wire:model='zipcode'></p>
                            <button type='submit' class='btn btn-info pull-right'>{{__('mshmk.Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
