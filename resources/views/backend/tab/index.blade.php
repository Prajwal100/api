@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="row">
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                </div>
            </div>
            <div class="ibox-head">
                <div class="ibox-title">Tab List</div>
                <div class="ibox-title float-right">
                    <a href="{{route('tab.create')}}" class="btn btn-success btn-sm float-right">Add tab</a>
                </div>
            </div>
            <div class="ibox-body">
                <div class="table-responsive">
                    {{-- <form method="tab" action="{{route('muldel')}}"> --}}
                        
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th ><button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete All Selected"><i class="fa fa-trash font-14"></i></buttton></th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($tab)
                                    @foreach($tab as $tab_data)
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox" name='muldel[]' value={{$tab_data->id}}>
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>{{$tab_data->title}}</td>
                                        <td>{{$tab_data->type}}</td>
                                        <td>
                                            @if($tab_data->status=='active') 
                                                <span class="badge badge-success">active</span>
                                            @else
                                                <span class="badge badge-warning">inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('tab.edit',$tab_data->id)}}"  class="btn btn-primary btn-xs m-r-5 float-left" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                                            <form class="float-left" action="{{route('tab.destroy',$tab_data->id)}}" method="POST" onsubmit="return confirm('Are your sure?')">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button  type="submit"  class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></buttton>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                    @endforeach
                               @endif
                            </tbody>
                        </table>
                    {{-- </form> --}}
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">{{date('Y')}} © <b>{{env('APP_NAME')}}</b> - All rights reserved.</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
</div>
@endsection
{{-- @section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection --}}