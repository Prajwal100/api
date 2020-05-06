@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Post List</div>
            </div>
            <div class="ibox-body">
               <form action="{{route('post.store')}}" method="POST">
                {{-- @csrf --}}
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Enter title name" class="form-control" required>
                    </div>

                    {{-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" placeholder="Enter slug name" class="form-control">
                    </div> --}}

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" id="description" name="description" placeholder="Text description" rows=6 class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="cat_id">Category</label>
                        <select name="cat_id" class="form-control" id="cat_id">
                            <option>--Select Categories</option>
                            @foreach($parent_cats as $key=>$cats)
                                <option value="{{$cats->id}}">{{$cats->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group d-none" id="child_cat_div">
                        <label for="child_cat_id">Sub Category</label>
                        <select name="child_cat_id" class="form-control" id="child_cat_id">
                            <option>--Select Sub Categories</option>
                            @foreach($child_cats as $key=>$cats)
                                <option value="{{$cats->id}}">{{$cats->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option>Active</option>
                            <option>Inactive</option>
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
    <link href="{{asset('/summernote/summernote.min.css')}}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{asset('/summernote/summernote.min.js')}}"></script>


    <script>
         $('#description').summernote({
             height:150,
             placeholder:'Description'
         });
    </script>
    <script>
        $('#cat_id').change(function(){
            var cat_id=$(this).val();
            // alert(cat_id);
            if(cat_id !=null){
                // ajax call
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        // _token:token,
                        // parameter:value,
                        '_token': $('input[name=_token]').val(),
                    },
                    success:function(response){
                        console.log(response);

                        if(typeof(response)!='object'){
                            response=$.parseJSON(response);
                        }
                        var html_option="<option value=''>--Select any one--</option>";
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data,function(id,title){
                                    html_option += "<option value='"+id+"'>"+title+"</option>";
                                });
                            }
                            else{
                                console.log('no response data');
                            }
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);

                    }
                });
            }
            else{

            }
        })
    </script>
@endsection