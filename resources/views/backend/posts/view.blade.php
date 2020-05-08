@extends('backend.layouts.master')
@section('title','Admin || Dashboard')
@section('main-content')
<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="row">
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                </div>
            </div>
            <div class="ibox-head">
                <div class="ibox-title">Post View</div>
                <div class="ibox-title float-right">
                    {{-- <a href="{{route('post.create')}}" class="btn btn-success btn-sm float-right">Add Post</a> --}}
                </div>
            </div>
            <div class="ibox-body">
                <h4>{{$post->title}}</h4>
                <p>{!! $post->description !!}</p>
                <div id="tabSection">
                   <div class="row">
                        <div class="col-md-10">
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($tabs as $key=>$tab)
                                <li class="nav-item" id="tab{{$tab->id}}">
                                    <a class="nav-link {{($key==0) ? 'active' : ''}}" href="#tabBtn{{$tab->id}}" role="tab" data-toggle="tab" aria-selected="true">{{$tab->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" onclick="openPostTabModel()">Add Post-Tab</button>
                        </div> 
                    </div>          
                    <div class="tab-content">
                        @foreach($tabs as $tab)
                        @php($contents = \App\Models\PostTab::getData($post->id, $tab->id))
                        @foreach($contents as $content)
                        @endforeach
                        <div class="tab-pane" id="tabBtn{{$tab->id}}">
                            @if($content->id)
                            @if($tab->type=='table')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Parameter</th>
                                    <th>Description</th>
                                </tr>
                                @foreach($contents as $content)
                                <tr>
                                    <td>{{$content->parameter}}</td>
                                    <td>{{$content->description}}</td>
                                </tr>
                                @endforeach
                            </table>
                            @endif
                            @if($tab->type=='snippet')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th>Code</th>
                                </tr>
                                @foreach($contents as $content)
                                <tr>
                                    <td>{{$content->title}}</td>
                                    <td><pre>{{json_decode($content->snippet)}}</pre></td>
                                </tr>
                                @endforeach
                            </table>
                            @endif
                            @endif
                        </div>
                        @endforeach
                    </div>
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
<div class="modal" tabindex="-1" role="dialog" id="postTabModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Post Tab Manager</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('postTabManager.save')}}" method="post">
      <div class="modal-body">
            {!! csrf_field() !!}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input type="hidden" name="tab_type" id="tab_type">
            <div class="form-group">
                <select name="tab_id" id="selectedTab" class="form-control">
                    <option value="">Select Tab</option>
                    @foreach($tabs as $tab)
                    <option value="{{$tab->id}}">{{$tab->title}}</option>
                    @endforeach
                </select>
            </div>
            <div id="postTabTableSection" style="display:none;">
                <div class="form-group">
                    <label>Parameter</label>
                    <input type="text" name="parameter" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div id="postTabSnippetSection" style="display:none;">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <textarea name="snippet" id="snippet" rows="5" class="form-control"></textarea>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script>
    function openPostTabModel()
    {
        $('#postTabModel').modal('show');
    }
    var token = $('input[name=\'_token\']').val();
    $(document).ready(function(){
       $('#selectedTab').change(function(){
            var id = $(this).val();
            $.ajax({
            type: "GET",
            url: "{{route('postTab.ajaxTab')}}",
            data: "_token="+token+"&id="+id,
            cache: false,
            success: function(data){
              console.log(data)
              $('#tab_type').val(data)
              if(data == 'table')
              {
                $('#postTabTableSection').show();
              }else{
                $('#postTabTableSection').hide();
              }
              if(data == 'snippet')
              {
                $('#postTabSnippetSection').show();
              }else{
                $('#postTabSnippetSection').hide();
              }
            },
            error: function(error){
              alert('failed')
            }
        });
        }) 
    })
</script>
@endsection