<div dir="rtl" style="text-align: right">
    <title>@section('title',' أضافة خاصية جديدة |')</title>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                                <div class="col-md-6 pull-right">
                                    <h4>{{__('mshmk.Add_New_Attribute')}}</h4>
                                </div>
                                <div class="col-md-6 ">
                                    <a href="{{ route('admin.attributes')}}" class="btn btn-success pull-left">
                                        {{__('mshmk.All_Attribute')}}
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='storeAttribute'>
                         @csrf
                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                     {{__('mshmk.Attribute_Name')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Attribute_Name')}}" class="form-control input-md" wire:model='name'>
                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                </label>
                                <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">{{__('mshmk.Submit')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
