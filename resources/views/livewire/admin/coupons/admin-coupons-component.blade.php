<div dir="rtl" style="text-align: right">
    <title>@section('title','الكوبونات | ')</title>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-right">
                                    {{__('mshmk.All_Coupon')}}</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('admin.addcoupons') }}" class="btn btn-success pull-left">
                                        {{__('mshmk.ADD_New')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('mshmk.Id')}}</th>
                                    <th>{{__('mshmk.Coupon_Code')}}</th>
                                    <th>{{__('mshmk.Coupon_Type')}}</th>
                                    <th>{{__('mshmk.Coupon_Value')}}</th>
                                    <th>{{__('mshmk.Cart_Value')}}</th>
                                    <th>{{__('mshmk.Expiry_Date')}}</th>
                                    <th>{{__('mshmk.Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->id }} </td>
                                    <td>{{ $coupon->code }} </td>
                                    <td>{{ $coupon->type }} </td>
                                    @if ($coupon->type == 'fixed' )
                                        <td>${{ $coupon->value }}</td>
                                    @else
                                        <td>{{ $coupon->value }}%</td>    
                                    @endif
                                    <td>{{ $coupon->cart_value }}</td>
                                    <td>{{ $coupon->expiry_date }}</td>
                                    <td>
                                        <a                                      
                                            href="{{route('admin.editcoupons' ,['coupon_id' => $coupon->id ] )}}"><i
                                                class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <a href="#"
                                            onclick="confirm('Are You Sure, You Want to delete this Coupon?') || event.stopImmediatePropagation()"
                                            wire:click.prevent="deletecoupon( {{$coupon->id}} )"
                                            style="margin-right:10px;"><i class="fa fa-times fa-2x text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


