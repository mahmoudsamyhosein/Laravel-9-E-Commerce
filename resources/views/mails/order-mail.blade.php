<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('mshmk.Order_Confirmation') }}</title>
</head>
<body>
    <p>{{__('mshmk.Hi')}} {{$order->firstname}} {{ $order->lastname}}</p>
    <p>{{__('mshmk.Your_Order_Has_Been_Successfully_Placed.')}}</p>
    <br/>
    <table style="width: 600px; text-align:right;" dir="rtl">
        <thead>
            <tr>
                <th>{{__('mshmk.Image')}}</th>
                <th>{{__('mshmk.Name')}}</th>
                <th>{{__('mshmk.Quantity')}}</th>
                <th>{{__('mshmk.Price')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td> <img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}" width="100"></td>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>${{$item->price * $item->quantity}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top: 10px solid #ccc;"></td>
                <td style="font-size: 15px;font-weight:bold; border-top: 10px solid #ccc;">{{__('mshmk.Subtotal_:')}} ${{$order->subtotal}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">{{__('mshmk.Tax')}}${{$order->tax}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">{{__('mshmk.Shipping_:_Free_Shipping')}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px;font-weight:bold;">{{__('mshmk.Total_:')}} ${{$order->total}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
