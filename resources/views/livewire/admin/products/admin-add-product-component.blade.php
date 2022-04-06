<div dir="rtl" style="text-align: right" >
    <title>@section('title','أضافة منتج جديد | ')</title>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6  pull-right">
                                            <h4>{{__('mshmk.Add_New_Product')}}</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.products')}}" class="btn btn-success pull-left" style="margin-bottom:10px;">{{__('mshmk.All_Products')}}</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                @endif
                                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent='addproduct'>
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Product_Name')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Product_Name')}}"  class="form-control input-md" wire:model='name' wire:keyup='generateslug'>
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Product_Slug')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Product_Slug')}}"  class="form-control input-md" wire:model='slug'>
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Short_Description')}}</label>
                                        <div class="col-md-4" wire:ignore>
                                            <textarea type="text" id="short_description" placeholder="{{__('mshmk.Short_Description')}}"  class="form-control" wire:model='short_description'></textarea>
                                            @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Description')}}</label>
                                        <div class="col-md-4" wire:ignore>
                                            <textarea type="text" id="description" placeholder="{{__('mshmk.Description')}}"  class="form-control" wire:model='description'></textarea>
                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Regular_Price')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Regular_Price')}}" class="form-control input-md" wire:model='regular_price'>
                                            @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Sale_Price')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Sale_Price')}}" class="form-control input-md" wire:model='sale_price'>
                                            @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.SKU')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.SKU')}}" class="form-control input-md" wire:model='SKU'>
                                            @error('SKU') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Stock')}}</label>
                                        <div class="col-md-4">
                                            <select class="form-control" wire:model='stock_status'>
                                                
                                                <option value="instock"> {{__('mshmk.In_Stock')}}</option>
                                                <option value="outofstock">{{__('mshmk.Out_Of_Stock')}}</option>
                                            </select>
                                            @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Featured')}}</label>
                                        <div class="col-md-4">
                                            <select class="form-control" wire:model='featured'>
                                               
                                                <option value="0">{{__('mshmk.No')}}</option>
                                                <option value="1">{{__('mshmk.Yes')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Quantity')}}</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="{{__('mshmk.Quantity')}}" class="form-control input-md" wire:model='quantity'>
                                            @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Product_Image')}}</label>
                                        <div class="col-md-4">
                                            <input type="file" class="input-file" wire:model='image'>
                                            @if($image)
                                                <img src="{{$image->temporaryUrl()}}" width="120">
                                            @endif
                                            @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Product_Gallery')}}</label>
                                        <div class="col-md-4">
                                            <input type="file" class="input-file" wire:model='images' multiple >
                                            @if($images)
                                                @foreach ($images as $image)
                                                    <img src="{{$image->temporaryUrl()}}" width="120">
                                                @endforeach
                                            @endif
                                            @error('images') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Category')}}</label>
                                        <div class="col-md-4">
                                            <select class="form-control" wire:model='category_id' wire:change='changesubcategory'>
                                                
                                                <option value="">{{__('mshmk.Select_Category')}}</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Sub_Category')}}</label>
                                        <div class="col-md-4">
                                            <select class="form-control" wire:model='scategory_id'>
                                                
                                                <option value="0">{{__('mshmk.Select_Sub_Category')}}</option>
                                                @foreach ($scategories as $scategory)
                                                    <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('scategory_id') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">{{__('mshmk.Product_Attributes')}}</label>
                                        
                                        <div class="col-md-4">
                                            <select class="form-control" wire:model='attr'>
                                                
                                                <option value="0">{{__('mshmk.Select_Attribute')}}</option>
                                                @foreach ($pattributes as $pattribute)
                                                    <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info" wire:click.prevent="add">
                                                {{__('mshmk.Add')}}
                                            </button>
                                        </div>
                                        
                                    </div>
                                    @foreach ($inputs as $key => $value)
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}</label>
                                            

                                            <div class="col-md-4">
                                                <input type="text" placeholder="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" class="form-control input-md" wire:model='attribute_values.{{$value}}'>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-danger btn-sm" wire:click.prevent='remove({{$key}})'>
                                                   {{__('mshmk.Remove')}}
                                                </button>
                                            </div>
                                            
                                        </div>
                                    @endforeach

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
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });
                }
            });
        });
    </script>
@endpush