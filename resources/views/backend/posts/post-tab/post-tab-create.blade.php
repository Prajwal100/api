@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Post Tab List</div>
            </div>
            <div class="ibox-body">
               <form action="{{route('post.tab.store')}}" method="POST">
                {{-- @csrf --}}
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="tab_id">Tab title</label>
                        <select name="tab_id" class="form-control" id="tab_id">
                            <option vlaue="">--Select tab title--</option>
                            @foreach($tabs as $tab)
                                <option value="{{$tab->id}}">{{$tab->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tab_type">Tab type</label>
                        <select name="tab_type" class="form-control" id="tab_type">
                           
                        </select>
                    </div>

                   <div id="table" class="d-none">
                        <div class="form-group">
                            <label for="parameter">Parameter</label>
                            <input name="parameter"type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                   </div>
                   <div id="snippet"  class="d-none">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title"type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="snippet">Code</label>
                            <input name="snippet"type="text" class="form-control">
                        </div>
                   </div>
                    {{-- @if($) --}}

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

@section('scripts')
    <script>
        $('#tab_id').change(function(){
            var tab_id=$(this).val();
            // alert(tab_id);
            if(tab_id !=null){
                // ajax call
                $.ajax({
                    url:"/admin/post-tab/"+tab_id+"/child",
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
                        var html_option;
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $.each(data,function(id,type){
                                    if(type=="snippet"){
                                        $('#snippet').removeClass('d-none');
                                        $('#table').addClass('d-none');

                                    }
                                    else{
                                        $('#snippet').addClass('d-none');
                                        $('#table').removeClass('d-none');
                                    }
                                    html_option += "<option value='"+id+"'>"+type+"</option>";
                                   
                                });
                            }
                            else{
                                console.log('no response data');
                            }
                        }
                        else{
                            $('#snippet').addClass('d-none');
                            $('#table').addClass('d-none');


                        }
                        $('#tab_type').html(html_option);

                    }
                });
            }
            else{

            }
        })
    </script>
@endsection