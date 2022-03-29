<div dir="rtl" style="text-align: right">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                {{__('mshmk.Add_New_Page')}}
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addpages')}}" class="btn btn-success pull-right">{{__('mshmk.All_pages')}}</a>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                @endif
                                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent='addpage'>
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Name')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Name')}}"  class="form-control input-md" wire:model='name'>
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Body')}}</label>
                                        <div class="col-md-8">
                                            <input type="text" id="body" placeholder="{{__('mshmk.Body')}}" class="form-control input-md" wire:model='body'>
                                            @error('body') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
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
    
    </div>
</div>
@push('scripts')
<script>
$(document).ready(function() {
  $('#body').summernote();
});
</script>
@endpush