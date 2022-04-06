<div dir="rtl" style="text-align: right">
    <title>@section('title',' خواص المنتجات |')</title>
    <div>
        <style>
            
            .sclist{
                list-style: none;
            }
            .sclist li{
                line-height: 33px;
                border-bottom: 1px solid #ccc;
                
            }
            .slink i{
                font-size: 16px;
                margin-left: 12px;
            }
            
        </style>
        <div class="container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                    <div class="col-md-6 pull-right">
                                        <h4>{{__('mshmk.All_Attributes')}}</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.add_attribute') }}" class="btn btn-success pull-left">{{__('mshmk.ADD_New')}}</a>
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
                                        <th>{{__('mshmk.Name')}}</th>
                                        <th>{{__('mshmk.Created_At')}}</th>
                                        <th>{{__('mshmk.Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $pattributes as $pattribute)
                                    <tr>
                                        <td>{{ $pattribute->id }} </td>
                                        <td>{{ $pattribute->name }} </td>
                                        <td>{{ $pattribute->created_at }}</td>
                                        <td>
                                             <a
                                                href="{{route('admin.edit_attribute' ,['attribute_id' => $pattribute->id ] )}}"><i
                                                    class="fa fa-edit fa-2x"></i></a> 
                                            <a href="#"
                                                onclick="confirm('Are You Sure, You Want to delete this Attribute?') || event.stopImmediatePropagation()"
                                                wire:click.prevent='deleteAttribute({{$pattribute->id}})'
                                                
                                                style="margin-right:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="wrap-pagination-info" dir="rtl">
                                 {{ $pattributes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
