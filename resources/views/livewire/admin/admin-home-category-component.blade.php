<div dir="rtl" style="text-align: right">
    <title>@section('title',' أقسام الرئيسية |')</title>

   <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{__('mshmk.Manage_Home_Category')}}</h4>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='updateHomeCategory'>
                         @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                    {{__('mshmk.Choose_Categories')}}
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <select class="sel_categories form-control" name="categories[]" multiple='multiple' wire:model='selected_categories'>
                                        @foreach ($categories as $category)
                                            <Option value="{{$category->id}}">{{$category->name}}</Option>  
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                     {{__('mshmk.No_Of_Products')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model='numberofproducts'>
                                    @error('numberofproducts') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">
                                </label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary"> {{__('mshmk.Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change',function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories',data);
            });
        });
    </script>
@endpush