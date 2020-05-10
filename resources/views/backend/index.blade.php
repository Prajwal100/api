@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <?php 
                            $total_cats=DB::table('categories')->where('status','active')->count();
                        ?>
                        <h2 class="m-b-5 font-strong">{{$total_cats}}</h2>
                        <div class="m-b-5">TOTAL CATEGORY</div><i class="fa fa-sitemap widget-stat-icon" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <?php 

                            $total_posts=DB::table('posts')->where('status','active')->count();
                        ?>
                        <h2 class="m-b-5 font-strong">{{$total_posts}}</h2>
                        <div class="m-b-5">TOTAL POSTS</div><i class="fa fa-clone widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <?php 
                            $total_tabs=DB::table('tabs')->where('status','active')->count();
                        ?>
                        <h2 class="m-b-5 font-strong">{{$total_tabs}}</h2>
                        <div class="m-b-5">TOTAL TABS</div><i class="fa fa-th-large widget-stat-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="ibox-body">
            <div class="table-responsive">
                {{-- <form method="POST" action="{{route('muldel')}}"> --}}
                    
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <table class="table table-bordered" id="post-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Pots Tab Manager</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if($post)
                                @foreach($post as $post_data)
                                <tr>
                                    <td>{{$post_data->title}}</td>
                                    <td>{{$post_data->cat_info->title}}</td>
                                    <td><a href="{{route('post.show', $post_data->id)}}" class="btn btn-primary btn-sm ">Manage Post Tab</a></td>
                                    <td>
                                        @if($post_data->status=='active') 
                                            <span class="badge badge-success">active</span>
                                        @else
                                            <span class="badge badge-warning">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <a href="{{route('post.show', $post_data->id)}}" class="btn btn-info btn-xs m-r-5 float-left" data-toggle="tooltip" data-original-title="Manage Tabt"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{route('post.edit',$post_data->id)}}"  class="btn btn-primary btn-xs m-r-5 float-left" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                                        <form class="float-left" action="{{route('post.destroy',$post_data->id)}}" method="POST" onsubmit="return confirm('Are your sure?')">
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

        <style>
            .visitors-table tbody tr td:last-child {
                display: flex;
                align-items: center;
            }

            .visitors-table .progress {
                flex: 1;
            }

            .visitors-table .progress-parcent {
                text-align: right;
                margin-left: 10px;
            }
        </style>
       
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
        .dataTables_filter,.dataTables_length{
            display:none;
        }
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
            $('#post-table').DataTable({
                pageLength: 10,
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
