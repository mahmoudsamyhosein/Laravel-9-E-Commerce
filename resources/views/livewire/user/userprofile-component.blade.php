<style>
    b{
        margin-left: 10px;
    }
</style>
<div dir="rtl" style="text-align: right">
    <title>@section('title','الملف الشخصي |')</title>
    <div class="container" style="padding: 30px 0" dir="rtl" style="text-align: right;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{__('mshmk.Profile')}}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($user->profile->image)
                            <img src="{{ asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%" alt="{{$user->name}}">                            
                        @else
                            <img src="{{ asset('assets/images/profile/default.jpg')}}" width="100%" alt="{{$user->name}}"> 
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b>{{__('mshmk.Name:')}}</b>{{$user->name}}</p>
                        <p><b>{{__('mshmk.Email:')}}</b>{{$user->email}}</p>
                        <p><b>{{__('mshmk.Phone:')}}</b>{{$user->profile->mobile}}</p>
                        <hr>
                        <p><b>{{__('mshmk.Line1:')}}</b>{{$user->profile->line1}}</p>
                        <p><b>{{__('mshmk.Line2:')}}</b>{{$user->profile->line2}}</p>
                        <p><b>{{__('mshmk.City:')}}</b>{{$user->profile->city}}</p>
                        <p><b>{{__('mshmk.Province:')}}</b>{{$user->profile->province}}</p>
                        <p><b>{{__('mshmk.Country:')}}</b>{{$user->profile->country}}</p>
                        <p><b>{{__('mshmk.Zip_Code:')}}</b>{{$user->profile->zipcode}}</p>
                        <a href="{{ route('user.editprofile') }}" class="btn btn-info pull-right">{{__('mshmk.Update_Profile')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
