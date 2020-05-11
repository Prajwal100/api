@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Update Category</div>
            </div>
            <div class="ibox-body">
                
               <form action="{{route('category.update',$category_data->id)}}" method="POST" enctype="multipart/form-data">
                {{-- @csrf --}}
                {{csrf_field()}}
                {{method_field('PATCH')}}
                {{-- @method('PATCH') --}}
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="title" value="{{$category_data->title}}" placeholder="Enter category name" class="form-control" required>
                </div>

                {{-- <div class="form-group">
                    <label for="is_parent">Is Parent</label><br>
                    <input type="checkbox" name='is_parent' id='is_parent' value='1' {{($category_data->is_parent==1) ? 'checked' : ''}}> Yes                        
                </div>

                <div class="form-group {{($category_data->is_parent==1) ? 'd-none' : ''}}" id='parent_cat_div'>
                    <label for="parent_id">Parent Category</label>

                    <select name="parent_id" class="form-control" >
                        <option value="">--Select any category--</option>
                        @foreach($parent_cats as $key=>$parent_cat)
                            <option value='{{$key}}'  {{($key==$category_data->parent_id)? 'selected' : ''}}>{{$parent_cat}}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="number" class="form-control" value="{{$category_data->priority}}" name="priority">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="active" {{($category_data->status=='active') ? 'selected' : ''}}>active</option>
                        <option value="inactive" {{($category_data->status=='inactive') ? 'selected' : ''}}>inactive</option>

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
    <link href="{{asset('/summernote/summernote.min.css')}}" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{asset('/summernote/summernote.min.js')}}"></script>

  
    <script>
        $('#summary').summernote();
         $('#is_parent').change(function(){
             var is_checked=$('#is_parent').prop('checked');
             if(is_checked){
                $('#parent_cat_div').addClass('d-none');
                $('#parent_id').val('');
             }
             else{
                 $('#parent_cat_div').removeClass('d-none');
             }
         });
    </script>

    </script>
@endsection