<div dir="rtl" style="text-align: right">
    <title>@section('title','الصور المتحركة | ')</title>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 pull-right">
                                    <h4>{{__('mshmk.All_Slides')}}</h4> 
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-left">
                                        {{__('mshmk.Add_New_Slide')}}
                                    </a>
                                </div>
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
                                    <th>{{__('mshmk.Id')}}</th>
                                    <th>{{__('mshmk.Image')}}</th>
                                    <th>{{__('mshmk.Title')}}</th>
                                    <th>{{__('mshmk.Subtitle')}}</th>
                                    <th>{{__('mshmk.Price')}}</th>
                                    <th>{{__('mshmk.Link')}}</th>
                                    <th>{{__('mshmk.Status')}}</th>
                                    <th>{{__('mshmk.Date')}}</th>
                                    <th>{{__('mshmk.Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{ $slider->image }}" width="80" height="80"></td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->subtitle}}</td>
                                        <td>{{$slider->price}}</td>
                                        <td>{{$slider->link}}</td>
                                        <td>{{$slider->status == 1 ? 'Active':'Inactive' }}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a style="margin-left:7px;" href="{{ route('admin.edithomeslider',['slide_id' => $slider->id ]) }}">
                                            <i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" style="margin-left:2px;" wire:click.prevent='deleteslide({{ $slider->id }})'>
                                                <i class="fa fa-times fa-2x text-danger"></i></a>
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
