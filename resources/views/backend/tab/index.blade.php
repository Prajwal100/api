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
                        <table class="table table-bordered" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Priority <sub><small>[ Lower value higher priority ]</small></sub></th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($tab)
                                    @foreach($tab as $tab_data)
                                    <tr>
                                        <td>{{$tab_data->title}}</td>
                                        <td>{{$tab_data->type}}</td>
                                        <td>{{$tab_data->priority}}</td>
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

                        {{$tab->links()}}
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
@section('styles')
    <style>
        div.dataTables_wrapper div.dataTables_filter label {
            font-weight: normal;
            white-space: nowrap;
            text-align: left;
        }
        div.dataTables_wrapper div.dataTables_filter {
            text-align: right;
        }
        .dataTables_info,.pagination{
            display:none;
        }
        table.dataTable thead .sorting_asc{
            cursor: pointer;
            position: relative;
        }
        table.dataTable thead .sorting_desc{
            cursor: pointer;
            position: relative;
        }
        table.dataTable thead .sorting_asc:before {
            opacity: 1;
            right:1em;
            content:"\2191";
            position: absolute;
            bottom: 0.9em;
            display: block;
        }
        table.dataTable thead .sorting_asc:after {
            right:.5em;
            content:"\2193";
            position: absolute;
            bottom: 0.9em;
            display: block;
            opacity: 0.3;
        }
        table.dataTable thead .sorting_desc:before {
            right:1em;
            content:"\2191";
            position: absolute;
            bottom: 0.9em;
            display: block;
            opacity: .3;

        }
        table.dataTable thead .sorting_desc:after {
            right:.5em;
            content:"\2193";
            position: absolute;
            bottom: 0.9em;
            display: block;
            opacity: 1;
        }
    </style>
@endsection
@section('scripts')
<script>
     $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                "order": [],
                "columnDefs": [
                    { "orderable": false, "targets": [3,4] },
                    { "orderable": true, "targets": [0,1,2] }
                ]
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
</script>
@endsection