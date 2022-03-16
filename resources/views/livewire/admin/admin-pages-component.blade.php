<style>
    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>
<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                {{__('mshmk.All_pages')}}
                            </div>
                            <div class="col-md-4">
                               <a href="{{ route('admin.addpages') }}" class="btn btn-success pull-right">{{__('mshmk.Add_New')}}</a>
                            </div>
                        </div>    
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{$page->id}}</td>
                                        <td>{{$page->name}}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.editpage')}}"><i class="fa fa-edit fa-2x text-info">
                                                </i>
                                            </a>
                                            <a href="#" onclick="confirm('Are You Sure, You Want To Delete This Product ? ') || event.stopImmediatePropagation()" style="margin-left:10px;" 
                                            wire:click.prevent="destroyproduct('{{$product->id}}')">
                                            <i class="fa fa-times fa-2x text-danger"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
