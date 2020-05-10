@extends('frontend.layouts.master')


@section('main-content')
    
<div class="container-fluid">
  <div class="row">
  <!-- Mobile nav toggler -->
  <a href="#" class="open-mobilenav"><span class="glyphicon glyphicon-menu-hamburger"></span><img src="frontend/images/logo.png" class="img-responsive"></a>
  <!-- Sidenav -->
    <div class="no-padding sidebar" id="sidenav">
      <div class="logo"><a href=""><img src="frontend/images/logo.png" class="img-responsive"></a></div>
      <div class="navigation" id="scroll-nav">
        <ul class="nav nav-pills nav-stacked">
          <li class="active">
            <a href="#introduction"><h4 class="title">Introduction</h4></a>
          </li>
        </ul>
        @foreach($categories as $category)
        <ul class="nav nav-pills nav-stacked">
          <li>
          <a href="#{{\App\Models\Post::getFirstChildSlug($category->id)}}"><h4 class="title"><b class="caret"></b>{{$category->title}}</h4></a>
            <ul class="sub-menu">
              @if(isset($category->post))
                @foreach($category->post as $k=>$post)
                  <li><a href="#{{$post->slug}}" title="{{$post->slug}}">{{$post->title}}</a></li>
                @endforeach
              @endif
              {{-- <li><a href="#signIn" title="SignIn">SignIn</a></li>
              <li><a href="#RenewToken" title="RenewToken">RenewToken</a></li> 
              <li><a href="#GetDoNotDisturbStatusSettings" title="Get DoNotDisturb Status Settings">Get DoNotDisturb Status Settings</a></li>
              <li><a href="#GetDoNotDisturbSettings" title="Get DoNotDisturb Settings">Get DoNotDisturb Settings</a></li>
              <li><a href="#SetDoNotDisturbStatusSettings" title="Set DoNotDisturb Status Settings">Set DoNotDisturb Status Settings</a></li>
              <li><a href="#SetDoNotDisturbSettings" title="Set DoNotDisturb Settings">Set DoNotDisturb Settings</a></li>
              <li><a href="#AccountListQuery" title="Account List Query">Account List Query</a></li>
              <li><a href="#SubAccountList" title="Get List of Sub-Accounts">Get List of Sub-Accounts </a></li>
              <li><a href="#GetUserRoleInfo" title="Get User Role Information">Get User Role Information</a></li>
              <li><a href="#SetUserRoleInfo" title="Set User Role Information">Set User Role Information</a></li>
              <li><a href="#GetUserRoleInfo" title="Get Role Information">Get Role Information</a></li>
              <li><a href="#SetUserRoleInfo" title="Set Role Information">Set Role Information</a></li>
              <li><a href="#GetAllRoles" title="Get All Roles ">Get All Roles </a></li> --}}
            </ul>
          </li>
        </ul>
        @endforeach
        {{-- <ul class="nav nav-pills nav-stacked">
          <li>
          <a href="#signIn"><h4 class="title"><b class="caret"></b>Account Ops</h4></a>
            <ul class="sub-menu">
              <li><a href="#signIn" title="SignIn">SignIn</a></li>
              <li><a href="#RenewToken" title="RenewToken">RenewToken</a></li> 
              <li><a href="#GetDoNotDisturbStatusSettings" title="Get DoNotDisturb Status Settings">Get DoNotDisturb Status Settings</a></li>
              <li><a href="#GetDoNotDisturbSettings" title="Get DoNotDisturb Settings">Get DoNotDisturb Settings</a></li>
              <li><a href="#SetDoNotDisturbStatusSettings" title="Set DoNotDisturb Status Settings">Set DoNotDisturb Status Settings</a></li>
              <li><a href="#SetDoNotDisturbSettings" title="Set DoNotDisturb Settings">Set DoNotDisturb Settings</a></li>
              <li><a href="#AccountListQuery" title="Account List Query">Account List Query</a></li>
              <li><a href="#SubAccountList" title="Get List of Sub-Accounts">Get List of Sub-Accounts </a></li>
              <li><a href="#GetUserRoleInfo" title="Get User Role Information">Get User Role Information</a></li>
              <li><a href="#SetUserRoleInfo" title="Set User Role Information">Set User Role Information</a></li>
              <li><a href="#GetUserRoleInfo" title="Get Role Information">Get Role Information</a></li>
              <li><a href="#SetUserRoleInfo" title="Set Role Information">Set Role Information</a></li>
              <li><a href="#GetAllRoles" title="Get All Roles ">Get All Roles </a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-stacked">
          <li>
          <a href="#InitiateAnyCampaign"><h4 class="title"><b class="caret"></b>Ushur Engagements</h4></a>
            <ul class="sub-menu">
              <li><a href="#InitiateAnyCampaign" title="Initiate Any Campaign">Initiate Any Campaign</a></li>
              <li><a href="#NotifyAMsg" title="Notify a Message">Notify a Message</a></li>
              <li><a href="#InitiateCampaignWithaRequestId" title="Initiate Campaign With a Request Id">Initiate Campaign With a Request Id</a></li>
              <li><a href="#GetDetailedResponsesForaRequestId" title="Get Detailed Responses For a Request Id">Get Detailed Responses For a Request Id</a></li>
              <li><a href="#GetTaggedResponsesForaRequestId" title="Get Tagged Responses For a Request Id">Get Tagged Responses For a Request Id</a></li>
              <li><a href="#QueryFilters" title="Query Filters">Query Filters</a></li>
              <li><a href="#GetAllDetailedResponses" title="Get All Detailed Responses">Get All Detailed Responses</a></li>
              <li><a href="#GetTaggedResponses" title="Get Tagged Responses">Get Tagged Responses</a></li>
              <li><a href="#SetCallBackNumber" title="Set Call Back Number">Set Call Back Number</a></li>
              <li><a href="#IncomingEmailProcesing" title="Incoming Email Processing">Incoming Email Processing</a></li>
              <li><a href="#getBlackListInfo" title="Get BlackList Information">Get BlackList Information</a></li>
              <li><a href="#blackListPhone" title="getBlackList A PhoneNumber"> BlackList A PhoneNumber</a></li>
              <li><a href="#removePhoneFromBlackList" title="Remove PhoneNumber From BlackList">Remove PhoneNumber From BlackList</a></li>
              <li><a href="#getWhiteListInfo" title="Get WhiteList Information">Get WhiteList Information</a></li>
              <li><a href="#whiteListPhone" title="WhiteList A PhoneNumber">WhiteList A PhoneNumber</a></li>
              <li><a href="#removePhoneFromWhiteList" title="Remove PhoneNumber From WhiteList">Remove PhoneNumber From WhiteList</a></li>
              <li><a href="#GetBlackToWhiteListed" title="List PhoneNumbers from Black To WhiteList">List PhoneNumbers from Black To WhiteList</a></li>
              <li><a href="#GetUeTagList" title="Get UeTag List">Get UeTag List</a></li>
              <li><a href="#CancelUshur" title="Cancel Ushur/Campaign">Cancel Ushur/Campaign</a></li>
            </ul>
          </li>
        </ul> --}}
        </div>
    </div>

    <!-- Introduction starts -->
    <div id="introduction" class="doc-content no-padding row-introduction">
      <div class="col-sm-12 description equal-item">
        <h2 class="desc-title">Ushur API Documentation</h2>
        <p>Ushur is an AI-powered platform that combines process automation and conversational interfaces to automate enterprise workflows.  In doing so Ushur delivers great value to those enterprises by eliminating manual work and freeing up human capital for higher valued business needs. </p>

        <p> Ushur’s platform offers a template-based approach to solving specific use-cases for companies. The platform offers a state-of-the-art linguistics engine, together with a drag and drop process and conversation builder, invisible apps that deliver app-like experiences without asking customers to download an app and integration hooks into standard and proprietary systems of record. Along with this infrastructure, Ushur offers real-time monitoring, audit capabilities and a powerful analytics engine. 
        </p>
      </div>
    </div>
    <!-- // End of Introduction -->
    
    @foreach($categories as $category)
      @if(isset($category->post))
        @foreach($category->post as $k=>$post)
          <div id="{{$post->slug}}" class="doc-content no-padding">
            <div class="col-sm-5 description equal-item">
                @if($k==0)
                <h2 class="desc-title">{{$category->title}}</h2>
                @endif
                <h3 class="sub-title">{{$post->title}}</h3>
                <p>{!! $post->description !!}</p>
            </div>
            <div class="col-sm-7 docs equal-item">
              @if(isset($post->tab_ids))
                @php($tabs = \App\Models\Tab::getTabs($post->tab_ids))
                  <ul class="nav nav-tabs" role="tablist">
                 
                    @foreach($tabs as $key=>$tab)
                      <li role="presentation" class="@if($key==0) active @endif"><a href="#post{{$post->id}}tab{{$tab->id}}" role="tab" data-toggle="tab">{{$tab->title}}</a></li>
                    @endforeach
                  
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    @foreach($tabs as $key=>$tab)
                    @php($contents = \App\Models\PostTab::getData($post->id, $tab->id))
                      <div role="tabpanel" class="tab-pane @if($key==0) active @endif" id="post{{$post->id}}tab{{$tab->id}}">
                        @if($tab->type=='table')
                          <table class="table table-striped table-responsive">
                            <thead>
                              <tr>
                                <th align="left">Parameter</th>
                                <th align="left">Description</th>
                              </tr>
                            </thead>
                            <tbody>
                               @foreach($contents as $content)
                              <tr>
                                <td class="notranslate" align="left">{{$content->parameter}}</td>
                                <td align="left">{{$content->description}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table> 
                        @endif
                        @if($tab->type=='snippet')
                          @foreach($contents as $content)
                          <label>{{$content->title}}</label>
                          <pre class="language-http copytoclipboard"><code>{{json_decode($content->snippet)}}</code></pre>
                          @endforeach
                        @endif
                      </div>
                    @endforeach
                  </div>
              @endif
            </div>
          </div>
        @endforeach
      @endif
    @endforeach
@endsection