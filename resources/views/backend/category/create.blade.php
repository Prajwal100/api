@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Category List</div>
            </div>
            <div class="ibox-body">
               <form action="{{route('category.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Category Name</label>
                        <input type="text" name="title" placeholder="Enter category name" class="form-control" required>
                    </div>


                    {{-- <div class="form-group">
                        <label for="is_parent">Is Parent</label><br>
                        <input type="checkbox" name='is_parent' id='is_parent' value='1' checked > Yes                        
                    </div> --}}
{{-- 
                    <div class="form-group d-none" id='parent_cat_div'>
                        <label for="parent_id">Parent Category</label>
                        <select name="parent_id" class="form-control" placeholder='hdhd'>
                            <option value="">--Select any category--</option>
                            @foreach($parent_cats as $key=>$parent_cat)
                                <option value='{{$key}}'>{{$parent_cat}}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>

                        </select>
                    </div>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>

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
    <style>
        label{
            font-weight: 600;
        }
    </style>
@endsection
@section('scripts')

  
    <script>
        //  alert('is_checked');
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
@endsection