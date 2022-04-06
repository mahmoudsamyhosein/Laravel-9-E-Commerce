<div dir="rtl" style="text-align: right">
    <title>@section('title',' أضافة قسم جديد | ')</title>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                                <h4>{{__('mshmk.Add_New_Category')}}</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories')}}" class="btn btn-success pull-left">
                                    {{__('mshmk.All_Category')}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='store'>
                         @csrf
                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                     {{__('mshmk.Category_Name')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Category_Name')}}" class="form-control input-md" wire:model='name' wire:keyup='generateslug'>
                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                     {{__('mshmk.Category_Slug')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder=" {{__('mshmk.Category_Slug')}}" class="form-control input-md" wire:model='slug'>
                                    @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">
                                      {{__('mshmk.Parent_Category')}}
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model='category_id'>
                                        <option value="">{{__('mshmk.None')}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
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
