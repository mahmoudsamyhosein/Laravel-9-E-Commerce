<div dir="rtl" style="text-align: right">
    <title>@section('title','تفاصيل الطلب | ')</title>

    <div class="container" style="padding: 30px 0; text-align:right;" dir="rtl">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                               <h4>{{__('mshmk.Order_Details')}}</h4> 
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.orders')}}" class="btn btn-success pull-left">{{__('mshmk.All_Orders')}}</a>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>{{__('mshmk.Id')}}</th>
                                        <td>{{$order->id}}</td>
                                        <th>{{__('mshmk.Order_Date')}}</th>
                                        <td>{{$order->created_at}}</td>
                                        <th>{{__('mshmk.Order_Status')}}</th>
                                        <td>{{$order->status}}</td>
                                        @if($order->status == "delivered")
                                            <th>{{__('mshmk.Delivered_Date')}}</th>
                                            <td>{{$order->delivered_date}}</td>
                                        @elseif($order->status == "canceled")
                                            <th>{{__('mshmk.Cancellation_Date')}} </th>
                                            <td>{{$order->canceled_date}}</td>
                                        @endif
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                {{__('mshmk.Ordered_Items')}}
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="wrap-iten-in-cart">
                            <h3 class="box-title">{{__('mshmk.Products_Name')}}</h3>
                            <ul class="products-cart">
                                @foreach($order->orderitems as $item )
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{ route('products.details' ,['slug' => $item->product->slug ]) }}">{{$item->product->name}}</a>
                                            </div>
                                            @if ($item->options)
                                                <div class="product-name">
                                                    @foreach (unserialize($item->options) as $key => $value)
                                                        <p><b>{{$key}}:{{$value}}</b></p>
                                                    @endforeach
                                                </div>
                                            @endif
                                            <div class="price-field produtc-price"><p class="price">{{ $item->price }} {{$setting->currency}}</p></div>
                                            <div class="quantity">
                                                <h5>{{$item->quantity}}</h5>                                                
                                            </div>
                                            <div class="price-field sub-total"><p class="price">{{ $item->price * $item->quantity }} {{$setting->currency}}</p></div>
                                        </li>
                                @endforeach										
                            </ul>
                    </div>
                </div>
                <div class="summary">
                    <div class='order-summary'>
                        <h4 class="title-box">
                           {{__('mshmk.Order_Summery')}}
                        </h4>
                        <p class="summary-info"><span class="title">{{__('mshmk.Subtotal')}}</span></span><b class="index">{{$order->subtotal}} {{$setting->currency}}</b></p>                        
                        <p class="summary-info"><span class="title">{{__('mshmk.Tax')}}</span></span><b class="index">{{$order->tax}}</b></p>                        
                        <p class="summary-info"><span class="title">{{__('mshmk.Shipping')}}</span></span><b class="index">{{__('mshmk.Free_Shipping')}}</b></p>                        
                        <p class="summary-info"><span class="title">{{__('mshmk.Total')}}</span></span><b class="index">{{$order->total}}</b></p>                                              
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       {{__('mshmk.Billing_Details')}}
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>{{__('mshmk.First_Name')}}</th>
                                    <td>{{$order->firstname}}</td>
                                    <th>{{__('mshmk.Last_name')}}</th>
                                    <td>{{$order->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>{{__('mshmk.Phone')}}</th>
                                    <td>{{$order->mobile}}</td>
                                    <th>{{__('mshmk.Email')}}</th>
                                    <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <th>{{__('mshmk.Line1')}}</th>
                                    <td>{{$order->line1}}</td>
                                    <th>{{__('mshmk.Line2')}}</th>
                                    <td>{{$order->line2}}</td>
                                </tr>

                                <tr>
                                    <th>{{__('mshmk.City')}}</th>
                                    <td>{{$order->city}}</td>
                                    <th>{{__('mshmk.Province')}}</th>
                                    <td>{{$order->province}}</td>
                                </tr>
                                <tr>
                                    <th>{{__('mshmk.Country')}}</th>
                                    <td>{{$order->country}}</td>
                                    <th>{{__('mshmk.Zipcode')}}</th>
                                    <td>{{$order->zipcode}}</td>
                                </tr>
                            </table> 
                        </div>
                </div>
        </div>
        </div>
        @if ($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       {{__('mshmk.Shipping_Details')}}
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>{{__('mshmk.First_Name')}}</th>
                                <td>{{$order->shipping->firstname}}</td>
                                <th>{{__('mshmk.Last_name')}}</th>
                                <td>{{$order->shipping->lastname}}</td>
                            </tr>
                            <tr>
                                <th>{{__('mshmk.Phone')}}</th>
                                <td>{{$order->shipping->mobile}}</td>
                                <th>{{__('mshmk.Email')}}</th>
                                <td>{{$order->shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>{{__('mshmk.Line1')}}</th>
                                <td>{{$order->shipping->line1}}</td>
                                <th>{{__('mshmk.Line2')}}</th>
                                <td>{{$order->shipping->line2}}</td>
                            </tr>

                            <tr>
                                <th>{{__('mshmk.City')}}</th>
                                <td>{{$order->shipping->city}}</td>
                                <th>{{__('mshmk.Province')}}</th>
                                <td>{{$order->shipping->province}}</td>
                            </tr>
                            <tr>
                                <th>{{__('mshmk.Country')}}</th>
                                <td>{{$order->shipping->country}}</td>
                                <th>{{__('mshmk.Zipcode')}}</th>
                                <td>{{$order->shipping->zipcode}}</td>
                            </tr>
                        </table> 
                        
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      {{__('mshmk.Transaction')}}
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table text-right">
                        <tr>
                            <th>{{__('mshmk.Transaction_Mode')}}</th>
                            <td>{{$order->transaction->mode}}</td>
                        </tr>
                        <tr>
                            <th>{{__('mshmk.Status')}}</th>
                            <td>{{$order->transaction->status}}</td>
                        </tr>
                        <tr>
                            <th> {{__('mshmk.Created_at')}}</th>
                            <td>{{$order->transaction->created_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
