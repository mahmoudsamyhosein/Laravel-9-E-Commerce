<div dir="rtl" style="text-align: right">
    <title>@section('title',' رسائل التواصل |')</title>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                              <h4 >{{__('mshmk.Contact_Messages')}}</h4> 
                            </div>
                            
                        </div>    
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                             <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('mshmk.Name')}}</th>
                                    <th>{{__('mshmk.Email')}}</th>
                                    <th>{{__('mshmk.Phone')}}</th>
                                    <th>{{__('mshmk.Comment')}}</th>
                                    <th>{{__('mshmk.Created_At')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $i=1;   
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->comment}}</td>
                                        <td>{{$contact->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="wrap-pagination-info" dir="rtl">
                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
