<div dir="rtl" style="text-align: right">
    <title>@section('title',' تعديل الملف الشخصي |')</title>
    <style>
        input{
            margin-top:5px;
            margin-bottom:7px;
        }
        
    </style>
    <div class="container" style="padding: 30px 0" dir="rtl" style="text-align: right;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{__('mshmk.Update_Profile')}}</h4>
                </div>
                <div class="panel-body">
                    <form wire:submit.prevent="updateProfile">
                        @csrf
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <div class="col-md-4">
                            @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                            @elseif($image)
                                <img src="{{asset('assets/images/profile')}}/{{$image}}" width="100%" />
                            @else
                                <img src="{{asset('assets/images/profile/default.jpg')}}" width="100%" />
                            @endif
                            <input type="file" class="form-control" wire:model="newimage" />
                        </div>
                        <div class="col-md-8">
                            <p><b>{{__('mshmk.Name:')}}</b><input type="text" class="form-control" wire:model='name'>
                                @error('name')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <hr>
                            <p><b>{{__('mshmk.Email:')}}</b>{{$email}}</p>
                            <hr>
                            <p><b>{{__('mshmk.Phone:')}}</b><input type="text" class="form-control" wire:model='mobile'>
                                @error('mobile')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <hr>
                            <p><b>{{__('mshmk.Country:')}}</b><input type="text" class="form-control" wire:model='country'>
                                @error('country')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <p><b>{{__('mshmk.province')}}</b><input type="text" class="form-control" wire:model='province'>
                                @error('province')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <p><b>{{__('mshmk.City:')}}</b><input type="text" class="form-control" wire:model='city'>
                                @error('city')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <hr>
                            <p><b>{{__('mshmk.Line1:')}}</b><input type="text" class="form-control" wire:model='line1'>
                                @error('line1')
                                  <p class="text-danger">{{ $message}}</p>  
                                @enderror
                            </p>
                            <p><b>{{__('mshmk.Line2:')}}</b><input type="text" class="form-control" wire:model='line2'>
                            </p>
                            <p><b>{{__('mshmk.Zip_Code:')}}</b><input type="text" class="form-control" wire:model='zipcode'>
                            </p>
                            <button type='submit' class='btn btn-info pull-right'>{{__('mshmk.Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
