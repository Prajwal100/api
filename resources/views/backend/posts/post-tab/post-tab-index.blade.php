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
                <div class="ibox-title">Post Tab</div>
                <div class="ibox-title float-right">
                    <a href="{{route('post.tab.create')}}" class="btn btn-success btn-sm float-right">Add Post</a>
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
                                    <th>Tab Title</th>
                                    <th>Tab Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($post_tab)
                                     @foreach($post_tab as $data)
                                     <?php
                                         $tab_titles=DB::table('tabs')->where('id',$data->tab_id)->get();
                                        //  dd($tab_title);
                                     ?>
                                     <tr>
                                         
                                        @foreach($tab_titles as $tab_title)
                                        <td>{{$tab_title->title}}</td>
                                        <td>{{$tab_title->type}}</td>
                                        @endforeach
                                        
                                        
                                        
                                         <td>
                                             <form class="float-left" action="{{route('post.tab.delete',$data->id)}}" method="POST" onsubmit="return confirm('Are your sure?')">
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