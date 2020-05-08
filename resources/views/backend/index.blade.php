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
                        <div class="m-b-5">TOTAL CATEGORY</div><i class="ti-shopping-cart widget-stat-icon"></i>
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
                        <div class="m-b-5">TOTAL POSTS</div><i class="ti-bar-chart widget-stat-icon"></i>
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
                        <div class="m-b-5">TOTAL INCOME</div><i class="fa fa-money widget-stat-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="ibox-body">
            <div class="table-responsive">
                {{-- <form method="POST" action="{{route('muldel')}}"> --}}
                    
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th ><button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete All Selected"><i class="fa fa-trash font-14"></i></buttton></th>
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
                                    <td>
                                        <label class="ui-checkbox">
                                            <input type="checkbox" name='muldel[]' value={{$post_data->id}}>
                                            <span class="input-span"></span>
                                        </label>
                                    </td>
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
        <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
        <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
</div>
@endsection