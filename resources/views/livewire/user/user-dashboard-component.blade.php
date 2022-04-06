<div class="content" dir="rtl" style="text-align: right">  
  <title>@section('title',' لوحة التحكم |')</title>
 
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }
        
        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label text-right">{{__('mshmk.Total_Cost')}}</span>
                    <span class="icon-stat-value">{{$total_cost}}{{$setting->currency}}</span>
                  </div>   
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o" style="margin-left: 5px;"></i>{{__('mshmk.Updated_Now')}}
                </div>    
              </div>    
            </div>    
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label text-right">{{__('mshmk.Total_Purchase')}}</span>
                    <span class="icon-stat-value">{{$total_purchase}}</span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o" style="margin-left: 5px;"></i>{{__('mshmk.Updated_Now')}}
                </div>   
              </div>
            </div>
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label text-right">{{__('mshmk.Total_Delivered')}}</span>
                    <span class="icon-stat-value">{{$totalDelivered}}</span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o" style="margin-left: 5px;"></i>{{__('mshmk.Updated_Now')}}
                </div>
              </div>    
            </div>    
            <div class="col-md-3 col-sm-6">    
              <div class="icon-stat">    
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label text-right">{{__('mshmk.Total_Canceled')}}</span>
                    <span class="icon-stat-value">{{$totalCanceled}}</span>
                  </div>    
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>    
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o" style="margin-left: 5px;"></i>{{__('mshmk.Updated_Now')}}
                </div>    
              </div>    
            </div>    
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4>{{__('mshmk.Latest_Order')}}</h4>
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
                                  <th class="text-center">{{__('mshmk.Action')}}</th>
      
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
                      </div>
                  </div>
              </div>
        </div>        
    </div>    
</div>
