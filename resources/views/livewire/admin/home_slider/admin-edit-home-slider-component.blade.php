<div dir="rtl" style="text-align: right">
    <title>@section('title','تعديل الصور المتحركة | ')</title>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                                <h4>{{__('mshmk.Edit_Slide')}}</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-left">
                                   {{__('mshmk.All_Slides')}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='updateSlide'>
                            @csrf
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.Title')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Title')}}" class="form-control input-md" wire:model='title'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.SubTitle')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.SubTitle')}}" class="form-control input-md" wire:model='subtitle'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.Price')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Price')}}" class="form-control input-md" wire:model='price'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.Link')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Link')}}" class="form-control input-md" wire:model='link'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.Image')}}</label>
                                <div class="col-md-4">
                                    <input type="file" placeholder="{{__('mshmk.Image')}}" class="input-file" wire:model='newimage'>
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                                    @else
                                        <img src="{{asset('assets/images/sliders')}}/{{$image}}" width='120'>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">{{__('mshmk.Status')}}</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model='status'>
                                        <option value="0">{{__('mshmk.Inactive')}}</option>
                                        <option value="1">{{__('mshmk.Active')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">{{__('mshmk.Update')}}</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
