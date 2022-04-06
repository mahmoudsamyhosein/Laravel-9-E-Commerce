<div dir="rtl" style="text-align: right">
    <style>
        nav svg{
            height: 20px;

        }
        nav .hidden{
            display: block !important;

        }
    </style>
        <title>@section('title',' الطلبات  |')</title>
   <div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h4>{{__('mshmk.All_Orders')}}</h4>
                </div>
            </div>
            <div class="panel-body">
                @if(Session::has('order_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{__('mshmk.Id')}}</th>
                            <th>{{__('mshmk.Subtotal')}}</th>
                            <th>{{__('mshmk.Discount')}}</th>
                            <th>{{__('mshmk.Tax')}}</th>
                            <th>{{__('mshmk.Total')}}</th>
                            <th>{{__('mshmk.First_Name')}}</th>
                            <th>{{__('mshmk.Last_Name')}}</th>
                            <th>{{__('mshmk.Mobile')}}</th>
                            <th>{{__('mshmk.Email')}}</th>
                            <th>{{__('mshmk.Zipcode')}}</th>
                            <th>{{__('mshmk.Status')}}</th>
                            <th>{{__('mshmk.Order_Date')}}</th>
                            <th colspan="2" class="text-center">{{__('mshmk.Action')}}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->subtotal}}{{$setting->currency}}</td>
                                <td>{{$order->discount}}{{$setting->currency}}</td>
                                <td>{{$order->tax}}{{$setting->currency}}</td>
                                <td>{{$order->total}}{{$setting->currency}}</td>
                                <td>{{$order->firstname}}</td>
                                <td>{{$order->lastname}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->zipcode}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->created_at}}</td>
                                <td><a href="{{route('admin.order_details',['order_id' => $order->id ])}}" class="btn btn-info btn-sm">{{__('mshmk.Details')}}</a></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                            {{__('mshmk.Status')}}
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" style="text-align: right">
                                            <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">{{__('mshmk.Delivered')}}</a></li>
                                            <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">{{__('mshmk.Canceled')}}</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="wrap-pagination-info" dir="rtl">
                     {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>

   </div>
</div>
