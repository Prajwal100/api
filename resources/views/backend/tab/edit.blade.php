@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Update tab</div>
            </div>
            <div class="ibox-body">
               <form action="{{route('tab.update',$tab_data->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{$tab_data->title}}" placeholder="Enter title name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="active" {{($tab_data->status=='active') ? 'selected' : ''}}>active</option>
                            <option value="inactive" {{($tab_data->status=='inactive') ? 'selected' : ''}}>inactive</option>
    
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>

                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <footer class="page-footer">
            <div class="font-13">{{date('Y')}} © <b>{{env('APP_NAME')}}</b> - All rights reserved.</div>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </footer>
</div>
@endsection

@section('styles')
    <link href="{{asset('/vendor/summernote/summernote.min.css')}}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection
@section('scripts')
    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script src="{{asset('/vendor/summernote/summernote.min.js')}}"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
         $('#lfm').filemanager('image');
         $('#description').summernote();
    </script>
    
@endsection