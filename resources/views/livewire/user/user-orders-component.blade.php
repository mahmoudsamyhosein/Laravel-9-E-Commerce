<div dir="rtl" style="text-align: right">
    <title>@section('title',' الطلبات |')</title>

    <style>
        nav svg{
            height: 20px;

        }
        nav .hidden{
            display: block !important;

        }
    </style>
   <div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{__('mshmk.All_Orders')}}</h4>
                </div>
            </div>
            <div class="panel-body">
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
                            <th>{{__('mshmk.Action')}}</th>

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
                                <td><a href="{{route('user.orderdetails',['order_id' => $order->id ])}}" class="btn btn-info btn-sm">{{__('mshmk.Details')}}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            {{ $orders->links() }}
            </div>
        </div>
    </div>

   </div>
</div>
