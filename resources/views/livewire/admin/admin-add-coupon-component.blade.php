<div dir="rtl" style="text-align: right">
    <div class="container" style="padding: 30px 0;" >
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.coupons')}}" class="btn btn-success pull-left">
                                   {{('mshmk.All_Coupons')}}
                                </a>
                            </div>
                            <div class="col-md-6">
                                {{('mshmk.Add_New_Coupon')}}
                            </div>
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='storecoupon' dir="rtl" style="justify-content: flex-end;">
                         @csrf
                            <div class="form-group">
                                <label  class="col-md-4 control-label text-right">
                                    {{('mshmk.Coupon_Code')}}
                                </label>
                                <div class="col-md-4 ">
                                    <input type="text" placeholder="{{('mshmk.Coupon_Code')}}" class="form-control input-md " wire:model='code' >
                                    @error('code') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label " style="text-align: right">
                                   {{('mshmk.Coupon_Type')}}
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control"wire:model='type'>
                                        <option value="fixed">{{('mshmk.Select')}}</option>
                                        <option value="fixed">{{('mshmk.Fixed')}}</option>
                                        <option value="percent">{{('mshmk.Percent')}}</option>
                                    </select>
                                    @error('type') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                    {{('mshmk.Coupon_Value')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{('mshmk.Coupon_Value')}}" class="form-control input-md" wire:model='value' >
                                    @error('value') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                     {{('mshmk.Cart_Value')}}
                                </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{('mshmk.Cart_Value')}}" class="form-control input-md" wire:model='cart_value' >
                                    @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">
                                    {{('mshmk.Expiry_Date')}}
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <input type="text" id="expiry-date"  placeholder=" {{('mshmk.Expiry_Date')}}" class="form-control input-md" wire:model='expiry_date' >
                                    @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">{{('mshmk.Submit')}}</button>
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
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date',data);
            });
        });
    </script>
@endpush