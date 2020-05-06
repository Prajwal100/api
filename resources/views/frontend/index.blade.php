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
					<!--	<li><a href="#GetStats" title="Get Status">Get Status </a></li>
						<li><a href="#getCampaignList" title="Get List of all Campaigns">Get List of all Campaigns</a></li>
						<li><a href="#getOngoingCampaigns" title="Get Ongoing Campaigns">Get Ongoing Campaigns</a></li> -->
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
				</ul>
				<ul class="nav nav-pills nav-stacked">
                	<li>
                	<a href="#AddorUpdateEnterpriseDataonUshur"><h4 class="title"><b class="caret"></b>Enterprise Data API</h4></a>
                		<ul class="sub-menu">
                			<li><a href="#AddorUpdateEnterpriseDataonUshur" title="Add or Update Enterprise Data on Ushur">Add or Update Enterprise Data on Ushur</a></li>
		                	<li><a href="#GetEnterpriseDataonUshur" title="Get Enterprise Data on Ushur">Get Enterprise Data on Ushur</a></li>
						<!--	<li><a href="#GetEnterpriseDataonUshur" title="Get Enterprise Data on Ushur">Get Enterprise Data on Ushur</a></li> -->
		                	<li><a href="#DeleteEnterpriseDataonUshur" title="Delete Enterprise Data on Ushur">Delete Enterprise Data on Ushur</a></li>
		                	<li><a href="#InitiateCampaignWithEnterpriseData" title="Initiate Campaign With Enterprise Data">Initiate Campaign With Enterprise Data</a></li>
                		</ul>
                	</li>
				</ul>
				<ul class="nav nav-pills nav-stacked">
					<li>
					<a href="#AddUpdateEnterpriseContact"><h4 class="title"><b class="caret"></b>Enterprise Contact API</h4></a>
						<ul class="sub-menu">
							<li><a href="#AddUpdateEnterpriseContact" title="Add or Update Enterprise Contact on Ushur">Add or Update Enterprise Contact on Ushur</a></li>
			                <li><a href="#GetEnterpriseContacts" title="Get Enterprise Contacts on Ushur">Get Enterprise Contacts on Ushur</a></li>
			                <li><a href="#DeleteEnterpriseContact" title="Delete Enterprise Contact on Ushur">Delete Enterprise Contact on Ushur</a></li>
			                <li><a href="#SetContactDoNotDisturb" title="Set Contact DoNotDisturb Settings">Set Contact DoNotDisturb Settings</a></li>
			                <li><a href="#GetContactDoNotDisturb" title="Get Contact DoNotDisturb Settings">Get Contact DoNotDisturb Settings</a></li>
						</ul>
					</li>
                </ul>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="#PhoneAuthService"><h4 class="title"><b class="caret"></b>Authentication Services</h4></a>
						<ul class="sub-menu">
							<li><a href="#PhoneAuthService" title="Phone Auth Service">Phone Auth Service</a></li>
                	        <li><a href="#ConfirmPhoneNumber" title="Confirm Phone Number">Confirm Phone Number</a></li>
					    </ul>
					</li>
                </ul>
				<ul class="nav nav-pills nav-stacked">
					<li>
					<a href="#GenerateShortURL"><h4 class="title"><b class="caret"></b>URL Services</h4></a>
						<ul class="sub-menu">
							<li><a href="#GenerateShortURL" title="Generate Short URL">Generate Short URL</a></li>
			                <li><a href="#GetShortURLList" title="Get Short URL List">Get Short URL List</a></li>
			                <li><a href="#ActionURL" title="Action URL">Action URL</a></li>
						</ul>
					</li>	                
                </ul>
               <!-- <ul class="nav nav-pills nav-stacked">
                	<li>
                	    <a href="#SetDomain"><h4 class="title"><b class="caret"></b>Domain Services</h4></a>
                		<ul class="sub-menu">
                			<li><a href="#SetDomain" title="Set Domain">Set Domain</a></li>
	                        <li><a href="#GetDomainStats" title="Get Domain Stats">Get Domain Stats</a></li>
                		</ul>
                	</li>
	            </ul>  -->
				<ul class="nav nav-pills nav-stacked">
					<li>
					<a href="#GetEnterpriseStats"><h4 class="title"><b class="caret"></b>Stats Services</h4></a>
						<ul class="sub-menu">
							<li><a href="#GetEnterpriseStats" title="Get Enterprise Stats">Get Enterprise Stats</a></li>
                	        <li><a href="#GetCampaignStats" title="Get Campaign Stats">Get Campaign Stats</a></li>
						</ul>
					</li>
                </ul>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="#GetChatHistory"><h4 class="title"><b class="caret"></b>Chat Services</h4></a>
						<ul class="sub-menu">
							<li><a href="#GetChatHistory" title="Get Chat History">Get Chat History</a></li>
						</ul>
					</li>
                </ul>
                <ul class="nav nav-pills nav-stacked">
	                <li>
	                <a href="#ReserveUshurID"><h4 class="title"><b class="caret"></b>UshurID Services</h4></a>
	                	<ul class="sub-menu">
	                		<li><a href="#ReserveUshurID" title="Reserve Ushur ID">Reserve Ushur ID</a></li>
	                        <li><a href="#SaveUshurID" title="Save Ushur ID">Save Ushur ID</a></li>
	                     <!--   <li><a href="#SetModes" title="Set Modes">Set Modes</a></li> -->
	                	</ul>
	                </li>
                </ul>
                <ul class="nav nav-pills nav-stacked">
	                <li>
	                	<a href="#GetAvailabilityStatus"><h4 class="title"><b class="caret"></b>Utility Services</h4></a>
	                	<ul class="sub-menu">
	                		<li><a href="#GetAvailabilityStatus" title="Get Availability Status">Get Availability Status</a></li>
			                <li><a href="#GetPhoneNumber" title="Get Phone Number">Get Phone Number</a></li>
			                <li><a href="#GetTimezone" title="Get Timezone">Get Timezone</a></li>
			                <li><a href="#SetTimezone" title="Set Timezone">Set Timezone</a></li>
			                <li><a href="#GetLocation" title="Get Location">Get Location</a></li>
			                <li><a href="#SaveAppearance" title="Save Appearance">Save Appearance</a></li>
							<li><a href="#GetUshurActivities" title="Get Ushur Activities">Get Ushur Activities </a></li>
							<li><a href="#GetUshurActivity" title="Get Ushur Activity">Get Ushur Activity </a></li>
			                <li><a href="#ResponseCodes" title="Response Codes">Response Codes</a></li>
	                	</ul>
	                </li>
                </ul>
			</div>
		</div>

		<!-- Introduction starts -->
		<div id="introduction" class="doc-content no-padding row-introduction">
			<div class="col-sm-12 description equal-item">
				<h2 class="desc-title">Ushur API Documentation</h2>
				<p>Ushur is an AI-powered platform that combines process automation and conversational interfaces to automate enterprise workflows.  In doing so Ushur delivers great value to those enterprises by eliminating manual work and freeing up human capital for higher valued business needs. </p>

<p> Ushur’s platform offers a template-based approach to solving specific use-cases for companies. The platform offers a state-of-the-art linguistics engine, together with a drag and drop process and conversation builder, invisible apps that deliver app-like experiences without asking customers to download an app and integration hooks into standard and proprietary systems of record. Along with this infrastructure, Ushur offers real-time monitoring, audit capabilities and a powerful analytics engine. 
</p>
<!--<p> Ushur platform comes bundles with a rich set of APIs. In order to use the APIs, it is important to create an account with Ushur. 
</p>
<p><h3 class="sub-title">Account Creation:</h3>
To add Ushur to your application, you will need to first create an account with Ushur. The following signup-link can be used to create an account:

<p><a href="https://<community-server>.ushur.me/mob3.0/signup/" target="_blank">https://<community-server>.ushur.me/mob3.0/signup</a></p>

Once you create an account, you will need to activate the account by signing-in using the  URL :

<p><a href="https://<community-server>.ushur.me/mob3.0/auth/" target="_blank">https://<community-server>.ushur.me/mob3.0/auth</a></p>

The first-time sign-in process will prompt for a mobile number and a business name to be added to the account. This is a mandatory process. Without completing this step, your account will not be activated and usable. 
<!-- The APIs have been grouped under the following headings:<br>
 1. Account Ops<br>
 2. Ushur Engagements<br>
 3. Enterprise Data APIs<br>	
 3. Enterprise Data APIs<br>	
 4. Enterprise Contact API<br>
 5. Authentication Services<br>
 6. URL Services<br>
 7. Domain Services<br>
 8. Stats Services<br>
 9. Chat Services<br>
 10. UshurID Services<br>
 11. Utility Services<br> 
 </p> -->
			</div>
		</div>
		<!-- // End of Introduction -->
		
		
		
		
		<!-- Signin starts -->
		<div id="signIn" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
					<h2 class="desc-title">Account Operations</h2>
					<h3 class="sub-title">Sign In</h3>
					<p>This is the initial API that would take in the credentials email and password for the account and return back token id which will be used in various other API calls. When other API fails to access the account because token id had expired, the application is expected to initiate this sign-in process again to retrieve the new token for further interactions with Ushur.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#signIn_RequestParameter" role="tab" data-toggle="tab">Request Parameter</a></li>
			<!--    <li role="presentation"><a href="#signIn_RequestSample1" aria-controls="signIn_RequestSample1" role="tab" data-toggle="tab">GET Sample</a></li>  -->
			     <li role="presentation"><a href="#signIn_RequestSample2" aria-controls="signIn_RequestSample2" role="tab" data-toggle="tab">POST Sample</a></li>
			    <li role="presentation"><a href="#signIn_JSONResponseSample" aria-controls="signIn_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			    <li role="presentation"><a href="#signIn_ResponseParameters" aria-controls="signIn_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
			  </ul>
			  <!-- Tab panes -->
			  <div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="signIn_RequestParameter">
			  	<table class="table table-striped table-responsive">
						<thead>
							<tr>
							  <th align="left">Parameter</th>
							  <th align="left">Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td class="notranslate" align="left">email</td>
							  <td align="left">Users can login to their account using this email identifier they originally signed-up with.</td>
							</tr>
							<tr>
							  <td class="notranslate" align="left">password</td>
							  <td align="left">Password for the account.</td>
							</tr>
						</tbody>
					</table>
			  </div>
			<!--    <div role="tabpanel" class="tab-pane" id="signIn_RequestSample1">
			    	<pre class="language-http copytoclipboard"><code>Method: GET
URL:  https://community.ushur.me/rest/login?email=ushurtester@gmail.com&password=testushur</code></pre>
			    </div> -->
			    <div role="tabpanel" class="tab-pane" id="signIn_RequestSample2">
			    	<pre class="language-http copytoclipboard"><code>Method: POST
URL:  https://community.ushur.me/rest/login
Content-Type: application/json

{
"email":"ushurtester@gmail.com",
"password":"testushur"
}
</code></pre>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="signIn_JSONResponseSample">
			    <label>Success</label>
			    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": "200",
  "tokenId": "eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJiYmQzMjIyNy0zMTY0LTRmNGEtYmNjYy1jMzdjZTg1MjlmMzYiLCJpYXQiOjE1NTkyNzYxNDEsInN1YiI6IkFjY291bnRBdXRoIiwiaXNzIjoiVVNIVVIiLCJhY2NvdW50RW5hYmxlZCI6IlkiLCJ1c2VyQWNjb3VudCI6IkdVUlVSQUpBLktPU0lHSUBVU0hVUi5DT00iLCJleHAiOjE1NTkyODMzNDF9.m_AQBIoUPdLMqrrBZ2S7pTAnsrkDLVpAGyLif2dQR9M",
  "emailId": "ushurtester@gmail.com",
  "nickName": "test4ushur",
  "tokenLeaseTime": "120",
  "tokenRenewThreshold": "3"
  
  }
   </code></pre>

<label>Failure (Invalid Email Address)</label>
<pre class="language-http copytoclipboard"><code>{
  "status": "failure",
  "respCode": "403",
  "data": null,
  "infoText": "Account not found",
}</code></pre>

<label>Failure (Invalid Password)</label>
<pre class="language-http copytoclipboard"><code>{
  "status": "failure",
  "respCode": "200",
  "infoText": "You are not a valid user",
  "emailId": "ushurtester@gmail.com"
}</code></pre>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="signIn_ResponseParameters">
			    	<table class="table table-striped table-responsive">
		                <thead>
			                <tr>
			                  <th align="left">Parameter</th>
			                  <th align="left">Description</th>
			                </tr>
		                </thead>
			                <tbody>
				                <tr>
				                  <td class="notranslate" align="left">status</td>
				                  <td align="left">A textual indication of success or failure.</td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">respCode</td>
				                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure. See <a href="#responseCodes">here</a> for all codes.</td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">tokenId</td>
				                  <td align="left">For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission.  This tokenId must be sent in all API requests for other services. 
				                    <br><br>
				                    For security reasons, Ushur has some mechanisms whereby it can internally regenerate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.
				                  </td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">emailId</td>
				                  <td align="left">The submitted email identifier is returned back for correlation purposes. If there are multiple outstanding requests, this helps the caller of the APIs to correlate requests and responses.</td>
				                </tr>
				                 <tr>
				                  <td class="notranslate" align="left">nickName</td>
				                  <td align="left">The nick Name in the account is returned back.</td>
				                </tr>
								 <tr>
				                  <td class="notranslate" align="left">tokenLeaseTime</td>
				                  <td align="left">The lease duration is time to live value: the time in seconds for which the token is valid</td>
				                </tr>
								 <tr>
				                  <td class="notranslate" align="left">tokenRenewThreshold</td>
				                  <td align="left">The maximum number of times the token can be renewed</td>
				                </tr>
			                </tbody>
                	</table> 
			    </div>
			  </div>
					
			</div>
		</div>
		<!-- // End of signin -->

<!-- Renew Token Starts here -->

		<div id="RenewToken" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
					<h3 class="sub-title">RenewToken</h3>
					<p>This is the API that would be required to renew the token which was given by system during login procedure , it takes the current exisiting token as input and returns the new token with new lease time </p>
			</div>
			<div class="col-sm-7 docs equal-item">
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#RenewToken_RequestParameter" role="tab" data-toggle="tab">Request Parameter</a></li>
			    <li role="presentation"><a href="#RenewToken_RequestSample2" aria-controls="RenewToken_RequestSample2" role="tab" data-toggle="tab">POST Sample</a></li>
			    <li role="presentation"><a href="#RenewToken_JSONResponseSample" aria-controls="RenewToken_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			    <li role="presentation"><a href="#RenewToken_ResponseParameters" aria-controls="RenewToken_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
			  </ul>
			  <!-- Tab panes -->
			  <div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="RenewToken_RequestParameter">
			  	<table class="table table-striped table-responsive">
						<thead>
							<tr>
							  <th align="left">Parameter</th>
							  <th align="left">Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td class="notranslate" align="left">tokenId</td>
							  <td align="left">  For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission.  This tokenId must be sent in all API requests for other services. 
				                    <br><br>
				                    For security reasons, Ushur has some mechanisms whereby it can internally regenerate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.   </td>
							</tr>
						</tbody>
					</table>
			  </div>
			  <div role="tabpanel" class="tab-pane" id="RenewToken_RequestSample2">
			    	<pre class="language-http copytoclipboard"><code>
					Method: POST
					URL:  https://community.ushur.me/rest/authtoken/renew
					Content-Type: application/json

					{
					"tokenId": "eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJiYmQzMjIyNy0zMTY0LTRmNGEtYmNjYy1jMzdjZTg1MjlmMzYiLCJpYXQiOjE1NTkyNzYxNDEsInN1YiI6IkFjY291bnRBdXRoIiwiaXNzIjoiVVNIVVIiLCJhY2NvdW50RW5hYmxlZCI6IlkiLCJ1c2VyQWNjb3VudCI6IkdVUlVSQUpBLktPU0lHSUBVU0hVUi5DT00iLCJleHAiOjE1NTkyODMzNDF9.m_AQBIoUPdLMqrrBZ2S7pTAnsrkDLVpAGyLif2dQR9M"
					}
					</code>
					</pre>

			   </div>
			   <div role="tabpanel" class="tab-pane" id="RenewToken_JSONResponseSample">
			   <label>Success</label>
			   <pre class="language-http copytoclipboard">
			   <code>
			   {
				"status": "success",
				"respCode": "200",
				"tokenId": "eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIyYjY0MmIzYi1iYTcyLTQ2OWEtYTExNy1lZWIxOTRjZDU3N2MiLCJpYXQiOjE1NjA0MDY3NzksInN1YiI6IkFjY291bnRBdXRoIiwiaXNzIjoiVVNIVVIiLCJhY2NvdW50RW5hYmxlZCI6IlkiLCJ1c2VyQWNjb3VudCI6IlNIVUJIQURBLlBBVEhBS0BVU0hVUi5DT00iLCJleHAiOjE1NjA0MTM5Nzl9.cT14SSCdossIzMMtupVhgTAhI9Dr3oogFoTAqb4h7ck",
				"tokenLeaseTime": "120",
				"tokenRenewThreshold": "3"
  				}
				</code>
				</pre>

				<label>Failure (Invalid Token)</label>
				<pre class="language-http copytoclipboard"><code>{
				"status": "failure",
				"respCode": "401",
				"data": null,
				"infoText": "You are not a valid user",
				}</code></pre>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="RenewToken_ResponseParameters">
			    	<table class="table table-striped table-responsive">
		                <thead>
			                <tr>
			                  <th align="left">Parameter</th>
			                  <th align="left">Description</th>
			                </tr>
		                </thead>
			                <tbody>
				                <tr>
				                  <td class="notranslate" align="left">status</td>
				                  <td align="left">A textual indication of success or failure.</td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">respCode</td>
				                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure. See <a href="#responseCodes">here</a> for all codes.</td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">tokenId</td>
				                  <td align="left">For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission.  This tokenId must be sent in all API requests for other services. 
				                    <br><br>
				                    For security reasons, Ushur has some mechanisms whereby it can internally regenerate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.
				                  </td>
				                </tr>
				                <tr>
				                  <td class="notranslate" align="left">tokenLeaseTime</td>
				                  <td align="left">The lease duration is time to live value: the time in seconds for which the token is valid</td>
				                </tr>
								 <tr>
				                  <td class="notranslate" align="left">tokenRenewThreshold</td>
				                  <td align="left">The maximum number of times the token can be renewed</td>
				                </tr>
			                </tbody>
                	</table> 
			    </div>
			  </div>
			</div>
		</div>

<!-- Renew Token Ends here --->


<!-- Get Do Not Disturb Status Settings  -->
		<div id="GetDoNotDisturbStatusSettings" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
					<h3 class="sub-title">Get DoNotDisturb Status Settings</h3>
					<p>This is to retrieve the DoNotDisturb Status settings for the Ushur Account. An Account can represent an enterprise.</p>					
			</div>
			<div class="col-sm-7 docs equal-item">
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#GetDoNotDisturbStatusSettings_RequestParameter" aria-controls="GetDoNotDisturbStatusSettings_RequestParameter" role="tab" data-toggle="tab">Request Parameter</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbStatusSettings_DirectForm" aria-controls="GetDoNotDisturbStatusSettings_DirectForm" role="tab" data-toggle="tab">Direct Form</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbStatusSettings_JSONResponseSample" aria-controls="GetDoNotDisturbStatusSettings_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbStatusSettings_ResponseParameters" aria-controls="GetDoNotDisturbStatusSettings_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
			  </ul>

			<div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="GetDoNotDisturbStatusSettings_RequestParameter">
			  <table class="table table-striped table-responsive">
						<thead>
						<tr>
						  <th align="left">Parameter</th>
						  <th align="left">Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						  <td class="notranslate" align="left">userName</td>
						  <td align="left">This should be email address which Users used to login to their account when they originally signed-up with.</td>
						</tr>
						<tr>
						  <td class="notranslate" align="left">token</td>
						  <td align="left">The credential for identifying the account. This is the token that was sent by Ushur as part of login response</td>
						</tr>
						</tbody>
				</table>
			  </div>

			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbStatusSettings_DirectForm">
			  	<p>A GET Form is shown for a login:</p>
        {{-- <pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/doNotDisturb/getStatus?userName={{email}}&token={{token}}</code></pre> --}}
        
			  </div>
			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbStatusSettings_JSONResponseSample">
			  	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": {
      "dndDateStatus": "Y",
      "dndTimeStatus": "Y"
    },
    "infoText": "DND status retrieved successfully."
}</code></pre>
<label>Failure</label>
<pre class="language-http copytoclipboard"><code>{
  "status": "failure",
  "respCode": "404",
  "data":null,
  "infoText": "Account not found",
}</code></pre>
			  </div>
			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbStatusSettings_ResponseParameters">
			  	<table class="table table-striped table-responsive">
	                <thead>
		                <tr>
		                  <th align="left">Parameter</th>
		                  <th align="left">Description</th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr>
		                  <td class="notranslate" align="left">status</td>
		                  <td align="left">A textual indication of success or failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">respCode</td>
		                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">data</td>
		                  <td align="left">A JSON Array of date status and time status.  A response can be a null array when there are no DND Settings. </td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">infoText</td>
		                  <td align="left">A description of the response for the submitted request.</td>
		                </tr>
	                </tbody>
                </table>
			  </div>
			</div>
				
			</div>
		</div>
		<!--// End of Get Do Not Disturb Status Settings  -->


		<!-- Get Do Not Disturb Settings  -->
		<div id="GetDoNotDisturbSettings" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
					<h3 class="sub-title">Get DoNotDisturb Settings</h3>
					<p>This is to retrieve the DoNotDisturb settings for the Ushur Account. An Account can represent an enterprise.</p>					
			</div>
			<div class="col-sm-7 docs equal-item">
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#GetDoNotDisturbSettings_RequestParameter" aria-controls="GetDoNotDisturbSettings_RequestParameter" role="tab" data-toggle="tab">Request Parameter</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbSettings_DirectForm" aria-controls="GetDoNotDisturbSettings_DirectForm" role="tab" data-toggle="tab">Direct Form</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbSettings_JSONResponseSample" aria-controls="GetDoNotDisturbSettings_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			    <li role="presentation"><a href="#GetDoNotDisturbSettings_ResponseParameters" aria-controls="GetDoNotDisturbSettings_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
			  </ul>

			<div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="GetDoNotDisturbSettings_RequestParameter">
			  <table class="table table-striped table-responsive">
						<thead>
						<tr>
						  <th align="left">Parameter</th>
						  <th align="left">Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						  <td class="notranslate" align="left">userName</td>
						  <td align="left">This should be email address which Users used to login to their account when they originally signed-up with.</td>
						</tr>
						<tr>
						  <td class="notranslate" align="left">token</td>
						  <td align="left">The credential for identifying the account. This is the token that was sent by Ushur as part of login response</td>
						</tr>
						</tbody>
				</table>
			  </div>

			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbSettings_DirectForm">
			  	<p>A GET Form is shown for a login:</p>
				{{-- <pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/doNotDisturb/get?userName={{email}}&token={{token}}</code></pre> --}}
			  </div>
			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbSettings_JSONResponseSample">
			  	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": [
    {
      "time": "20:30,6:00",
      "day": "mon,tue"
    },
    {
      "time": "22:00,6:00",
      "day": "weekends"
    }
  ],
  "infoText": "DND schedule retrieved successfully."
}</code></pre>
<label>Failure</label>
<pre class="language-http copytoclipboard"><code>{
  "status": "failure",
  "respCode": "404",
  "data":null,
  "infoText": "Account not found",
}</code></pre>
			  </div>
			  <div role="tabpanel" class="tab-pane" id="GetDoNotDisturbSettings_ResponseParameters">
			  	<table class="table table-striped table-responsive">
	                <thead>
		                <tr>
		                  <th align="left">Parameter</th>
		                  <th align="left">Description</th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr>
		                  <td class="notranslate" align="left">status</td>
		                  <td align="left">A textual indication of success or failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">respCode</td>
		                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">data</td>
		                  <td align="left">A JSON Array of time and day.  A response can be a null array when there are no DND Settings. The time is in 24 hour format.  Day values can be weekdays, weekends, list of days or a single day.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">infoText</td>
		                  <td align="left">A description of the response for the submitted request.</td>
		                </tr>
	                </tbody>
                </table>
			  </div>
			</div>
				
			</div>
		</div>
		<!--// End of Get Do Not Disturb Settings  -->


		<!-- Set DoNotDisturb Status Settings  -->
		<div id="SetDoNotDisturbStatusSettings" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set DoNotDisturb Status Settings</h3>
				<p>This is to set the DoNotDisturb Status for the Ushur Account. An Account can represent an enterprise.</p>				
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetDoNotDisturbStatusSettings_RequestParameters" aria-controls="SetDoNotDisturbStatusSettings_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbStatusSettings_DirectForm" aria-controls="SetDoNotDisturbStatusSettings_DirectForm" role="tab" data-toggle="tab">Direct Form</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbStatusSettings_JSONResponseSample" aria-controls="SetDoNotDisturbStatusSettings_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbStatusSettings_ResponseParameters" aria-controls="SetDoNotDisturbStatusSettings_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetDoNotDisturbStatusSettings_RequestParameters">
    	<table class="table table-striped table-responsive">
					<thead>
					<tr>
					  <th align="left">Parameter</th>
					  <th align="left">Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					  <td class="notranslate" align="left">userName</td>
					  <td align="left">Users can access their account using the email identifier they originally signed-up with.</td>
					</tr>
					<tr>
	                  <td class="notranslate" align="left">tokenId</td>
	                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
	 as part of login response.</td>
					</tr>

	                <tr>
	                  <td class="notranslate" align="left">raw json data</td>
	                    <td align="left">
						[
					    {
							"dndTimeStatus": "Y",
							"dndDateStatus": "Y"
						}
					    ]
					</td>
					</tr>
					</tbody>
					</table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbStatusSettings_DirectForm">
    			<p>A POST Form is shown:</p>
				{{-- <pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/doNotDisturb/setStatus?token={{tokenId}}&userName={{username}} --}}

				Raw Json Data in POST:
				
					[
					{
						"dndTimeStatus": "Y",
						"dndDateStatus": "Y"
					}
					]
				</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbStatusSettings_JSONResponseSample">
		<pre class="language-http copytoclipboard"><code>
					{
					  "status": "success",
					  "respCode": 200,
					  "data": null,
					  "infoText": "DND status updated successfully."
					}</code></pre>
	</div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbStatusSettings_ResponseParameters">
    	<table class="table table-striped table-responsive">
	                <thead>
		                <tr>
		                  <th align="left">Parameter</th>
		                  <th align="left">Description</th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr>
		                  <td class="notranslate" align="left">status</td>
		                  <td align="left">A textual indication of success or failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">respCode</td>
		                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">data</td>
		                  <td align="left">No relevance today.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">infoText</td>
		                  <td align="left">A description of the response for the submitted request.</td>
		                </tr>
	                </tbody>
                </table> 
    </div>  
  </div>
											
			</div>
		</div>
		
		<!-- // End of Set DoNotDisturb Status Settings -->

<!-- Set DoNotDisturb Settings  -->
		<div id="SetDoNotDisturbSettings" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set DoNotDisturb Settings</h3>
				<p>This is to set the DoNotDisturb Schedule for the Ushur Account. An Account can represent an enterprise.</p>				
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetDoNotDisturbSettings_RequestParameters" aria-controls="SetDoNotDisturbSettings_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbSettings_DirectForm"         aria-controls="SetDoNotDisturbSettings_DirectForm" role="tab" data-toggle="tab">Direct Form</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbSettings_JSONResponseSample" aria-controls="SetDoNotDisturbSettings_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetDoNotDisturbSettings_ResponseParameters" aria-controls="SetDoNotDisturbSettings_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetDoNotDisturbSettings_RequestParameters">
    	<table class="table table-striped table-responsive">
					<thead>
					<tr>
					  <th align="left">Parameter</th>
					  <th align="left">Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					  <td class="notranslate" align="left">userName</td>
					  <td align="left">Users can access their account using the email identifier they originally signed-up with.</td>
					</tr>
					<tr>
	                  <td class="notranslate" align="left">tokenId</td>
	                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
	 as part of login response.</td>
					</tr>

	                <tr>
	                  <td class="notranslate" align="left">raw json data</td>
	                    <td align="left">[
					    {
					        "day": "mon,wed,fri", 
					        "time": "20:30,5:30"
					    }, 
					    {
					        "day": "weekends", 
					        "time": "22:00,5:00"
					    }
					]
					</td>
					</tr>
					</tbody>
					</table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbSettings_DirectForm">
    			<p>A POST Form is shown:</p>
				{{-- <pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/doNotDisturb/set?token={{tokenId}}&userName={{username}} --}}

Raw Json Data in POST:
	
				[
					{
						"day": "Wednesday",
						"time": "10:00 AM",
						"date": "2019-04-10",
						"comment": "Dont want"
					}        
				]
		</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbSettings_JSONResponseSample">
   <pre class="language-http copytoclipboard"><code>
					{
						"status": "success",
						"respCode": 200,
						"data": null,
						"infoText": "DND schedule added successfully."
					}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDoNotDisturbSettings_ResponseParameters">
    	<table class="table table-striped table-responsive">
	                <thead>
		                <tr>
		                  <th align="left">Parameter</th>
		                  <th align="left">Description</th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr>
		                  <td class="notranslate" align="left">status</td>
		                  <td align="left">A textual indication of success or failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">respCode</td>
		                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">data</td>
		                  <td align="left">No relevance today.</td>
		                </tr>
		                <tr>
		                  <td class="notranslate" align="left">infoText</td>
		                  <td align="left">A description of the response for the submitted request.</td>
		                </tr>
	                </tbody>
                </table> 
    </div>  
  </div>
											
			</div>
		</div>
		
		
		<!-- // Account List Query -->
		<div id="AccountListQuery" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Account List details </h3>		
				<p> This infoquery provides list of all the accounts in a given instance The API returns records which are present after the last record ID.</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#AccountListQuery_RequestParameters" aria-controls="AccountListQuery_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#AccountListQuery_RequestSample" aria-controls="AccountListQuery_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#AccountListQuery_JSONResponseSample" aria-controls="AccountListQuery_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#AccountListQuery_ResponseParameters" aria-controls="AccountListQuery_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="AccountListQuery_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">lastRecordId</td>
                  <td align="left"> The last account ID is the record number stored in the DB. If null value is passed, it return all the records for the instance </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="AccountListQuery_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/accountListQuery
		Content-Type:application/json
		{
		"cmd":"accountListQuery",
		"lastRecordId":null,
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
  <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="AccountListQuery_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		{
			"accounts":[
						"10@USHURDUMMY.ME","11@USHURDUMMY.ME","1@USHURDUMMY.ME","2@USHURDUMMY.ME","7@USHURDUMMY.ME",........
						],
			"totalCount":85,
			"lastRecordId":85
		}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="AccountListQuery_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">accounts</td>
                  <td align="left"> Response returns the list of accounts for a specific instance </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // End Of Account List Query -->
		
		<!-- // Sub Account List -->
		<div id="SubAccountList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Sub Accounts List</h3>		
				<p> This infoquery provides a list of all the sub accounts that an admin account has. The response will be based on the filter command passed</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SubAccountList_RequestParameters" aria-controls="SubAccountList_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SubAccountList_RequestSample" aria-controls="SubAccountList_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SubAccountList_JSONResponseSample" aria-controls="SubAccountList_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SubAccountList_ResponseParameters" aria-controls="SubAccountList_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SubAccountList_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">filterCmd</td>
                  <td align="left"> The filter parameter that passed as input. For the specific example, Role details of the sub accounts passed as filter </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="SubAccountList_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/subAccountList
		Content-Type:application/json
		{
		"cmd":"subAccountList",
		"filterCmd":"getRoleInfo",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="SubAccountList_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		{
		"accounts":[
						{
							"userName":"XXXXX@GMAIL.COM",
							"accountStatus":"active",
							"roleType":"SuperUser",
							"roleId":"SuperUser"
						},
						{
							"userName":"firstname.lastname@USHUR.COM",
							"accountStatus":"inactive",
							"roleType":"NormalUser",
							"roleId":"NormalUser"
						}
					],
		"totalCount":1,
		"lastRecordId":1
	}
	}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SubAccountList_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left"> The account ID which is the email ID of the sub account </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">accountStatus</td>
                  <td align="left"> Response returns whether the account is active or inactive </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleType</td>
                  <td align="left"> Returns whether the user is a normal user or Superuser </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left">Returns the role Id which is based on whether the user is a normal user or SuperUser  </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of Sub Account List -->
		
		<!-- // Get userRoleInfo -->
		<div id="GetUserRoleInfo" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get User Role Information</h3>		
				<p> Get RoleInfo for User( privileges)</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetUserRoleInfo_RequestParameters" aria-controls="GetUserRoleInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetUserRoleInfo_RequestSample" aria-controls="GetUserRoleInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetUserRoleInfo_JSONResponseSample" aria-controls="GetUserRoleInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetUserRoleInfo_ResponseParameters" aria-controls="GetUserRoleInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetUserRoleInfo_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left"> The user name whose role details needs to be captured </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.2 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetUserRoleInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getUserRoleInfo
		Content-Type:application/json
		{
		"cmd":"getUserRoleInfo",
		"username":"abcd@abcd.com",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.2"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetUserRoleInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		{
			"userName": "abcd@abcd.COM",
			"roleType": "AdminUser",
			"roleId": "xxxxAdmin"
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetUserRoleInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left"> The user name whose role details needs to be captured </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleType</td>
                  <td align="left"> returns whether the user role is Admin, Superuser, Normal or custom </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left"> The roleId that is configured for the specific username </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>		
		<!-- // End of Get userRoleInfo -->
		
		<!-- // Set userRoleInfo -->
<div id="SetUserRoleInfo" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set User Role Information</h3>		
				<p> Setting role (privileges) for a sub useraccount</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetUserRoleInfo_RequestParameters" aria-controls="SetUserRoleInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetUserRoleInfo_RequestSample" aria-controls="SetUserRoleInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetUserRoleInfo_JSONResponseSample" aria-controls="SetUserRoleInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetUserRoleInfo_ResponseParameters" aria-controls="SetUserRoleInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetUserRoleInfo_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
				<tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left"> The user name for whom role details needs to be set </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleType</td>
                  <td align="left"> set the user role as Admin, Superuser, Normal or custom </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left"> The roleId that is configured for the specific username </td>
                </tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="SetUserRoleInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoSet/setUserRoleInfo
		Content-Type:application/json
		{
			{{-- "tokenId":"{{token}}", --}}
			"roleId":"SuperUser",
			"roleType":"SuperUser",
			"userName":"abcd@abcd.COM",
			"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="SetUserRoleInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{  
				 "status":"success",
				 "respText":"Updated role successfully"
			}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetUserRoleInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns whether the specified privilesges was set for the user or not </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left"> Returns the text message on whether the specified privileges was set or not</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>		
		<!-- // End of Set userRoleInfo -->
		
		<!-- // Get RoleInfo -->
<div id="GetRoleInfo" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Role Information for an account</h3>		
				<p> This API is called to edit role (privileges) for a given custom role for an account.</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetRoleInfo_RequestParameters" aria-controls="GetRoleInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetRoleInfo_RequestSample" aria-controls="GetRoleInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetRoleInfo_JSONResponseSample" aria-controls="GetRoleInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetRoleInfo_ResponseParameters" aria-controls="GetRoleInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetRoleInfo_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left"> The roleId created for a specific custome role in the account </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetRoleInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getRoleInfo
		Content-Type:application/json
		{
		"cmd":"getRoleInfo",
		"roleId":"customerRoleId",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetRoleInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		{
      "roleId":"customrole",
      "roleType":"AdminUser",
       "roleData":{
                              "xxx-convo":"write",
                              "xxx-edit-language":"write",
								"xxx-settings":"write",
								"xxx-app-context":"write",
								"xxx-app-context-new":"write",
								"xxx-keys":"write",
								"xxx-add-variable":"write",
								"xxx-variable-table":"write",
								"xxx-variable-operations":"write",
								"xxx-meta-data":"write",
								"xxx-meta-data-bulk-upload":"write",
								"xxx-meta-data-table":"write",
								"xxx-meta-data-add":"write",
								"xxx-meta-data-operations":"write",
								"xxx-routing":"write",
								"xxx-stats":"write",
								"xxx-templates":"write",
								"xxx-tag-info":"write",
								"xxx-user-admin":"write",
								"xxx-user-admin-add":"write",
								"xxx-user-admin-edit":"write",
								"xxx-user-admin-roles":"write",
								"xxx-user-admin-roles-buttons":"write",
								"xxx-api-access":"on",
								"xxx-activities":"write",
								"xxx-faq-tab":"write",
								"xxx-faq-tab-edit":"write",
								"xxx-social-tab":"write",
								"xxx-social-pages-edit":"write",
								"xxx-social-ushur-edit":"write",
								"xxx-create-new-ushur":"allow",
								"xxx-clone-ushur":"allow",
								"xxx-delete-ushur":"allow",
								"xxx-change-ushur-structure":"allow",
								"xxx-edit-ushur-module-contents":"allow",
								"xxx-ushur-activation":"allow",
								"xxx-ushur-list":"all",
								"xxx-settings-basics-tab":"write",
								"xxx-settings-availability-tab":"write",
								"xxx-settings-appearance-tab":"write",
								"xxx-settings-privacy-tab":"write",
								"xxx-settings-links-tab":"write",
								"xxx-settings-billing-tab":"write",
								"xxx-settings-contacts-tab":"write",
								"xxx-settings-languages-tab":"write",
								"xxx-settings-access-control-tab":"write",
								"xxx-responses-tab":"write",
								"xxx-responses-content":"write",
								"xxx-li-freeze":"write"
				}
}	</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetRoleInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left"> The roleId created for a specific custome role in the account </td>
                </tr>
				 <tr>
                  <td class="notranslate" align="left">roleType</td>
                  <td align="left"> Returns the response privileges for the user </td>
                </tr>
				 <tr>
                  <td class="notranslate" align="left">roleData</td>
                  <td align="left"> Returns the actions possible for the role type across the different ushur modules </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of Get RoleInfo -->
		
		<!-- // Get AllRoles -->
<div id="GetAllRoles" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get All Roles for an account</h3>		
				<p> This API returns all the custom roles for a given user.</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetAllRoles_RequestParameters" aria-controls="GetAllRoles_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetAllRoles_RequestSample" aria-controls="GetAllRoles_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetAllRoles_JSONResponseSample" aria-controls="GetAllRoles_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetAllRoles_ResponseParameters" aria-controls="GetAllRoles_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetAllRoles_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetAllRoles_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getAllRoles
		Content-Type:application/json
		{
		"cmd":"getAllRoles",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetAllRoles_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
			{
			   "roles":[
							   {
									 "roleId":"customrole",
									  "roleType":"AdminUser"
							   }
							],
			  "count":1
			}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllRoles_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
				<tr>
                  <td class="notranslate" align="left">roleId</td>
                  <td align="left"> The roleId created for a specific custome role in the account </td>
                </tr>
				 <tr>
                  <td class="notranslate" align="left">roleType</td>
                  <td align="left"> Returns the response privileges for the user </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of Get AllRoles -->
		
        
		
		<!-- Initiate Any Campaign  -->
		<div id="InitiateAnyCampaign" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Ushur Engagements</h2>
				<h3 class="sub-title">Initiate Any Campaign</h3>	
				<p>This API is to initiate an Ushur (also called as Campaign) to a specific phone number if this is a single campaign but if a bulk campaign the Ushur will be launched to all the users in the enterprise and hence the userPhoneNo parameter will be ignored if present.</p>				
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#InitiateAnyCampaign_RequestParameters" aria-controls="InitiateAnyCampaign_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_RequestSample1" aria-controls="InitiateAnyCampaign_RequestSample1" role="tab" data-toggle="tab">Sample</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_JSONResponseSample" aria-controls="InitiateAnyCampaign_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_ResponseParameters" aria-controls="InitiateAnyCampaign_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>

			    <li role="presentation"><a href="#InitiateAnyCampaign_WebJavascriptForm" aria-controls="InitiateAnyCampaign_WebJavascriptForm" role="tab" data-toggle="tab">Web Javascript Form</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_CurlForm" aria-controls="InitiateAnyCampaign_CurlForm" role="tab" data-toggle="tab">Curl Form</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_DirectJavaForm" aria-controls="InitiateAnyCampaign_DirectJavaForm" role="tab" data-toggle="tab">Direct Java Form</a></li>
			    <li role="presentation"><a href="#InitiateAnyCampaign_HTTPResponseSample" aria-controls="InitiateAnyCampaign_HTTPResponseSample" role="tab" data-toggle="tab">HTTP Response Sample</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="InitiateAnyCampaign_RequestParameters">
			    	<table class="table table-striped table-responsive">
                <thead>
	                <tr>
	                  <th align="left">Parameter</th>
	                  <th align="left">Description</th>
	                </tr>
                </thead>
	                <tbody>
	                  <tr>
	                  <td class="notranslate" align="left">cmd</td>
	                  <td align="left">A mandatory parameter. This is the command to indicate the action taken on the server.  Possible values are initCampaign, initBulkCampaign.
	                    <br><br>
	                    initCampaign will launch the campaign indicated by the campaignId to the userPhoneNo indicated in the message.
	                    <br><br>
	                    initBulkCampaign will launch the campaign to all the users in the user db associated with the enterprise indicated by the tokenId.  In this case the userPhoneNo is not needed in the API call.
	                  </td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">campaignId</td>
	                  <td align="left">A mandatory parameter. This is an identifier for an Ushur structured message that will be sent out upon this request when successfully completed.
	                    <br><br>
	                    This identifier will be published to the API caller as part of the documentation process.
	                  </td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">tokenId</td>
	                  <td align="left">A mandatory parameter. The credential for identifying the account.  This is the tokenId that was sent by Ushur
	 as part of login response.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">callBackNumber</td>
	                  <td align="left">An optional parameter. This is the phone number of the business that Ushur will connect the user to for a voice call.  </td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">userPhoneNo</td>
	                  <td align="left">Mandatory for a single destination user and not necessary for a bulk campaign. This is the destination phone number to where this message is directed.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">userMsg</td>
	                  <td align="left">An optional parameter.  This message will replace if there are any contents in the initial Welcome module of the campaign/Ushur being initiated.  This message will be used when the initial Welcome module is empty as well.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">apiVer</td>
	                  <td align="left">API Version of value 2.1 or greater as value would return a more detailed response. Recommended to be used.</td>
	                </tr>
	                </tbody>
                </table>
			    </div>


			     <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_RequestSample1">
	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd": "initCampaign",
{{-- "tokenId": "{{token}}", --}}
"userPhoneNo": "+16614187487",
"campaignId": "NetPromoterScore",
"apiVer":"2.1"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_JSONResponseSample">
		<label>Success</label>
		<pre class="language-http copytoclipboard"><code>
		 {
			"status": "success",
			"respCode": 200,
			"respText": "Success",
			"activityId": "ffe96950-140a-445c-834c-dcc3b22017cb-1493284061475"
		 }</code></pre>

		<label>Failure</label>
		<pre class="language-http copytoclipboard"><code>
		 {
			"status": "failure",
			"respCode": "404",
			"respText": "Invalid Ushur Id",
		 }</code></pre>

    </div>

    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_ResponseParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">The response code which is 200 for success.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity.</td>
                </tr>
                </tbody>
              </table>
    </div>


			    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_WebJavascriptForm">
			    	<p>A Sample invocation is shown below:</p>
				<pre class="language-http copytoclipboard"><code>var initSessionEndpoint = 'https://community.ushur.me/initUshur'
var jsonStringLogin = convertTOjsonData(menuId, username, callbacknum, usernum, message);

$.ajax({
    type: 'POST',
    contentType: 'application/json',
    url: initSessionEndpoint,
    dataType: "text",
    data: jsonStringLogin,
    success: function(response) {
        callbackvalue(response);
        console.log("Successfully delivered message")
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.log("Message Delivery Error:", textStatus)
    }
});

var convertTOjsonData = function(menuId, username, callbacknum, usernum, message) {
    return JSON.stringify({
        "cmd": "initCampaign",
        "callBackNumber": callbacknum,
        "tokenId": tokenId,
        "userPhoneNo": usernum,
        "userMsg": message,
        "campaignId": menuId
    });
};</code></pre>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_CurlForm">
			    	<p>API can be invoked with curl like the following:</p>
<pre class="language-http copytoclipboard"><code>
{{-- curl -H "Content-Type: application/json; charset=UTF-8" --data @push.json https://community.ushur.me/initUshur --}}


push.json:
{"cmd":"initCampaign",callBackNumber":"12092078446",
"tokenId":"d5dbab0d-1251-4a2f-b5eb-8c0f752e997b",
"userPhoneNo":"12098746734","userMsg":"Hi Test, 
This is a reminder for your upcoming appointment on 10/31/2014 at 1:00 PM.","campaignId":"UshurIssEnterpriseMenu"}</code></pre>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_DirectJavaForm">
			    	<p>A sample java code illustrates the direct form:</p>
<pre class="language-http copytoclipboard"><code>try {
      JSONObject json = new JSONObject();
      json.put("cmd": "initCampaign");
      json.put("callBackNumber", "12092078446");   
      json.put("tokenId", "d5dbab0d-1251-4a2f-b5eb-8c0f752e997b");  
      json.put("userPhoneNo","12098746734");
      json.put("userMsg","Hi Test, This is a reminder for your upcoming appointment on 10/31/2014 at 1:00 PM.");
      json.put("campaignId","UshurIssEnterpriseMenu");   

      CloseableHttpClient httpClient = HttpClientBuilder.create().build();

      try {
        HttpPost request = new HttpPost("https://community.ushur.me/initUshur");
        StringEntity jsonParams = new StringEntity(json.toString());
        request.addHeader("Content-type", "application/json");
        request.addHeader("Accept","application/json");
        request.setEntity(jsonParams);
        CloseableHttpResponse response = httpClient.execute(request);
        System.out.println(response.toString());
      } 
      catch (Exception ex) {
        // handle exception here
      } 
      finally {
        httpClient.close();
      }
} 

catch (Exception e) {
    e.printStackTrace();
}
                </code></pre>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="InitiateAnyCampaign_HTTPResponseSample">
			    	<pre class="language-http copytoclipboard"><code>HTTP/1.1 200 OK [Date: Thu, 23 Oct 2014 03:30:01 GMT, Content-Type: text/html;charset=ISO-8859-1, Content-Length: 7, Server: naju server 2.51]


A negative (non-200) HTTP response will indicate that the send message failed.</code></pre>
			    </div>
			  </div>				
                
			</div>
		</div>
		<!-- // End of Initiate Any Campaign -->



		<!-- Notify A Msg  -->
		<div id="NotifyAMsg" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Notify a Message</h3>	
				<p>This API is to notify a message via an Ushur (also called as Campaign) to a specific phone number if this is a single campaign but if a bulk campaign the Ushur (hence the message) will be launched to all the users in the enterprise and hence the userPhoneNo parameter will be ignored if present.</p>				
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#NotifyAMsg_RequestParameters" aria-controls="NotifyAMsg_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
				<li role="presentation"><a href="#NotifyAMsg_RequestSample1" aria-controls="NotifyAMsg_RequestSample1" role="tab" data-toggle="tab">Sample</a></li>
			    <li role="presentation"><a href="#NotifyAMsg_JSONResponseSample" aria-controls="NotifyAMsg_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
				<li role="presentation"><a href="#NotifyAMsg_ResponseSample" aria-controls="NotifyAMsg_ResponseSample" role="tab" data-toggle="tab">Response</a></li>
			
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="NotifyAMsg_RequestParameters">
			    	<table class="table table-striped table-responsive">
                <thead>
	                <tr>
	                  <th align="left">Parameter</th>
	                  <th align="left">Description</th>
	                </tr>
                </thead>
	                <tbody>
	                  <tr>
	                  <td class="notranslate" align="left">cmd</td>
	                  <td align="left">A mandatory parameter. This is the command to indicate the action taken on the server.  Possible values are initCampaign, initBulkCampaign.
	                    <br><br>
	                    initCampaign will launch the campaign indicated by the campaignId to the userPhoneNo indicated in the message.
	                    <br><br>
	                    initBulkCampaign will launch the campaign to all the users in the user db associated with the enterprise indicated by the tokenId.  In this case the userPhoneNo is not needed in the API call.
	                  </td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">campaignId</td>
	                  <td align="left">A mandatory parameter. This is an identifier for an Ushur structured message that will be sent out upon this request when successfully completed.
	                    <br><br>
	                    This identifier will be published to the API caller as part of the documentation process.  
	                    <br>Although this can be any Ushur that has a (empty or not) welcome and this message in the API will go to a mobile phone number, if the need is to just send a message then existing template NotifyMsg Ushur can be used.
	                  </td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">tokenId</td>
	                  <td align="left">A mandatory parameter. The credential for identifying the account.  This is the tokenId that was sent by Ushur
	 as part of login response.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">userPhoneNo</td>
	                  <td align="left">Mandatory for a single destination user and not necessary for a bulk campaign. This is the destination phone number to where this message is directed.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">userMsg</td>
	                  <td align="left">An optional parameter.  This message will replace if there are any contents in the initial Welcome module of the campaign/Ushur being initiated.  This message will be used when the initial Welcome module is empty as well.</td>
	                </tr>
	                <tr>
	                  <td class="notranslate" align="left">apiVer</td>
	                  <td align="left">API Version of value 2.1 or greater as value would return a more detailed response. Recommended to be used.</td>
	                </tr>
	                </tbody>
                </table>
			    </div>


			     <div role="tabpanel" class="tab-pane" id="NotifyAMsg_RequestSample1">
	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd": "initCampaign",
{{-- "tokenId": "{{acmetokenid}}", --}}
"userPhoneNo": "+16614187487",
"campaignId": "NotifyMsg",
"userMsg":"Hello World! This is Ushur!",
"apiVer":"2.1"
}


</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="NotifyAMsg_JSONResponseSample">
<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "respText": "Success",
  "activityId": "0792c664-df05-47d0-9032-eb5e1c4ccaa5-1493285425824"
}</code></pre>
    </div>
	
	<div role="tabpanel" class="tab-pane" id="NotifyAMsg_ResponseSample">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">The response code which is 200 for success.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity.</td>
                </tr>
                </tbody>
              </table>
    </div>
	    
			  </div>				
                
			</div>
		</div>
		<!-- // Notify a Msg -->


		<!-- Initiate Campaign With a Request Id  -->
		<div id="InitiateCampaignWithaRequestId" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Initiate Campaign With a Request Id</h3>
				<p>This API is similar to the previous Initiate Campaign but here the remote system sends a requestId which is a unique id in the remote system and hence treated as such in Ushur as well.  For example the requestId can be an incident Id of the remote system or a concatenation of multiple identities such as an AccountId:CustomerId wherein a specific customer can be in different accounts with the enterprise.  With the requestId the Ushur platform can retrieve enterprise records which has this requestId value as the unique key.</p>	
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" >
    
			<li role="presentation" class="active"><a href="#InitiateCampaignWithaRequestId_RequestParameters" aria-controls="InitiateCampaignWithaRequestId_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
			<li role="presentation"><a href="#InitiateCampaignWithaRequestId_RequestSample" aria-controls="InitiateCampaignWithaRequestId_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
			<li role="presentation"><a href="#InitiateCampaignWithaRequestId_JSONResponseSample" aria-controls="InitiateCampaignWithaRequestId_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
			<li role="presentation"><a href="#InitiateCampaignWithaRequestId_ResponseSample" aria-controls="InitiateCampaignWithaRequestId_ResponseSample" role="tab" data-toggle="tab">Response</a></li>
	
			</ul>

  <!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="InitiateCampaignWithaRequestId_RequestParameters">
			<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">This is the command to indicate the action taken on the server.  Possible values are initCampaign, initBulkCampaign.
                    <br><br>
                    initCampaign will launch the campaign indicated by the campaignId to the userPhoneNo indicated in the message.
                    <br><br>
                    initBulkCampaign will launch the campaign to all the users in the user db associated with the enterprise indicated by the tokenId.  In this case the userPhoneNo is not needed in the API call.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">requestId</td>
                  <td align="left">This is a unique request identifier from the enterprise system. An incident id from a remote service management system is an example.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">This identifies the Ushur that will be sent out upon this request when successfully completed.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">callBackNumber</td>
                  <td align="left">This is the phone number of the business that Ushur will connect the user to for a voice call.  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This is the destination phone number to where this message is directed.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userMsg</td>
                  <td align="left">This is the message that is sent by the remote caller entity.  Ushur, if necessary will append the structured information indicated by the campaignId to this message and then forward it to the user indicated by the UserPhoneNumber.</td>
                </tr>
                </tbody>
                </table>
			</div>
		<div role="tabpanel" class="tab-pane" id="InitiateCampaignWithaRequestId_RequestSample">
    				<pre class="language-http copytoclipboard"><code>Method: POST
					URL:  https://community.ushur.me/initUshur
					Content-Type: application/json

					{
					"cmd": "initCampaign",
					"requestId" : "INC700001",
					"callBackNumber": "12092078446",
					{{-- "tokenId": "{{token}}", --}}
					"userPhoneNo": "12098746734",
					"userMsg": "my domain has issues in setup",
					"campaignId": "ResConfV2_Ushur"
					}
					</code>
					</pre>
		</div>
	
		<div role="tabpanel" class="tab-pane" id="InitiateCampaignWithaRequestId_JSONResponseSample">
			<pre class="language-http copytoclipboard"><code>
			{
			"status": "success",
			"respCode": 200,
			"respText": "Success",
			"activityId": "0792c664-df05-47d0-9032-eb5e1c4ccaa5-1493285425824"
			}</code>
			</pre>
		</div>
	
		<div role="tabpanel" class="tab-pane" id="InitiateCampaignWithaRequestId_ResponseSample">
			<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">The response code which is 200 for success.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity.</td>
                </tr>
                </tbody>
            </table>
		</div>
	
	
		</div>
        </div>
	</div>
	
		<!-- // Initiate Campaign With a Request Id -->
		
		

		<!-- Get Detailed Responses For a Request Id  -->
		<div id="GetDetailedResponsesForaRequestId" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Detailed Responses For a Request Id</h3>	
					<p>This is a query API to retrieve detailed responses on initiation of campaigns using the requestId.</p>			
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#GetDetailedResponsesForaRequestId_RequestParameters" aria-controls="GetDetailedResponsesForaRequestId_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
				<li role="presentation"><a href="#GetDetailedResponsesForaRequestId_RequestSample" aria-controls="GetDetailedResponsesForaRequestId_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
				<li role="presentation"><a href="#GetDetailedResponsesForaRequestId_JSONResponseSample" aria-controls="GetDetailedResponsesForaRequestId_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
				<li role="presentation"><a href="#GetDetailedResponsesForaRequestId_ResponseParameters" aria-controls="GetDetailedResponsesForaRequestId_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
			  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetDetailedResponsesForaRequestId_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">responseForReqId is the command that needs to be passed for this.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">requestId</td>
                  <td align="left">The request identifier for which responses are being retrieved.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">This is the Ushur that was initiated for which responses is being requested here.</td>
                </tr>
                
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetDetailedResponsesForaRequestId_RequestSample">
<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId" :"INC700001",
{{-- "tokenId":"{{token}}", --}}
"campaignId":"ResConfV2_Ushur"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetDetailedResponsesForaRequestId_JSONResponseSample">
    				<pre class="language-http copytoclipboard"><code>
{
  "stats": {
    "optId_1": 1,
    "menu.sent": 2,
    "menu.resp": 1
  },
  "result": [
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 19:58:49 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 19:58:49 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur",
        "campaignId": "ResConfV2_Ushur",
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent",
        "content": "[entspdev]:my domain has issues in setup"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 19:58:49 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 19:58:49 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_91a8b4d9-d614-47fd-8666-2ce5935470a1",
        "campaignId": "ResConfV2_Ushur",
        "visual": "false",
        "type": "menu.sent",
        "dispStr": "Menu Sent",
        "meta": {
          "topic": "Is your issue resolved now?\nPlease respond with a number",
          "menuOptions": {
            "1": "Yes",
            "2": "No"
          }
        }
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:01:09 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_91a8b4d9-d614-47fd-8666-2ce5935470a1",
        "campaignId": "ResConfV2_Ushur",
        "type": "menu.response",
        "optionId": "1",
        "dispStr": "Yes"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:01:09 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "location": "",
      "response": {
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:01:09 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "location": "",
      "response": {
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:01:09 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_5a68999d-130c-46d1-bef7-1303223bc64f",
        "campaignId": "ResConfV2_Ushur",
        "visual": "false",
        "type": "menu.prompt",
        "dispStr": "Prompt Sent",
        "meta": {
          "topic": "How satisfied were you with the service provided by EntSpDev on a scale from 10 (completely) to 1 (not at all)?"
        }
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:30 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:30 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_5a68999d-130c-46d1-bef7-1303223bc64f",
        "campaignId": "ResConfV2_Ushur",
        "type": "routine.response",
        "dispStr": "9"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:30 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:30 EST 2016",
      "location": "",
      "response": {
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:30 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:30 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_bcff8ac7-df09-431d-8435-ff55ecaa7dc2",
        "campaignId": "ResConfV2_Ushur",
        "visual": "false",
        "type": "menu.prompt",
        "dispStr": "Prompt Sent",
        "meta": {
          "topic": "How likely are you to recommend EntSpDev products to a friend on a scale from 10 (definitely) to 1 (definitely not)?"
        }
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:43 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_bcff8ac7-df09-431d-8435-ff55ecaa7dc2",
        "campaignId": "ResConfV2_Ushur",
        "type": "routine.response",
        "dispStr": "8"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:43 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "location": "",
      "response": {
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:02:43 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_c5323bd2-bcc9-47fd-88a7-7d4622b41bfa",
        "campaignId": "ResConfV2_Ushur",
        "visual": "false",
        "type": "menu.prompt",
        "dispStr": "Prompt Sent",
        "meta": {
          "topic": "Please share any additional comments that can help us serve you better :"
        }
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:03:59 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:03:59 EST 2016",
      "location": "",
      "response": {
        "menuId": "ResConfV2_Ushur_child_section_c5323bd2-bcc9-47fd-88a7-7d4622b41bfa",
        "campaignId": "ResConfV2_Ushur",
        "type": "routine.response",
        "dispStr": "thank you for your service"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:03:59 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:03:59 EST 2016",
      "location": "",
      "response": {
        "visual": "false",
        "type": "menu.disabled.sent",
        "dispStr": "Message Sent"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "date": "Thu Feb 25 20:03:59 EST 2016",
      "sid": "45fbb019-627e-40e5-88b4-7217577e25f0-uxidxyz-c69d812f-d360-42a9-8775-eab16e440dde",
      "timestamp": "Thu Feb 25 20:03:59 EST 2016",
      "location": "",
      "response": {
        "menuId": "**ENDCAMPAIGN**",
        "campaignId": "",
        "visual": "false",
        "type": "menu.sent",
        "dispStr": "Menu Sent",
        "meta": {
          "menuOptions": {}
        }
      },
      "requestId": "INC700001"
    }
  ]
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetDetailedResponsesForaRequestId_ResponseParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">name</td>
                  <td align="left">The name of the party to whom the message was sent out and from whom this response is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phone</td>
                  <td align="left">The phone number of the party to whom the message was sent out and from where this reponse is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">date</td>
                  <td align="left">This is the time at which message was sent or response received.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">sid</td>
                  <td align="left">This is the identifier for correlating the responses with every message that was sent out.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">timestamp</td>
                  <td align="left">This is the time at which this response arrived.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">location</td>
                  <td align="left">This is the location information</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">response</td>
                  <td align="left">The actual response text from the remote party to whom the message was sent out. The data also includes the id of the menu, campaignId, visual, the type of menu, display string and actual content of the response.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">requestId</td>
                  <td align="left"> The request identifier for which responses are being retrieved </td>
                </tr>
				
                </tbody>
                </table>
    </div>
  </div>

			</div>
		</div>
		<!-- // Get Detailed Responses For a Request Id -->


				<!-- Get Tagged Responses For a Request Id  -->
		<div id="GetTaggedResponsesForaRequestId" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Tagged Responses For a Request Id</h3>
				<p>Instead of getting all the detailed information as part of the query, here we get the responses for specific tags which implies responses on specific micro-engagement.</p>	
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetTaggedResponsesForaRequestId_RequestParameters" aria-controls="GetTaggedResponsesForaRequestId_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetTaggedResponsesForaRequestId_RequestSample" aria-controls="GetTaggedResponsesForaRequestId_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetTaggedResponsesForaRequestId_JSONResponseSample" aria-controls="GetTaggedResponsesForaRequestId_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetTaggedResponsesForaRequestId_RequestSampleWithTag" aria-controls="GetTaggedResponsesForaRequestId_RequestSampleWithTag" role="tab" data-toggle="tab">Request Sample (with a single UeTag)</a></li>
    <li role="presentation"><a href="#GetTaggedResponsesForaRequestId_JSONResponseSample1" aria-controls="GetTaggedResponsesForaRequestId_JSONResponseSample1" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetTaggedResponsesForaRequestId_ResponseParameters" aria-controls="GetTaggedResponsesForaRequestId_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetTaggedResponsesForaRequestId_RequestParameters">
    	<table class="table table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">responseForReqId is the command that needs to be passed for this.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">requestId</td>
                  <td align="left">The request identifier for which responses are being retrieved.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">This is the Ushur that was initiated for which responses is being requested here.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">UeTag</td>
                  <td align="left">This is the Ushur Micro-Engagement Tag for which a specific response is given back. These tags are campaign specific and is expected to be known by the requestor who is aware of the campaign and the tags associated.  Some of the tags for a Resolution Confirmation are: UeTag_StatusCheck, UeTag_RecommendationRating, UeTag_SatisfactionRating, UeTag_FeedbackComment"
                  There can be one or more tag for this parameter according to which responses are given.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">lastRecordId</td>
                  <td align="left">This has the value of the last record that was returned in the previous responses.  Having this will make
                    the server send out records only after this record id.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTaggedResponsesForaRequestId_RequestSample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC700001",
{{-- "tokenId":"{{token}}", --}}
"campaignId":"ResConfV2_Ushur",
"UeTag" : "UeTag_StatusCheck,UeTag_RecommendationRating,UeTag_SatisfactionRating,UeTag_FeedbackComment"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTaggedResponsesForaRequestId_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 19:58:49 EST 2016",
      "response": {
        "UeTag": "UeTag_StatusCheck",
        "dispStr": "Menu Sent",
        "topic": "Is your issue resolved now?\nPlease respond with a number"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "response": {
        "UeTag": "UeTag_StatusCheck",
        "optionId": "1",
        "dispStr": "Yes"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:01:09 EST 2016",
      "response": {
        "UeTag": "UeTag_SatisfactionRating",
        "dispStr": "Prompt Sent",
        "topic": "How satisfied were you with the service provided by EntSpDev on a scale from 10 (completely) to 1 (not at all)?"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:02:30 EST 2016",
      "response": {
        "UeTag": "UeTag_SatisfactionRating",
        "dispStr": "9"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:02:30 EST 2016",
      "response": {
        "UeTag": "UeTag_RecommendationRating",
        "dispStr": "Prompt Sent",
        "topic": "How likely are you to recommend EntSpDev products to a friend on a scale from 10 (definitely) to 1 (definitely not)?"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "response": {
        "UeTag": "UeTag_RecommendationRating",
        "dispStr": "8"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "response": {
        "UeTag": "UeTag_FeedbackComment",
        "dispStr": "Prompt Sent",
        "topic": "Please share any additional comments that can help us serve you better :"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:03:59 EST 2016",
      "response": {
        "UeTag": "UeTag_FeedbackComment",
        "dispStr": "thank you for your service"
      },
      "requestId": "INC700001"
    }
  ]
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTaggedResponsesForaRequestId_RequestSampleWithTag">
 <pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC700001",
{{-- "tokenId":"{{token}}", --}}
"campaignId":"ResConfV2_Ushur",
"UeTag" : "UeTag_FeedbackComment"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTaggedResponsesForaRequestId_JSONResponseSample1">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:02:43 EST 2016",
      "response": {
        "UeTag": "UeTag_FeedbackComment",
        "dispStr": "Prompt Sent",
        "topic": "Please share any additional comments that can help us serve you better :"
      },
      "requestId": "INC700001"
    },
    {
      "name": "",
      "phone": "+12098746734",
      "timestamp": "Thu Feb 25 20:03:59 EST 2016",
      "response": {
        "UeTag": "UeTag_FeedbackComment",
        "dispStr": "thank you for your service"
      },
      "requestId": "INC700001"
    }
  ]
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTaggedResponsesForaRequestId_ResponseParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">name</td>
                  <td align="left">The name of the party to whom the message was sent out and from whom this response is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phone</td>
                  <td align="left">The phone number of the party to whom the message was sent out and from where this reponse is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">timestamp</td>
                  <td align="left">This is the time at which this response arrived.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">response</td>
                  <td align="left">The actual response text from the remote party to whom the message was sent out. The data also includes UeTag, display string, topic information </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">requestId</td>
                  <td align="left">The request identifier for which responses are being retrieved.</td>
                </tr>
                </tbody>
                </table>
    </div>
  </div>
			
			</div>
		</div>
		<!-- // Get Tagged Responses For a Request Id -->


		<!-- Query Filters  -->
		<div id="QueryFilters" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Query Filters</h3>	
				<p> This request enables additional set of parameters to be introduced so as to act as filters in the response that usually contains a lot of information.  One example is, if an application is only interested in the number of counts and not the actual contents then a specific filter parameter can be sent in the request and responses are sent accordingly.  Multiple query parameters can be combined.</p>				
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#QueryFilters_AdditionalQueryParameter" aria-controls="QueryFilters_AdditionalQueryParameter" role="tab" data-toggle="tab">Additional Query Parameter</a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSampleforGetSids" aria-controls="QueryFilters_RequestSampleforGetSids" role="tab" data-toggle="tab">Request Sample for <strong>getSids</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSampleforgrtSids" aria-controls="QueryFilters_JSONResponseSampleforgrtSids" role="tab" data-toggle="tab">JSON Response Sample for <strong>getSids</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSampleforgetCounts" aria-controls="QueryFilters_RequestSampleforgetCounts" role="tab" data-toggle="tab">Request Sample for <strong>getCounts</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSampleforgetCounts" aria-controls="QueryFilters_JSONResponseSampleforgetCounts" role="tab" data-toggle="tab">JSON Response Sample for <strong>getCounts</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSampleforLastEngagement" aria-controls="QueryFilters_RequestSampleforLastEngagement" role="tab" data-toggle="tab">Request Sample for <strong>LastEngagement</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSampleforLastEngagement" aria-controls="QueryFilters_JSONResponseSampleforLastEngagement" role="tab" data-toggle="tab">JSON Response Sample for <strong>LastEngagement</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSampleforLastFirst" aria-controls="QueryFilters_RequestSampleforLastFirst" role="tab" data-toggle="tab">Request Sample for <strong>LastFirst</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSampleforLastFirst" aria-controls="QueryFilters_JSONResponseSampleforLastFirst" role="tab" data-toggle="tab">JSON Response Sample for <strong>LastFirst</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSampleforGetRecordIds" aria-controls="QueryFilters_RequestSampleforGetRecordIds" role="tab" data-toggle="tab">Request Sample for <strong>getRecordIds</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSampleforGetRecordIds" aria-controls="QueryFilters_JSONResponseSampleforGetRecordIds" role="tab" data-toggle="tab">JSON Response Sample for <strong>getRecordIds</strong></a></li>
    <li role="presentation"><a href="#QueryFilters_RequestSamplefordeliveredstatus" aria-controls="QueryFilters_RequestSamplefordeliveredstatus" role="tab" data-toggle="tab">Request Sample for <strong>delivered</strong> status</a></li>
    <li role="presentation"><a href="#QueryFilters_JSONResponseSamplefordeliveredparameter" aria-controls="QueryFilters_JSONResponseSamplefordeliveredparameter" role="tab" data-toggle="tab">JSON Response Sample for <strong>delivered</strong> parameter</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="QueryFilters_AdditionalQueryParameter">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">filterCmd</td>
                  <td align="left">This can contain a single or a list of commands executing on top of the actual query.  The currently supported filter commands are: getSids,getCounts,LastEngagement,LastFirst,getRecordIds
                    <br><br>
                    <p><b>getSids:</b> Displays along with other parameters the actual session identifier so that when there are multiple responses for the query, the client of this API can gather together sets of responses based on the session identifier (sid).</p> 

                    <br>
                    <p><b>getCounts:</b> Currently this command will exclusively only return the counts for each of the UeTag but the counts are for the final responses based on the query.  For example, LastEngagement might return a few set and the getCounts is on this result.</p> 
                    <br>

                    <p><b>LastEngagement:</b> In cases when a single query can result in multiple engagements and the application needs only the last then we use this filter.  Look at the response samples below where the getSids yielded two different sessions and with LastEngagement only the latest engagement is returned.</p> 
                    <br>
                    
                    <p><b>LastFirst:</b> For the resulting query responses, this one will return in the reverse chronological order which is the last occurred will come first and the first occurred will be at the last.</p> 
                    <br>

                    <p><b>getRecordIds:</b> Queries typically returns multiple records of one or more engagements.  The "sid" parameter itself identifies an engagement and hence will be the same for all records within that engagement.  In some cases the remote client needs a unique identifier for each of the records across engagements itself.  Sending this parameter as part of the filterCmd will send an identifier that will be globally unique in the namespace belonging to the corresponding query. The parameter that gets sent in the response is <code>ushurRecordId</code>.</p> 
                    <br>

                  </td>
                </tr> 

                <tr>
                  <td class="notranslate" align="left">delivered</td>
                  <td align="left">Values are true or false.  This filter is to retrieve entries where the Ue were delivered or not.  This hence applies only to outgoing Ue and hence corresponding messages.  If there is no delivered status then those entries will not be returned. Only those that are explicitly marked as true or false will be returned as per the query.
                    <br><br>
                    <p><b>true:</b>Return entries that indicate the Ue was successfully delivered.</p> 

                    <br>
                    <p><b>false:</b>Return entries that indicate the Ue was not delivered.</p> 
                    <br>

                  </td>
                </tr> 

                <tr>
                  <td class="notranslate" align="left">deliveryStatus</td>
                  <td align="left">Specific values indicating the nature of the delivery.  Most common values are delivered, undelivered and sent.  This filter is to retrieve entries with specific delivery status regardless of the outcome of the delivery.  In most cases this parameter should go without the delivered else there could be conflict and hence return null values.
                    <br><br>

                    <p><b>delivered:</b>Return entries that indicate the Ue was successfully delivered.</p> 

                    <br>
                    <p><b>undelivered:</b>Return entries that indicate the Ue was not delivered.</p> 
                    <br>

                    <p><b>sent:</b>An upstream carrier has confirmed the receipt of the message.</p> 
                    <br>

                    <br>
                  </td>
                </tr> 

                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSampleforGetSids">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC0010117",
"filterCmd":"getSids",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSampleforgrtSids">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:12.156Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.581Z",
      "response": {
        "optionId": "2",
        "UeTag": "UeTag_881809",
        "dispStr": "No"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.619Z",
      "response": {
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_847034",
        "topic": "Sorry to hear that.  Please enter your comments as to why it is unresolved."
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:45:11.743Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "619764ad-83c6-4fd1-b07b-7ce5131cb6dc-uxidxyz-76e2d72c-2ee1-46fa-a10e-1b3fb7b6e855"
    }
  ],
  "counts": 4,
  "lastRecordId": "5727f497e9513852305bb48a"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSampleforgetCounts">
    <pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC0010117",
"filterCmd":"getCounts,getSids",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSampleforgetCounts">
    	<pre class="language-http copytoclipboard"><code>{
  "UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End",
  "UeTag_847034": "1",
  "UeTag_881809": "1",
  "UeTag_927455": "2",
  "UeTag_382867": "0",
  "UeTag_253937": "0",
  "UeTag_457543": "0",
  "UeTag_635124": "0",
  "UeTag_End": "0",
  "counts": 4
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSampleforLastEngagement">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC0010117",
"filterCmd":"getSids,LastEngagement",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSampleforLastEngagement">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:45:11.743Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "619764ad-83c6-4fd1-b07b-7ce5131cb6dc-uxidxyz-76e2d72c-2ee1-46fa-a10e-1b3fb7b6e855"
    }
  ],
  "counts": 1,
  "lastRecordId": "5727f497e9513852305bb48a"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSampleforLastFirst">
 <pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC0010117",
"filterCmd":"getSids,LastFirst",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSampleforLastFirst">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:45:11.743Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "619764ad-83c6-4fd1-b07b-7ce5131cb6dc-uxidxyz-76e2d72c-2ee1-46fa-a10e-1b3fb7b6e855"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.619Z",
      "response": {
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_847034",
        "topic": "Sorry to hear that.  Please enter your comments as to why it is unresolved."
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.581Z",
      "response": {
        "optionId": "2",
        "UeTag": "UeTag_881809",
        "dispStr": "No"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:12.156Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a"
    }
  ],
  "counts": 4,
  "lastRecordId": "5727f45ce9513852305bb486"
}</code></pre>
    </div>

<div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSampleforGetRecordIds">
 <pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
"requestId":"INC0010117",
"filterCmd":"getSids,LastFirst,getRecordIds",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSampleforGetRecordIds">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:45:11.743Z",
      "response": {
        "campaignId": "UshurResolutionConfirmation",
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "619764ad-83c6-4fd1-b07b-7ce5131cb6dc-uxidxyz-76e2d72c-2ee1-46fa-a10e-1b3fb7b6e855",
      "ushurRecordId": "5727f497e9513852305bb48a"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.619Z",
      "response": {
        "campaignId": "UshurResolutionConfirmation",
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_847034",
        "topic": "Sorry to hear that.  Please enter your comments as to why it is unresolved."
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a",
      "ushurRecordId": "5727f46ce9513852305bb488"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:28.581Z",
      "response": {
        "campaignId": "UshurResolutionConfirmation",
        "optionId": "2",
        "UeTag": "UeTag_881809",
        "dispStr": "No"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a",
      "ushurRecordId": "5727f46ce9513852305bb487"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-03T00:44:12.156Z",
      "response": {
        "campaignId": "UshurResolutionConfirmation",
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010117",
      "sid": "4db06b91-1ed0-43a9-af8d-c7d822082d9f-uxidxyz-35457f74-0f4d-490a-9990-5fe4bd44b89a",
      "ushurRecordId": "5727f45ce9513852305bb486"
    }
  ],
  "counts": 4,
  "totalRecords": 4,
  "lastRecordId": "5727f45ce9513852305bb486"
}
 </code></pre>
    </div>


    <div role="tabpanel" class="tab-pane" id="QueryFilters_RequestSamplefordeliveredstatus">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"responseForReqId",
{{-- "tokenId":"{{ven1177token}}", --}}
"requestId": "INC0010433",
"campaignId":"UshurResolutionConfirmation",
"UeTag":"UeTag_927455",
"delivered":true
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="QueryFilters_JSONResponseSamplefordeliveredparameter">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-09-26T01:31:56.430Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number.",
        "delivered": "true",
        "delStatus": "delivered"
      },
      "requestId": "INC0010433"
    }
  ],
  "counts": 1,
  "totalRecords": 1,
  "lastRecordId": "57e87a8cb9ea8cec6afc7ce9"
}</code></pre>
    </div>
  </div>

			</div>
		</div>
		<!-- // Query Filters -->



		<!-- Get All Detailed Responses  -->
		<div id="GetAllDetailedResponses" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get All Detailed Responses</h3>		
				<p> This query will fetch all responses without any filters and with much details.  Such queries are provided so that enterprises can design their own applications accordingly or adopt any of these Ushur APIs to fit their existing applications.  It is important to note that such queries can be expensive and generally used for report creation purposes. 
				</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetAllDetailedResponses_RequestParameters" aria-controls="GetAllDetailedResponses_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_RequestSample" aria-controls="GetAllDetailedResponses_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_WebJavascriptForm" aria-controls="GetAllDetailedResponses_WebJavascriptForm" role="tab" data-toggle="tab">Web Javascript Form</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_CurlForm" aria-controls="GetAllDetailedResponses_CurlForm" role="tab" data-toggle="tab">Curl Form</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_DirectJavaForm" aria-controls="GetAllDetailedResponses_DirectJavaForm" role="tab" data-toggle="tab">Direct Java Form</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_JSONResponseSample" aria-controls="GetAllDetailedResponses_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetAllDetailedResponses_ResponseParameters" aria-controls="GetAllDetailedResponses_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetAllDetailedResponses_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">startDate</td>
                  <td align="left">The date of request sent or responses received.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">endDate</td>
                  <td align="left">The ending date for which responses are to be retrieved.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This is an optional parameter. If this is not sent then all engagements are retrieved for this account indicated by the tokenId. If this parameter is passed then the engagements with this specific phone number is retrieved.<p><p>
                   <b> The startDate, endDate and userPhoneNo can be combined in all the other discussed requests here.</b></td>
                </tr>
                
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_RequestSample">
 <pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
{{-- "tokenId":"{{token}}", --}}
"startDate":"2016-02-02T12:26:12.791Z",
"endDate":"2016-02-28T12:26:12.791Z",
"userPhoneNo":"14088987788"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_WebJavascriptForm">
    	<p>A Sample invocation is shown below:</p>
<pre class="language-http copytoclipboard"><code>var queryEndpoint = 'https://community.ushur.me/infoQuery';
var jsonStringLogin = convertTOjsonData(tokenId, enterprise, startdate, enddate);

$.ajax({
    type: 'POST',
    contentType: 'application/json',
    url: queryEndpoint,
    dataType: "text",
    data: jsonStringLogin,
    success: function(response) {
        onComplete(response)
    },
    error: function(jqXHR, textStatus, errorThrown) {}
});

var convertTOjsonData = function(tokenId, enterprise, startdate, enddate) {
    return JSON.stringify({
        "tokenId": tokenId,
        "startDate": startdate,
        "endDate":endDate
    });
};
  </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_CurlForm">
    	  <p>API can be invoked with curl like the following:</p>
  <pre class="language-http copytoclipboard"><code>curl -H "Content-Type: application/json; charset=UTF-8" --data @retrieve.json https://community.ushur.me/infoQuery

retrieve.json:
{"tokenId":"c2bb6fd6-7a9c-4561-ace0-0cb947a59ba3","startDate" : "2014-10-10T12:26:12.791Z","endDate" : "2014-10-24T12:26:12.791Z"}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_DirectJavaForm">
    	<p>A sample java code illustrates the direct form:</p>
<pre class="language-http copytoclipboard"><code>try {
      JSONObject json = new JSONObject();
      json.put("tokenId", "c2bb6fd6-7a9c-4561-ace0-0cb947a59ba3");  
      json.put("startDate", "2014-10-10T12:26:12.791Z");  
      json.put("endDate", "2014-10-24T12:26:12.791Z");  
      
      CloseableHttpClient httpClient = HttpClientBuilder.create().build();

      try {
        HttpPost request = new HttpPost("https://community.ushur.me/infoQuery");
        StringEntity jsonParams = new StringEntity(json.toString());
        request.addHeader("Content-type", "application/json");
        request.addHeader("Accept","application/json");
        request.setEntity(jsonParams);
        CloseableHttpResponse response = httpClient.execute(request);
        System.out.println(response.toString());
        String jsonResp = EntityUtils.toString(response.getEntity(), "UTF-8");
        System.out.println(jsonResp);
        return true;
      } 
      catch (Exception ex) {
        // handle exception here
      }
      finally {
        httpClient.close();
      }
}
catch (Exception e) {
    e.printStackTrace();
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
    "result": [
        {
            "date": "Tue Mar 10 00:50:51 EDT 2015",
            "location": "",
            "name": "Henry G",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:hi henry how are you?",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "ec7bb83a-79ff-4c3d-939d-0ab0391d4b6f-uxidxyz-a418bf65-41aa-4171-a951-93d82eb7cda8",
            "timestamp": "Tue Mar 10 00:50:51 EDT 2015"
        },
        {
            "date": "Tue Mar 10 00:51:00 EDT 2015",
            "location": "",
            "name": "Henry G",
            "phone": "+12098746734",
            "response": {
                "content": "[Henry]:got this now",
                "dispStr": "got this now",
                "menuId": "",
                "type": "menu.disabled.response"
            },
            "sid": "ec7bb83a-79ff-4c3d-939d-0ab0391d4b6f-uxidxyz-a418bf65-41aa-4171-a951-93d82eb7cda8",
            "timestamp": "Tue Mar 10 00:51:00 EDT 2015"
        },
        {
            "date": "Mon Mar 30 23:41:02 EDT 2015",
            "location": "",
            "name": "",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:msg only on 033015 tested Now_0",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "233a3748-1b46-4c2a-9df5-1cf97c582a90-uxidxyz-02611318-d445-4393-86e9-feb77ca7dbdd",
            "timestamp": "Mon Mar 30 23:41:02 EDT 2015"
        },
        {
            "date": "Mon Mar 30 23:41:02 EDT 2015",
            "location": "",
            "name": "",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:msg only on 033015 tested Now_1",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "c918cb3f-5275-42c0-ae7e-3265623c5f17-uxidxyz-389f5d1e-2e0b-4e27-9e35-cfbd7e14b0a4",
            "timestamp": "Mon Mar 30 23:41:02 EDT 2015"
        },
        {
            "date": "Mon Mar 30 23:41:03 EDT 2015",
            "location": "",
            "name": "",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:msg only on 033015 tested Now_2",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "9ca7121f-987e-4570-b5f5-d58df99cb315-uxidxyz-54ab3ed3-883b-4383-a6a4-cd82e49294be",
            "timestamp": "Mon Mar 30 23:41:03 EDT 2015"
        },
        {
            "date": "Mon Mar 30 23:50:17 EDT 2015",
            "location": "",
            "name": "Henry G",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:hi henry there",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "1bb0d49b-fea5-4d17-8d35-b5c414b68277-uxidxyz-ee2b51c9-c2a7-4970-bf14-cd0074e5ab84",
            "timestamp": "Mon Mar 30 23:50:17 EDT 2015"
        },
        {
            "date": "Tue Mar 31 01:59:46 EDT 2015",
            "location": "",
            "name": "Henry G",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:hi henry2",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "c3d3c0df-e6c9-43c6-83dc-579d978cb301-uxidxyz-4be6385b-f412-4c16-adfd-85d09d729c6a",
            "timestamp": "Tue Mar 31 01:59:46 EDT 2015"
        },
        {
            "date": "Tue Mar 31 01:59:57 EDT 2015",
            "location": "",
            "name": "Henry G",
            "phone": "+12098746734",
            "response": {
                "content": "[Henry]:got it Ushur2",
                "dispStr": "got it Ushur2",
                "menuId": "",
                "type": "menu.disabled.response"
            },
            "sid": "c3d3c0df-e6c9-43c6-83dc-579d978cb301-uxidxyz-4be6385b-f412-4c16-adfd-85d09d729c6a",
            "timestamp": "Tue Mar 31 01:59:57 EDT 2015"
        },
        {
            "date": "Tue Mar 31 16:18:44 EDT 2015",
            "location": "",
            "name": "",
            "phone": "+12098746734",
            "response": {
                "content": "[Ushur]:msg only on 033015 tested Now_0",
                "dispStr": "Message Sent",
                "menuId": "",
                "type": "menu.disabled.sent"
            },
            "sid": "610fb50f-070d-4211-8fff-7a401aaf0ce7-uxidxyz-8942e182-d842-4b7f-a220-a7b10ec1fe36",
            "timestamp": "Tue Mar 31 16:18:44 EDT 2015"
        }
    ],
    "stats": {
        "menu.resp": 0,
        "menu.sent": 0
    }
}
    </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAllDetailedResponses_ResponseParameters">
    	    <table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">date</td>
                  <td align="left">This is the time at which message was sent or response received.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">location</td>
                  <td align="left">This is the location information </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">name</td>
                  <td align="left">The name of the party to whom the message was sent out and from whom this response is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phone</td>
                  <td align="left">The phone number of the party to whom the message was sent out and from where this reponse is coming from.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">response</td>
                  <td align="left">The actual response text from the remote party to whom the message was sent out. The data also includes the id of the menu, the type of menu, the chosen option id and the actual display string of the response.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">sid</td>
                  <td align="left">This is the identifier for correlating the responses with every message that was sent out.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">timestamp</td>
                  <td align="left">This is the time at which this response arrived.</td>
                </tr>
				
                </tbody>
                </table>
    </div>
  </div>

			</div>
		</div>
		<!-- // Get All Detailed Responses -->

		<!-- // GetStats  starts here  needs to be updated  not exposed now 
		
		<div id="GetStats" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Stats for an enterprise</h3>		
				<p> Get latest stats for an enterprise. SuperAdmin can get stats for other enterprise</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs 
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetStats_RequestParameters" aria-controls="GetStats_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetStats_RequestSample" aria-controls="GetStats_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetStats_JSONResponseSample" aria-controls="GetStats_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetStats_ResponseParameters" aria-controls="GetStats_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes 
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetStats_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be checked as blacklisted or not </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetStats_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getStats
		Content-Type:application/json
		{
		"cmd":"getStats",
		"userPhoneNo":"+16614187487",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
   <!-- <h4>JSON Response Sample</h4> 
	<div role="tabpanel" class="tab-pane" id="GetStats_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"blackListed": "no"
			}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetStats_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">blackListed</td>
                  <td align="left"> Response whether the user phone number is blacklisted or not </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- GetStats API call ends here -->
		 
		<!-- // GetCampaignList  starts here Needs to be modified, not exposed right now 
		
		<div id="getCampaignList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get BlackList Information for an account</h3>		
				<p> Checks if the phone number specified is blacklisted or not for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs 
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetCampaignListInfo_RequestParameters" aria-controls="GetCampaignListInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetCampaignListtInfo_RequestSample" aria-controls="GetCampaignListInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetCampaignListInfo_JSONResponseSample" aria-controls="GetCampaignListInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetCampaignListInfo_ResponseParameters" aria-controls="GetCampaignListInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes 
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetCampaignList_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be checked as blacklisted or not </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetCampaignListInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getCampaignList
		Content-Type:application/json
		{
		"cmd":"getCampaignListInfo",
		"userPhoneNo":"+16614187487",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> 
	<div role="tabpanel" class="tab-pane" id="getCampaignListInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"campaign list": "no"
			}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="getBlackListInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">blackListed</td>
                  <td align="left"> Response whether the user phone number is blacklisted or not </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- GetCampaignList API call ends here -->
		 
		<!-- // GetOngoing Campaigns starts here 
		
		<div id="getOngoingCampaigns" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get BlackList Information for an account</h3>		
				<p> Checks if the phone number specified is blacklisted or not for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs 
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#getOngoingCampaigns_RequestParameters" aria-controls="getOngoingCampaigns_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#getOngoingCampaigns_RequestSample" aria-controls="getOngoingCampaigns_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#getOngoingCampaigns_JSONResponseSample" aria-controls="getOngoingCampaigns_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#getOngoingCampaigns_ResponseParameters" aria-controls="getOngoingCampaigns_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes 
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="getOngoingCampaigns_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be checked as blacklisted or not </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="getOngoingCampaigns_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getgetOngoingCampaigns
		Content-Type:application/json
		{
		"cmd":"getBlackListInfo",
		"userPhoneNo":"+16614187487",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> 
	<div role="tabpanel" class="tab-pane" id="getOngoingCampaigns_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"blackListed": "no"
			}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="getOngoingCampaigns_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">blackListed</td>
                  <td align="left"> Response whether the user phone number is blacklisted or not </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- GetOngoing Campaigns API call ends here -->

		<!-- Get Tagged Responses  -->
		<div id="GetTaggedResponses" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Tagged Responses</h3>		
				<p> These queries are pointed at a specific or multiple Ushur Micro-Engagements.  Applications on the enterprise that are focused on specific micro-engagements can use these and build very powerful business applications.  These applications can act as monitors of these micro-engagements and in turn take actions which can very well invoke Ushurs to the users.
				</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetTaggedResponses_RequestParameters" aria-controls="GetTaggedResponses_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
   <li role="presentation"><a href="#GetTaggedResponses_RequestSample1" aria-controls="GetTaggedResponses_RequestSample1" role="tab" data-toggle="tab">Request Sample 1 without any RequestId</a></li> 
    <li role="presentation"><a href="#GetTaggedResponses_RequestSample2" aria-controls="GetTaggedResponses_RequestSample2" role="tab" data-toggle="tab">Request Sample 2 for retrieving records in batches</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetTaggedResponses_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                 <!-- <th align="left">Property</th> -->
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                <!--  <td class="notranslate" align="left">mandatory(*)</td> -->
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.<br><br>(*) <code>WARNING:</code> Querying only with this tokenId will result in a very huge response! Recommendation is to have queries based on campaignId, UeTag and other combinations.  If the entire records is necessary then consider using with nRecords and lastRecordId to retrieve records in a batch.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">filterCmd</td>
                <!--  <td class="notranslate" align="left">optional</td> -->
                  <td align="left">Single or list of filter commands mentioned earlier in this document.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                <!--  <td class="notranslate" align="left">optional</td> -->
                  <td align="left">The Ushur for which the responses are being retrieved.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">UeTag</td>
                <!--  <td class="notranslate" align="left">optional</td> -->
                  <td align="left">One or more UeTag for which queries are being made here.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">lastRecordId</td>
                <!--  <td class="notranslate" align="left">optional</td> -->
                  <td align="left">This has the value of the last record that was returned in the previous responses.  Having this will make
                    the server send out records only after this record id.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">nRecords</td>
                <!--  <td class="notranslate" align="left">optional</td>  -->
                  <td align="left">There can be large data in responses and this parameter can get this many items in one response and can get further records in new queries that leverages lastRecordId parameter.  Sample: "<code>nRecords</code>":"10" in the query will result getting back 10 records.  In the responses there will be "counts" parameter that reflect the actual number of records returned and "<code>totalRecords</code>" indicates the overall records for the query out of which we are retrieving <code>nRecords</code> at a time.</td>
                </tr>
                </tbody>
                </table>
    </div>
   <div role="tabpanel" class="tab-pane" id="GetTaggedResponses_RequestSample1">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"filterCmd":"getSids,LastEngagement",
{{-- "tokenId":"{{ven1177token}}", --}}
"campaignId": "UshurResolutionConfirmation",
"UeTag": "UeTag_927455,UeTag_881809,UeTag_382867,UeTag_253937,UeTag_457543,UeTag_635124,UeTag_847034,UeTag_End"
}</code></pre>

 <h4>JSON Response Sample</h4> 
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:48:54.688Z",
      "response": {
        "UeTag": "UeTag_927455",
        "dispStr": "Menu Sent",
        "topic": "Has your issue been resolved?\nPlease respond with a number"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:11.323Z",
      "response": {
        "optionId": "1",
        "UeTag": "UeTag_382867",
        "dispStr": "Yes"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:11.381Z",
      "response": {
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_253937",
        "topic": "How satisfied were you with the service provided by $u_EnterpriseDisplay$ on a scale from 10 (completely) to 1 (not at all)?"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:25.833Z",
      "response": {
        "UeTag": "UeTag_253937",
        "dispStr": "7"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:25.861Z",
      "response": {
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_457543",
        "topic": "How likely are you to recommend $u_EnterpriseDisplay$ products to a friend on a scale from 10 (definitely) to 1 (definitely not)?"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:39.756Z",
      "response": {
        "UeTag": "UeTag_457543",
        "dispStr": "7"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:52:39.786Z",
      "response": {
        "dispStr": "Prompt Sent",
        "UeTag": "UeTag_635124",
        "topic": "Please share any additional comments that can help us serve you better :"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:53:24.437Z",
      "response": {
        "UeTag": "UeTag_635124",
        "dispStr": "The incident is resolved now..Show all comments on the ticker"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    },
    {
      "name": "",
      "phone": "+16614187487",
      "date": "2016-05-05T04:53:24.476Z",
      "response": {
        "UeTag": "UeTag_End",
        "dispStr": "EndOfUshur"
      },
      "requestId": "INC0010126",
      "sid": "9f4f377a-55a3-4f9d-8ae5-191244a28ec9-uxidxyz-8c7cc526-9967-4bec-b8c1-5a3102a9683b"
    }
  ],
  "counts": 9,
  "lastRecordId": "572ad1c43e653d3d57bee6a0"
}</code></pre>
    </div> 

    <div role="tabpanel" class="tab-pane" id="GetTaggedResponses_RequestSample2">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
{{-- "tokenId":"{{ven1177token}}", --}}
"nRecords":"5",
"lastRecordId": "54b8a4bd6bc0dce0189b090e"
}</code></pre>

 <h4>JSON Response Sample</h4> 
    	<pre class="language-http copytoclipboard"><code>{
  "stats": {
    "menu.sent": 2,
    "menu.resp": 0
  },
  "result": [
    {
      "name": "Bob",
      "phone": "+16614187487",
      "date": "2015-01-17T00:17:16.824Z",
      "sid": "d7c89d7f-b3d0-4508-aa8c-c9e291f6adf7-uxidxyz-e225b35b-31dc-4fb7-9e04-8223ec85dcad",
      "timestamp": "2015-01-17T00:17:16.824Z",
      "location": "",
      "response": {
        "menuId": "visualMenu",
        "type": "menu.sent",
        "dispStr": "Menu Sent",
        "visual": "false",
        "campaignId": "visualMenu"
      }
    },
    {
      "name": "Bob",
      "phone": "+16614187487",
      "date": "2015-01-17T00:18:57.234Z",
      "sid": "fdaa683a-070f-4aa7-a0d3-0d4aa37e8b1b-uxidxyz-7dfeb4d6-fc86-47ab-a126-fa083ebc5d7d",
      "timestamp": "2015-01-17T00:18:57.234Z",
      "location": "",
      "response": {
        "menuId": "visualMenu",
        "type": "menu.sent",
        "dispStr": "Menu Sent",
        "visual": "false",
        "campaignId": "visualMenu"
      }
    },
    {
      "phone": "+16614187487",
      "sid": "67081802-74e9-4ed7-b1cb-50878089348b-uxidxyz-37ed39db-a149-4e06-b46e-8dedaa38dc88",
      "timestamp": "2015-01-17T20:19:45.876Z",
      "date": "2015-01-17T20:19:45.876Z"
    },
    {
      "phone": "+16614187487",
      "sid": "e7df8e73-ccb9-457b-bb17-b25291cfbd69-uxidxyz-d1e74f48-de2f-482e-bd67-70ca20cba5e5",
      "timestamp": "2015-01-17T20:19:54.562Z",
      "date": "2015-01-17T20:19:54.562Z"
    },
    {
      "phone": "+16614187487",
      "sid": "e7df8e73-ccb9-457b-bb17-b25291cfbd69-uxidxyz-d1e74f48-de2f-482e-bd67-70ca20cba5e5",
      "timestamp": "2015-01-17T20:20:00.585Z",
      "date": "2015-01-17T20:20:00.585Z"
    }
  ],
  "counts": 5,
  "lastRecordId": "54bac3f09809436f2c7c2989",
  "totalRecords": 2518
}</code></pre>

    </div>
  </div>

			</div>
		</div>
		<!-- // Get Tagged Responses -->

		<!-- Set Call Back Number  -->
		<div id="SetCallBackNumber" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set Call Back Number</h3>		
				<p> The callback number is used to reach back to the administrator on the enterprise and the Ushur basis.  This api allows dynamic setting of such a callback number.  This number can be used for connecting over voice or texting back from the user or even system generated messages to the admin.
				</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetCallBackNumber_RequestParameters" aria-controls="SetCallBackNumber_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetCallBackNumber_RequestSample" aria-controls="SetCallBackNumber_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetCallBackNumber_JSONResponseSample" aria-controls="SetCallBackNumber_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetCallBackNumber_ResponseParameters" aria-controls="SetCallBackNumber_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetCallBackNumber_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">token</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">The campaign ID of the campaign.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">callbackNum</td>
                  <td align="left">The call back number that you want to set for the campaign.  When the campaign involves the user having the ability to reach back say via voice this callback phone number will be used to establish the connection.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetCallBackNumber_RequestSample">
    	<pre class="language-http copytoclipboard"><code>Method: PUT
{{-- URL: https://community.ushur.me/rest/campaign/{{campaignId}}/callbackNo/{{callbackNum}} --}}
Content-Type: application/json

{
{{-- "userName":"{{userName}}", --}}
{{-- "token":"{{token}}" --}}
}</code></pre>

    </div>
    <div role="tabpanel" class="tab-pane" id="SetCallBackNumber_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": null,
  "infoText": "Call back number updated successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetCallBackNumber_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">The texts vary depending on the API request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>


			</div>
		</div>
		<!-- // Set Call Back Number -->
        <!-- // Incoming Email Processing starts here -->
		
		<div id="IncomingEmailProcesing" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Incoming Email Processing</h3>		
				<p> This API onIncomingEmailProcessing is used to process incoming email and send the response to the email address given in the API</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#IncomingEmailProcesing_RequestParameters" aria-controls="IncomingEmailProcesing_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#IncomingEmailProcesing_RequestSample" aria-controls="IncomingEmailProcesing_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#IncomingEmailProcesing_JSONResponseSample" aria-controls="IncomingEmailProcesing_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#IncomingEmailProcesing_ResponseParameters" aria-controls="IncomingEmailProcesing_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="IncomingEmailProcesing_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">uniqueIncEmailId</td>
                  <td align="left"> This is the Ushur/Campaign name for the email Classification </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">emailServiceId</td>
                  <td align="left"> The is the Pull email key word configured on the system to trigger email processing </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left"> emailSubject </td>
                  <td align="left"> The subject line of Email  </td>
                </tr>
				<tr>
				  <td class="notranslate" align="left"> emailBody </td>
                  <td align="left"> The contents of the Email Body  </td>
				</tr>
				<tr>
				  <td class="notranslate" align="left"> replyTo </td>
                  <td align="left"> This is the email address to which Ushur platform will reply after successful processing of email  </td>
				</tr>
			<!--	<tr>
				  <td class="notranslate" align="left"> emailAttachmentURL </td>
                  <td align="left">Array of urls like ["url1", "url2"] to store the email attachments </td>
				</tr>
				<tr>  -->
				  <td class="notranslate" align="left"> apiVer </td>
                  <td align="left"> The version of the API being used which is by default set to 3.1 for this API  </td>
				</tr>
				
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="IncomingEmailProcesing_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/onIncomingEmail
		Content-Type:application/json
		{
		{{-- "tokenId": {{currentValidToken}}, --}}
		"uniqueIncEmailId": "emailClassification",
		"emailServiceId": "classify@qa.ushur.me",
		"emailSubject": "new account",
		"emailBody": "Hello, my name is Michael and my contact number is +44 8992 8122 and can someone please help me how do i get my new account created ? what is the process for registration ?",
		"replyTo": "ushurtester@gmail.com",
		"apiVer": "3.1"
		}
 		</code></pre>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="IncomingEmailProcesing_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			SUCCESS: Email submitted for Data Extraction and Categorization!
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="IncomingEmailProcesing_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">SUCCESS</td>
                  <td align="left"> Email submitted for Data Extraction and Categorization! </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // Incoming Email Processing ends here -->
		
		<!-- // GetBlackList Info  starts here -->
		
		<div id="getBlackListInfo" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get BlackList Information for an account</h3>		
				<p> Checks if the phone number specified is blacklisted or not for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetBlackListInfo_RequestParameters" aria-controls="GetBlackListInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetBlackListInfo_RequestSample" aria-controls="GetBlackListInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetBlackListInfo_JSONResponseSample" aria-controls="GetBlackListInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetBlackListInfo_ResponseParameters" aria-controls="GetBlackListInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetBlackListInfo_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be checked as blacklisted or not </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	
	<div role="tabpanel" class="tab-pane active" id="GetBlackListInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getBlackListInfo
		Content-Type:application/json
		{
		"cmd":"getBlackListInfo",
		"userPhoneNo":"+1xxxxxxxxxx",
		{{-- "tokenId":"{{token}}", --}}
		"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane active" id="GetBlackListInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"blackListed": "no"
			}
			{
			"blackListed": "yes",
			"blackListInfo": "{ 
								"acctUserName" : "ABCD@XXXX.COM" , 
								"acctUserFullName" : "" ,
								"isOperInit" : true , 
								"userName" : "user+91xxxxxxxxxx" , 
								"userPhoneNo" : "+91xxxxxxxxxx" ,
								"id" : "5df9ab1e9e8e9b3ba6b8df48" , 
								"updatedDate" : "2019-12-18T04:29:18.732Z"}"
			}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane active" id="GetBlackListInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">blackListed</td>
                  <td align="left"> Response whether the user phone number is blacklisted or not </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">blackListInfo</td>
                  <td align="left"> Details of the blacklist phone is returned  </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- GetBlackListInfo API call ends here -->
		 
		<!-- // BlackListPhone  starts here -->
		
		<div id="blackListPhone" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">BlackList Phone Number</h3>		
				<p> Blacklist the number present in the request param  for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#BlackListPhone_RequestParameters" aria-controls="BlackListPhone_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#BlackListPhone_RequestSample" aria-controls="BlackListPhone_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#BlackListPhone_JSONResponseSample" aria-controls="BlackListPhone_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#BlackListPhone_ResponseParameters" aria-controls="BlackListPhone_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="BlackListPhone_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be blacklisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">accountUserName</td>
                  <td align="left"> The email id  or account where the phone number is present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">AccountUserFullName</td>
                  <td align="left"> The account user's full name. this is not a mandatory parameter </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="BlackListPhone_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoSet/blackListPhone
		Content-Type:application/json
		{
		  "userPhoneNo":"+1xxxxxxxxxx",
		  {{-- "tokenId":"{{token}}",
		  "acctUserName":"{{email}}", --}}
		  "acctUserFullName":"",
		  "apiVer":"3.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="BlackListPhone_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			"status":"success",
			"blackListed":true,
			"userPhoneNo":"+91xxxxxxxxxx"
		}
		OR
		{
			"status": "success",
			"AlreadyBlackListed": true,
			"userPhoneNo": "+91xxxxxxxxxx"
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="BlackListPhone_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns the whether the phone was blackListedlisted or not </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">blackListed</td>
                  <td align="left"> Response will return either true or false, true is phone is blacklisted or already blacklisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was blacklisted or already blacklisted </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- BlackListPhone API call ends here -->
		 
		 <!-- // removePhoneFromBlackList  starts here -->
		
		<div id="removePhoneFromBlackList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Remove Phone from BlackList</h3>		
				<p> Removes a phone number present in blacklist for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#removePhoneFromBlackList_RequestParameters" aria-controls="removePhoneFromBlackList_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#removePhoneFromBlackList_RequestSample" aria-controls="removePhoneFromBlackList_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#removePhoneFromBlackList_JSONResponseSample" aria-controls="removePhoneFromBlackList_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#removePhoneFromBlackList_ResponseParameters" aria-controls="removePhoneFromBlackList_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="removePhoneFromBlackList_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be removed from blacklist </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">accountUserName</td>
                  <td align="left"> The email id  or account where the phone number is present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">AccountUserFullName</td>
                  <td align="left"> The account user's full name. this is not a mandatory parameter </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">EnterpriseOverride</td>
                  <td align="left">  If number is blacklisted ( or whitelisted ) by user doing Optout/STOP/optin),then it can be removed from the respective list only if the SuppEntOverridingUserOptout flag is YES. If this is NO, phone can not be removed from WhiteList/BlackList  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="removePhoneFromBlackList_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoSet/removePhoneFromBlackList
		Content-Type:application/json
		{
		  "userPhoneNo":"+1xxxxxxxxxx",
		  {{-- "tokenId":"{{token}}",
		  "acctUserName":"{{email}}", --}}
		  "acctUserFullName":"",
		  "enterpriseOverride":"yes",
		  "apiVer":"3.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="removePhoneFromBlackList_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			"status":"success",
			"userPhoneNo":"+91xxxxxxxxxx",
			"removed":true,
			"userInitiatedOptout":false
		}
		OR
		{
			"status": "failure",
			"respCode": 404,
			"respText": "Not in blacklist",
			"userPhoneNo": "+91xxxxxxxxxx",
			"removed": false
		}
		OR
		{
			"status": "failure",
			"respCode": 404,
			"respText": "Failed to remove from blacklist",
			"userPhoneNo": "+91xxxxxxxxxxx",
		    "userInitiatedOptout":false
			"removed": false
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="removePhoneFromBlackList_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns the whether the API returns a success or failure </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">removed</td>
                  <td align="left"> Response will return either true or false, true if phone is removed from blacklist and false if the phone number is not in blacklist or falied to remove from blacklist </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was blacklisted or already blacklisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left"> A textual description of the response </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- removePhoneFromBlackList API call ends here -->
		
		<!-- // GetWhiteListInfo  starts here -->
		
		<div id="getWhiteListInfo" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get WhiteList Information</h3>		
				<p> Checks if a given number is present in whitelist or not for a given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetWhiteListInfo_RequestParameters" aria-controls="GetWhiteListInfo_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetWhiteListInfo_RequestSample" aria-controls="rGetWhiteListInfo_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetWhiteListInfo_JSONResponseSample" aria-controls="GetWhiteListInfo_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetWhiteListInfo_ResponseParameters" aria-controls="GetWhiteListInfo_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetWhiteListInfo_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be blacklisted </td>
                </tr>
				<td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetWhiteListInfo_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getWhiteListInfo
		Content-Type:application/json
		{
			"cmd":"getWhiteListInfo",
			"userPhoneNo":"+1xxxxxxxxx",
			{{-- "tokenId":"{{token}}", --}}
			"apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetWhiteListInfo_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			"whiteListed": "no"
		}
		OR
		{
			"whiteListed": "yes",
			"whiteListInfo": "{
							"isOperInit":false, 
							"userName" : "user+xxxxxxxxxxxxx" ,
							"userPhoneNo" : "+91xxxxxxxxxx" , 
							"id" : "5df9e3f79e8e9b3ba6b8e378" , 
							"updatedDate" : "2019-12-18T08:31:51.462Z"
							}"
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetWhiteListInfo_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns the whether the API returns a success or failure </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">whiteListed</td>
                  <td align="left"> Response will return either true or false, true if phone is whitelisted and false if the phone number is not in whitelisted</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was whitelisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">isOperInit</td>
                  <td align="left"> Whether initiated by Operator or User ( by sending #optin or pull to any Ushur)</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">id</td>
                  <td align="left"> Internal Id of the whitelisted number - to query record based on Id </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">updatedDate</td>
                  <td align="left"> Date when the phone number was whitelisted </td>
              </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- GetWhiteListInfo API call ends here -->
		 
		 <!-- // WhiteListPhone  starts here -->
		
		<div id="whiteListPhone" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">WhiteList Phone Number</h3>		
				<p> WhiteList the number present in the request param  for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#WhiteListPhone_RequestParameters" aria-controls="WhiteListPhone_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#WhiteListPhone_RequestSample" aria-controls="WhiteListPhone_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#WhiteListPhone_JSONResponseSample" aria-controls="WhiteListPhone_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#WhiteListPhone_ResponseParameters" aria-controls="WhiteListPhone_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="WhiteListPhone_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be whitelisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">accountUserName</td>
                  <td align="left"> The email id  or account where the phone number is present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">AccountUserFullName</td>
                  <td align="left"> The account user's full name. this is not a mandatory parameter </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="WhiteListPhone_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoSet/whiteListPhone
		Content-Type:application/json
		{
		  {{-- "userPhoneNo":"{{phone}}", --}}
		  {{-- "tokenId":"{{token}}",
		  "acctUserName":"{{email}}", --}}
		  "acctUserFullName":"",
		  "apiVer":"3.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="WhiteListPhone_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			"status": "success",
			"gbSuccess": true,
			"whiteListed": true,
			"userPhoneNo": "+91xxxxxxxxxx"
		}
		or
		{
			"status": "success",
			"AlreadyWhiteListed": true,
			"userPhoneNo": "+91xxxxxxxxxx"
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="WhiteListPhone_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns the whether the phone was whitelisted or not </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">whiteListed</td>
                  <td align="left"> Response will return either true or false, true is phone is whiteListed or already whiteListed </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was whiteListed or already whiteListed </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- WhiteListPhone API call ends here -->
		 
		 		 <!-- // removePhoneFromWhiteList  starts here -->
		
		<div id="removePhoneFromWhiteList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Remove Phone from WhiteList</h3>		
				<p> Removes a phone number present in Whitelist for the given account</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#removePhoneFromWhiteList_RequestParameters" aria-controls="removePhoneFromWhiteList_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#removePhoneFromWhiteList_RequestSample" aria-controls="removePhoneFromWhiteList_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#removePhoneFromWhiteList_JSONResponseSample" aria-controls="removePhoneFromWhiteList_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#removePhoneFromWhiteList_ResponseParameters" aria-controls="removePhoneFromWhiteList_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="removePhoneFromWhiteList_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> The phone number that needs to be removed from whitelist </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">accountUserName</td>
                  <td align="left"> The email id  or account where the phone number is present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">AccountUserFullName</td>
                  <td align="left"> The account user's full name. this is not a mandatory parameter </td>
                </tr>
			<!--	<tr>
                  <td class="notranslate" align="left">EnterpriseOverride</td>
                  <td align="left">  If number is whitelisted ( or blacklisted ) by user doing Optout/STOP/optin),then it can be removed from the respective list only if the EnterpriseOverride flag is YES. If this is NO, phone can not be removed from WhiteList/BlackList</td>
                </tr>
                <tr>  -->
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="removePhoneFromWhiteList_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoSet/removePhoneFromWhiteList
		Content-Type:application/json
		{
		  "userPhoneNo":"+1xxxxxxxxx",
		  {{-- "tokenId":"{{token}}",
		  "acctUserName":"{{email}}", --}}
		  "acctUserFullName":"",
		<!--  "enterpriseOverride":"yes",-->
		  "apiVer":"3.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="removePhoneFromWhiteList_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
        "status":"success",
        "userPhoneNo":"+91xxxxxxxxxx",
        "removed":true,
        "userInitiatedOptout":false
		}
		OR
		{
			"status": "failure",
			"respCode": 404,
			"respText": "Not in whitelist",
			"userPhoneNo": "+91xxxxxxxxxx",
			"removed": false
		}
		OR
		{
			"status": "failure",
			"respCode": 404,
			"respText": "Failed to remove from whitelist",
			"userPhoneNo": "+91xxxxxxxxxxx",
		   "userInitiatedOptout":false
			"removed": false
		}

		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="removePhoneFromWhiteList_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> Returns the whether the API returns a success or failure </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">removed</td>
                  <td align="left"> Response will return either true or false, true if phone is removed from whitelist and false if the phone number is not in whitelist or falied to remove from whitelist </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was whitelisted or already whitelisted </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left"> A textual description of the response </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- removePhoneFromWhiteList API call ends here -->
		 
		<!-- // getBlackToWhiteListed  starts here -->
		
		<div id="GetBlackToWhiteListed" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get all Phone numbers which moved from Blacklist to WhiteList</h3>		
				<p> It provides a list of all the numbers which are moved from blacklist to whitelist for a given account.</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#getBlackToWhiteListed_RequestParameters" aria-controls="getBlackToWhiteListed_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#getBlackToWhiteListed_RequestSample" aria-controls="getBlackToWhiteListed_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#getBlackToWhiteListed_JSONResponseSample" aria-controls="getBlackToWhiteListed_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#getBlackToWhiteListed_ResponseParameters" aria-controls="getBlackToWhiteListed_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="getBlackToWhiteListed_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="getBlackToWhiteListed_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getBlackToWhiteListed
		Content-Type:application/json
		{
		  {{-- "tokenId":"{{token}}", --}}
		  "apiVer":"2.1"
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="getBlackToWhiteListed_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
		{
			"1":"{
					"userName" : "user+91xxxxxxxxxx" ,
					"userPhoneNo" : "+91xxxxxxxxxx" ,
					"enterpriseInitiated" : false ,
					"id" : "5df9ad839e8e9b3ba6b8df58" , 
					"updatedDate" : "2019-12-18T04:39:31.395Z" , 
					"createdDate" : "2019-12-18T04:39:31.395Z"
					}",
			"2":"{ 
					"userName" : "user+91xxxxxxxxxx" ,
					"userPhoneNo" : "+91xxxxxxxxxx" ,
					"enterpriseInitiated" : false ,
					"id" : "5df9e19f9e8e9b3ba6b8e2c9" ,
					"updatedDate" : "2019-12-18T08:21:51.577Z" ,
					"createdDate" : "2019-12-18T08:21:51.577Z"
					}",
			"3":"{ 
					"userName" : "user+91xxxxxxxxxx" , 
					"userPhoneNo" : "+91xxxxxxxxxx" ,
					"enterpriseInitiated" : false ,
					"id" : "5dfa023b9e8e9b2e2e69909d" ,
					"updatedDate" : "2019-12-18T10:40:59.256Z" ,
					"createdDate" : "2019-12-18T10:40:59.256Z"
					}"
		}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="getBlackToWhiteListed_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left"> Returns the user name </td>
                </tr>
                <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left"> User phone number that was moved from BlackList to WhiteList </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">enterpriseInitiated</td>
                  <td align="left"> If number is moved to whitelist by Operator or by User opting in </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">id</td>
                  <td align="left"> Internal Id of the whitelisted number - to query record based on Id </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">updatedDate</td>
                  <td align="left"> Date this record is updated </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">createdDate</td>
                  <td align="left"> Date this record is created </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		 <!-- getBlackToWhiteListed API call ends here -->

		 <!-- // Get UeTagList -->
	<div id="GetUeTagList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get UeTag List</h3>		
				<p> This API returns the list and count of UeTags for a specific campaign /UshurID </p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetUeTagList_RequestParameters" aria-controls="GetUeTagList_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetUeTagList_RequestSample" aria-controls="GetUeTagList_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetUeTagList_JSONResponseSample" aria-controls="GetUeTagList_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetUeTagList_ResponseParameters" aria-controls="GetUeTagList_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetUeTagList_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left"> The Campaign for which the ue_tags are being requested.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetUeTagList_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/getUeTagList
		Content-Type:application/json
		{
		"cmd":"getUeTagList",
		"campaignId":"ResponseTabUpdation",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.1"
		}		
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetUeTagList_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"ushurId": "ResponseTabUpdation",
			"result": [
				{
					"message": "",
					"UeTag": "UeTag_003196"
				},
				{
					"message": "To continue, use secure link: $u_SessionUrl$",
					"UeTag": "UeTag_250011"
				},
				{
					"message": "test question",
					"UeTag": "UeTag_667573"
				},
				{
					"message": "asdafadf",
					"UeTag": "UeTag_987162"
				},
				{
					"message": "$c_uVar_testmail$",
					"UeTag": "UeTag_550547"
				},
				{
					"message": "test 2",
					"UeTag": "UeTag_112790"
				},
				{
					"message": "$c_uVar_testmail$&amp;nbsp;",
					"UeTag": "UeTag_939033"
				},
				{
					"message": "$c_uVar_testmail$ test2",
					"UeTag": "UeTag_267944"
				},
				{
					"message": "dfsfd",
					"UeTag": "UeTag_016067"
				}
			],
			"tagCount": 9
		}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetUeTagList_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">ushurID</td>
                  <td align="left"> The Campaign ID whose Ue_tag details are being returned</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">result</td>
                  <td align="left"> Returns the list of UeTags for the specific UshurID / campaign</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">tagCount</td>
                  <td align="left"> Returns the count of UeTags for a secific UshurID / Campaign </td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of Get UeTagList -->
		
				 <!-- // CancelUshur -->
	<div id="CancelUshur" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Cancel Ushur</h3>		
				<p> This API is used to cancel schedule ushurs / campaigns </p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#CancelUshur_RequestParameters" aria-controls="CancelUshur_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#CancelUshur_RequestSample" aria-controls="CancelUshur_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#CancelUshur_JSONResponseSample" aria-controls="CancelUshur_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#CancelUshur_ResponseParameters" aria-controls="CancelUshur_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="CancelUshur_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="CancelUshur_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/cancelUshur
		Content-Type:application/json
		{
		"cmd":"cancelUshur",
		"activityId":"{{"id"}}",
		{{-- "tokenId":"{{currentValidToken}}", --}}
		"apiVer":"2.2
		}
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="CancelUshur_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		200 OK
			{
			"success: "true",
			"respText": "Canceled Ushur activity/activities successfully",
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="CancelUshur_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left"> Returns the status of whether the scheduled ushur was successfully cancelled or not</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of CancelUshur -->
        <!-- All the Ushur engagements are completed here -->
		<!-- ******************************************** -->
		
		<!-- Enterprise DATA API begins here ------------- -->
		
		<!-- Add or Update Enterprise Data on Ushur  -->
		<div id="AddorUpdateEnterpriseDataonUshur" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Enterprise Data API</h2>
				<h3 class="sub-title">Add or Update Enterprise Data on Ushur</h3>	
				<p> This request is used to either add or update one or multiple sets of enterprise data on the Ushur.  The Ushur platform supports various modes of uploading the data so that the Ushurs with their micro-engagements can use these.  There is support for secure ftp, uploading of files via the Ushur Front-End Interface or via API like these.
				</p>			
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#AddorUpdateEnterpriseDataonUshur_RequestParameters" aria-controls="AddorUpdateEnterpriseDataonUshur_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#AddorUpdateEnterpriseDataonUshur_RequestSample" aria-controls="AddorUpdateEnterpriseDataonUshur_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#AddorUpdateEnterpriseDataonUshur_JSONResponseSample" aria-controls="AddorUpdateEnterpriseDataonUshur_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#AddorUpdateEnterpriseDataonUshur_ResponseParameters" aria-controls="AddorUpdateEnterpriseDataonUshur_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="AddorUpdateEnterpriseDataonUshur_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">content</td>
                  <td align="left">Enterprise specific data set that either be a single set or a list of data set.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">token</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="AddorUpdateEnterpriseDataonUshur_RequestSample">
    <p>The content can be an array of data.</p>
	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/uneda/data/add
Content-Type: application/json

{
  "content": [
    {
      "phone":"12098746734",
      "status": "shipping in progress",
      "prescriptionId":"PId8888",
      "orderId": "order-842918888"
    },
    {
      "phone":"16614187487",
      "status": "processing",
      "prescriptionId":"PId8978",
      "orderId": "order-967888884"
    }
  ],
  {{-- "tokenId": "{{xtoken}}" --}}
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="AddorUpdateEnterpriseDataonUshur_JSONResponseSample">
  <p>The response will indicate the total number of records that were added or updated as well.</p>
<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText": "Uneda Data update successful",
  "respCount": 2
}</code></pre>
    </div>

    <div role="tabpanel" class="tab-pane" id="AddorUpdateEnterpriseDataonUshur_ResponseParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCount</td>
                  <td align="left">Number of data sets that were added or updated.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>

			</div>
		</div>
		<!-- // Add or Update Enterprise Data on Ushur -->



		<!-- Get Enterprise Data on Ushur  -->
		<div id="GetEnterpriseDataonUshur" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Enterprise Data on Ushur</h3>		
				<p> This API is used to fetch the enterprise data from the Ushur Platform.  As shown there can be multiple sets of queries and responses are sent accordingly.
				</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetEnterpriseDataonUshur_RequestParameters" aria-controls="GetEnterpriseDataonUshur_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetEnterpriseDataonUshur_RequestSample" aria-controls="GetEnterpriseDataonUshur_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetEnterpriseDataonUshur_JSONResponseSample" aria-controls="GetEnterpriseDataonUshur_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetEnterpriseDataonUshur_ResponseParameters" aria-controls="GetEnterpriseDataonUshur_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetEnterpriseDataonUshur_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">content</td>
                  <td align="left">List of key set where each set can contain one or more keys that pertains to one or more enterprise data.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">token</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
            </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseDataonUshur_RequestSample">
    <p>The content can be an array of data.</p>
			<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/uneda/data/get
Content-Type: application/json

{
  "content": [
    {
      "prescriptionId":"PId8888",
      "orderId": "order-842918888"
    },
    { 
      "prescriptionId":"PId8978"
    }
  ],
  {{-- "tokenId": "{{token}}" --}}
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseDataonUshur_JSONResponseSample">
    <p>The response will contain all the records that matched the keys.</p>
		<pre class="language-http copytoclipboard"><code>{
  "data": [
    {
      "orderId": "order-842918888",
      "phone": "12098746734",
      "prescriptionId": "PId8888",
      "status": "shipping in progress"
    },
    {
      "orderId": "order-967888884",
      "phone": "16614187487",
      "prescriptionId": "PId8978",
      "status": "processing"
    }
  ]
}


(OR)

{
  "data": []
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseDataonUshur_ResponseParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">Empty or a list of data corresponding to the keys</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>

			</div>
		</div>
		<!-- // Get Enterprise Data on Ushur -->

		<!-- Delete Enterprise Data on Ushur  -->
		<div id="DeleteEnterpriseDataonUshur" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Delete Enterprise Data on Ushur</h3>
				<p>Similar to the setting of enterprise data this API enables deletion of the enterprise from the Ushur Platform.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
			  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#DeleteEnterpriseDataonUshur_Request" aria-controls="DeleteEnterpriseDataonUshur_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseDataonUshur_Sample" aria-controls="DeleteEnterpriseDataonUshur_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseDataonUshur_JSONResp" aria-controls="DeleteEnterpriseDataonUshur_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseDataonUshur_Response" aria-controls="DeleteEnterpriseDataonUshur_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="DeleteEnterpriseDataonUshur_Request">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">content</td>
                  <td align="left">Enterprise specific data set that either be a single set or a list of data set that all needs to be deleted.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">token</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
            </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseDataonUshur_Sample">
    	<p>The content can be an array of data.</p>
			<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/uneda/data/delete
Content-Type: application/json

{
  "content": [
    {
      "phone":"12098746734",
      "status": "shipping in progress",
      "prescriptionId":"PId8888",
      "orderId": "order-842918888"
    },
    {
      "phone":"16614187487",
      "status": "processing",
      "prescriptionId":"PId8978",
      "orderId": "order-967888884"
    }
  ],
  {{-- "tokenId": "{{xtoken}}" --}}
}
</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseDataonUshur_JSONResp">
    <p>The response will indicate the total number of records that were deleted.</p>
<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText": "Uneda Data deletion successful",
  "respCount": 2
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseDataonUshur_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCount</td>
                  <td align="left">Number of data sets that were added or updated.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Delete Enterprise Data on Ushur -->

		<!-- Initiate Campaign With Enterprise Data  -->
		<div id="InitiateCampaignWithEnterpriseData" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Initiate Campaign With Enterprise Data</h3>
				<p>As can be seen in this document there are API to initiate Ushurs and there are APIs to set the enterprise data, however at times enterprise applications need to send both the enterprise data and the Ushur invocation in a single API and this is what this API does.  The enterprise data is first attempted to be set and if there are any failures the Ushur is not launched.  When the enterprise data setting is successful then the Ushur is launched which may or may not necessarily use the data that was set with this API. It is up to the enterprise application to decide whether to send the data in the same API that needs to be used by Ushur that is being launched but that is the normal case.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
	<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#InitiateCampaignWithEnterpriseData_Request" aria-controls="InitiateCampaignWithEnterpriseData_Request" role="tab" data-toggle="tab">Request</a></li>
	<li role="presentation"><a href="#InitiateCampaignWithEnterpriseData_Sample" aria-controls="InitiateCampaignWithEnterpriseData_Sample" role="tab" data-toggle="tab">Sample</a></li>
	<li role="presentation"><a href="#InitiateCampaignWithEnterpriseData_SamplewithScheduledSend" aria-controls="InitiateCampaignWithEnterpriseData_SamplewithScheduledSend" role="tab" data-toggle="tab">Sample with Scheduled Send</a></li>
	<li role="presentation"><a href="#InitiateCampaignWithEnterpriseData_Response" aria-controls="InitiateCampaignWithEnterpriseData_Response" role="tab" data-toggle="tab">Response </a></li>
	</ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="InitiateCampaignWithEnterpriseData_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                 <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">This is the command to indicate the action taken on the server.  Possible values are initCampaign, initBulkCampaign.
                    <br><br>
                    initCampaign will launch the campaign indicated by the campaignId to the userPhoneNo indicated in the message.
                    <br><br>
                    initBulkCampaign will launch the campaign to all the users in the user db associated with the enterprise indicated by the tokenId.  In this case the userPhoneNo is not needed in the API call.
                    <br><br>
                    This command along with the enterprise data in "content" parameter will result in the data being set and then the Ushur (campaign) being initiated.  If there is failure in setting of data then a error response is sent back without initiating the Ushur.  Only upon successful setting of enterprise data will the Ushur be launched.  With certain parameters the initiation of Ushur can be scheduled at a later time although the enterprise data is updated immediately.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">This is an identifier for an Ushur structured message that will be sent out upon this request when successfully completed.
                    <br><br>
                    This identifier will be published to the API caller as part of the documentation process.
                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">callBackNumber</td>
                  <td align="left">This is the phone number of the business that Ushur will connect the user to for a voice call.  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This is the destination phone number to where this message is directed.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userMsg</td>
                  <td align="left">This is the message that is sent by the remote caller entity.  Ushur, if necessary will append the structured information indicated by the campaignId to this message and then forward it to the user indicated by the UserPhoneNumber.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">content</td>
                  <td align="left">Enterprise specific data set that can either be a single set or a list of data set.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left">2.1 or greater as value would return a more detailed response.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">sendDate</td>
                  <td align="left">A scheduled send.  At this UTC (Coordinated Universal Time) date the Ushur will be initiated.  The enterprise data when present in the initial request will be updated with immediately.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="InitiateCampaignWithEnterpriseData_Sample">
    	<p>The content in this context is relevant to the user to whom the Ushur is being initiated but still it can be an array of data just like it is being used in the provisioning of the enterprise data.</p>
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL:  https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd": "initCampaign",
"callBackNumber": "12092078446",
{{-- "tokenId": "{{token}}", --}}
"userPhoneNo": "12098746734",
"userMsg":"hello there",
"campaignId": "OrderTracking",
"content":[
    {
      "phone":"12098746734",
      "status": "shipping in progress",
      "prescriptionId":"PId8888",
      "orderId": "order-842918888"
    }
    ]
}</code></pre>

<h4>HTTP Response Sample</h4>
<pre class="language-http copytoclipboard"><code>HTTP/1.1 200 OK 


A negative (non-200) HTTP response will indicate that the send message failed.</code></pre>
    </div>

    <div role="tabpanel" class="tab-pane" id="InitiateCampaignWithEnterpriseData_SamplewithScheduledSend">
    	<p>The content in this context is relevant to the user to whom the Ushur is being initiated but still it can be an array of data just like it is being used in the provisioning of the enterprise data. While the content is used to update enterprise data immediately the Ushur itself will be launched based on the sendDate.
		</p>
		<pre class="language-http copytoclipboard"><code>Method: POST
URL:  https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd": "initCampaign",
"callBackNumber": "12092078446",
{{-- "tokenId": "{{token}}", --}}
"userPhoneNo": "12098746734",
"userMsg":"hello there",
"campaignId": "OrderTracking",
"apiVer":"2.1",
"sendDate":"2016-09-21T16:52:00.000Z",
"content":[
    {
      "phone":"12098746734",
      "status": "shipping in progress",
      "prescriptionId":"PId8888",
      "orderId": "order-842918888"
    }
    ]
}</code></pre>

<h4>HTTP Response Sample</h4>
<pre class="language-http copytoclipboard"><code>HTTP/1.1 200 OK 


Unless the request itself is not handled by the system most of the responses even for a failure condition of the application is going to be 200 OK.  After getting the 200 OK the client is still suggested to look into the parameters to identify success or failure.  Here below is a sample for the apiVersion of 2.1 or more at this time.

{
  "status": "success",
  "respCode": 200,
  "respText": "Success",
  "activityId": "d3fe70c7-a402-4802-bc99-fa0de7d626f5-1484327128601"
}</code></pre>
    </div>
	<div role="tabpanel" class="tab-pane" id="InitiateCampaignWithEnterpriseData_Response">
	
			<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">The response code which is 200 for success.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity.</td>
                </tr>
                </tbody>
             </table>
	
	
	</div>
  </div>
			</div>
		</div>
		<!-- // Initiate Campaign With Enterprise Data -->

		<!-- Add or Update Enterprise Contact  -->
		<div id="AddUpdateEnterpriseContact" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Enterprise Contact API</h2>
				<h3 class="sub-title">Add or Update Enterprise Contact on Ushur</h3>
				<p>There are many ways contacts are added into the Ushur Platform on an enterprise and even Ushur basis.  When a user texts in a keyword (for example, #signmein ), this pull mechanism automatically adds the users phonenumber into the specific Ushur belonging to the keyword as well as into the enterprise in which this Ushur is being executed.  The contacts can be uploaded via file on the Ushur Front-End Interface.  The contacts can be set via API as indicated here.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#AddUpdateEnterpriseContact_Request" aria-controls="AddUpdateEnterpriseContact_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#AddUpdateEnterpriseContact_Sample" aria-controls="AddUpdateEnterpriseContact_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#AddUpdateEnterpriseContact_JSONRes" aria-controls="AddUpdateEnterpriseContact_JSONRes" role="tab" data-toggle="tab">JSON Res</a></li>
    <li role="presentation"><a href="#AddUpdateEnterpriseContact_Response" aria-controls="AddUpdateEnterpriseContact_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="AddUpdateEnterpriseContact_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">addUser: The command that adds or updates a contact to the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">An optional id for which the contact is added to this campaign.  If no mention of this parameter then contact is added to the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This mandatory parameter is the phone number of the contact.  Phone number is unique in the campaign and enterprise and will be used as the primary key in adds and updates.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">This mandatory parameter is the name of the contact being added.  Username can be updated for existing phone numbers.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userEmail</td>
                  <td align="left">This optional parameter is the Email of the contact being added.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">address</td>
                  <td align="left">This optional parameter is the address of the contact being added.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="AddUpdateEnterpriseContact_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd":"addUser",
{{-- "tokenId":"{{xtoken}}", --}}
"campaignId":"ContactTesting",
"userPhoneNo": "12098746734",
"userName": "Henry Peter G",
"userEmail": "hpeterock@gmail.com",
"address": "112 st, anywhere, CA 95131"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="AddUpdateEnterpriseContact_JSONRes">
    	<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText": "Store succeeded",
  {{-- "tokenId":"{{xtoken}}", --}}
  "userName":"Henry Peter G",
  "userPhoneNo":"12098746734"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="AddUpdateEnterpriseContact_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The tokenId of the account is sent back for correlation purposes.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">The name of the Contact for correlation purposes.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">The phone number of the Contact for correlation purposes.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Add or Update Enterprise Contact -->

		<!-- Get Enterprise Contacts on Ushur  -->
		<div id="GetEnterpriseContacts" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Enterprise Contacts on Ushur</h3>
					<p>This API would retrieve all the contacts on the enterprise or on the specific Ushur within the enterprise.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetEnterpriseContacts_Request" aria-controls="GetEnterpriseContacts_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetEnterpriseContacts_Sample" aria-controls="GetEnterpriseContacts_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetEnterpriseContacts_JSONResp" aria-controls="GetEnterpriseContacts_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetEnterpriseContacts_Response" aria-controls="GetEnterpriseContacts_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetEnterpriseContacts_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">The command of getUserInfo implying that retrieval is for user information.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">The optional campaign id for which the contacts are returned.  When this parameter is not present then the contacts for the entire enterprise is returned.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The token id of the enterprise account.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">Optional phone number of the user for which information needs to be retrieved.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">reachParams</td>
                  <td align="left">Optional parameter indicating to return reachability information for the phone number. If query is to return information for all phone numbers this can still be sent without the userPhoneNo.</td>
                </tr>
                </tbody>
              </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseContacts_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"getUserInfo",
"campaignId":"ContactTesting",
{{-- "tokenId":"{{xtoken}}" --}}
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseContacts_JSONResp">
    	<p>The response will contain all the enterprise contacts and can be scoped for an optional campaignId parameter.</p>
    	<pre class="language-http copytoclipboard"><code>[
  {
    "userName": "Henry Peter M",
    "userPhoneNo": "+12092078446",
    "address": "111 st, anywhere, CA 95391",
    "userEmail": "hpeterock@gmail.com",
    "Method": "api"
  },
  {
    "userName": "Henry Peter G",
    "userPhoneNo": "+12098746734",
    "address": "112 st, anywhere, CA 95131",
    "userEmail": "hpeterock@gmail.com",
    "Method": "api"
  },
  {
    "userName": "Henry Peter V",
    "userPhoneNo": "+12098355992",
    "address": "987 st, anywhere, CA 94538",
    "userEmail": "hpeterock@gmail.com",
    "Method": "api"
  }
]

(OR)

[]
</code></pre>

<h4>Request Sample</h4>
<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"cmd":"getUserInfo",
{{-- "tokenId":"{{xtoken}}", --}}
"userPhoneNo": "+xyz",
"reachParams":"Yes"
}</code></pre>

<h4>JSON Response Sample</h4>
<p>The response contains specifically reachability information along with usual contact information.</p>
<pre class="language-http copytoclipboard"><code>{
  "Cause": "Unroutable message - rejected",
  "SMSReach": "No",
  "userName": "user+xyz",
  "userPhoneNo": "+xyz",
  "Landline": "Yes"
}

(or)

{
  "SMSReach": "Yes",
  "userName": "user+xyz",
  "userPhoneNo": "+xyz",
  "RspFromUser": "Yes",
  "RspMode": "Browser",
  "Verified": "Yes",
  "address": "actual st, state",
  "userEmail": "nice@co.com"
}</code></pre>

    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseContacts_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">Name of the Contact</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">Phone number of the Contact</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">address</td>
                  <td align="left">Address of the Contact, if present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userEmail</td>
                  <td align="left">Email address of the Contact, if present</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">Method</td>
                  <td align="left">The method by which the Contact was added to the system. The possible values are api or pull_sms which indicates the actual mechanism by which this user was first gotten into the system.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">Cause</td>
                  <td align="left">The last cause responsible for non-reachability on the phone number</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">SMSReach</td>
                  <td align="left">This indicates if the phone number is reachable via SMS. If value is "Yes" then it is reachable else if "No" it is not reachable via SMS.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">Landline</td>
                  <td align="left">If value is "Yes" indicates that the phone number is landline.  If "No" or not present then no indication that it is a landline number.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">RspFromUser</td>
                  <td align="left">If value is "Yes" then that indicates the user actually responded.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">RspMode</td>
                  <td align="left">Possible values are "SMS" or "Browser" indicating how the user last responded.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">Verified</td>
                  <td align="left">If value is "Yes" then it indicates that this phone number was verified via authentication. Example: a 2FA (Factored Authention) has been done successfully.  If "No" or not present then such verification has not been done.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Enterprise Contacts on Ushur -->


		<!-- Delete Enterprise Contact on Ushur  -->
		<div id="DeleteEnterpriseContact" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Delete Enterprise Contact on Ushur</h3>
				<p>This API is to delete the specific enterprise contact.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
 <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#DeleteEnterpriseContact_Request" aria-controls="DeleteEnterpriseContact_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseContact_Sample" aria-controls="DeleteEnterpriseContact_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseContact_JSONResp" aria-controls="DeleteEnterpriseContact_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#DeleteEnterpriseContact_Response" aria-controls="DeleteEnterpriseContact_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="DeleteEnterpriseContact_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">deleteUser: The command that deletes a contact from the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">An optional id for which the contact is delete from this campaign.  If no mention of this parameter then contact is delete from the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This mandatory parameter is the phone number of the contact.  Phone number is unique in the campaign and enterprise and will be used as the primary key in the delete operation.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">This mandatory parameter is the name of the contact being deleted.  This serves as a verification of the record that is being deleted.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseContact_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd":"deleteUser",
{{-- "tokenId":"{{xtoken}}", --}}
"campaignId":"ContactTesting",
"userPhoneNo": "12098746734",
"userName": "Henry Peter G"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseContact_JSONResp">
    	<p>The response will indicate whether deletion of contact was successful or not with some explanation.</p>
    	<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText": "Contact deletion successful"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="DeleteEnterpriseContact_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Delete Enterprise Contact on Ushur -->

		<!-- Set Contact DoNotDisturb Settings  -->
		<div id="SetContactDoNotDisturb" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set Contact DoNotDisturb Settings</h3>
					<p>This is to set the DoNotDisturb settings for a Contact in an enterprise.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetContactDoNotDisturb_Request" aria-controls="SetContactDoNotDisturb_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetContactDoNotDisturb_Sample" aria-controls="SetContactDoNotDisturb_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetContactDoNotDisturb_JSONResp" aria-controls="SetContactDoNotDisturb_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetContactDoNotDisturb_Response" aria-controls="SetContactDoNotDisturb_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetContactDoNotDisturb_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">addContactDND: The command that adds or updates the DND settings for a contact in the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">An optional id for which the contact's DND is added to this campaign.  If no mention of this parameter then contact's DND is added to the enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">This mandatory parameter is the phone number of the contact.  Phone number is unique in the campaign and enterprise and will be used as the primary key in adds and updates. The DND applies to the phone number.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">This mandatory parameter is added for cross-verification purposes.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">dndSetting</td>
                  <td align="left">This mandatory parameter has the DND settings.</td>
                </tr>
                </tbody>
            </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetContactDoNotDisturb_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/initUshur
Content-Type: application/json

{
"cmd":"addContactDND",
{{-- "tokenId":"{{xtoken}}", --}}
"campaignId":"ContactTesting",
"userPhoneNo": "12098746734",
"userName": "Henry Peter G",
"dndSetting":[
    {
        "day": "mon,wed,fri", 
        "time": "20:30,5:30"
    }, 
    {
        "day": "weekends", 
        "time": "22:00,5:00"
    }
]
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetContactDoNotDisturb_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText": "DND Update succeeded",
  {{-- "tokenId":"{{xtoken}}", --}}
  "userPhoneNo":"12098746734",
  "userName": "Henry Peter G"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetContactDoNotDisturb_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">A textual description of the response</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The tokenId of the account is sent back for correlation purposes.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">The name of the Contact for correlation purposes.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">The phone number of the Contact for correlation purposes.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Set Contact DoNotDisturb Settings -->

		<!-- Get Contact DoNotDisturb Settings  -->
		<div id="GetContactDoNotDisturb" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Contact DoNotDisturb Settings</h3>
				<p>This is to retrieve the DoNotDisturb settings for a contact in the Ushur Account.  An Account can represent an enterprise.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetContactDoNotDisturb_Request" aria-controls="GetContactDoNotDisturb_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetContactDoNotDisturb_Sample" aria-controls="GetContactDoNotDisturb_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetContactDoNotDisturb_JSONResp" aria-controls="GetContactDoNotDisturb_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetContactDoNotDisturb_Response" aria-controls="GetContactDoNotDisturb_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetContactDoNotDisturb_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">Context</td>
                  <td align="left">The context of userDNDInfo implying that retrieval is for user DND information.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">The optional campaign id for which the contact's DND are returned.  When this parameter is not present then the contact's DND for the entire enterprise is returned.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">The mandatory user phone number corresponding to the Contact for which the DND setting is being retrieved.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">The mandatory parameter for cross-verification purposes.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The token id of the enterprise account.</td>
                </tr>
                </tbody>
              </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetContactDoNotDisturb_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL: https://community.ushur.me/infoQuery
Content-Type: application/json

{
"Context":"userDNDInfo",
"campaignId":"ContactTesting",
"userPhoneNo":"+12098746734",
"userName":"Henry Peter G",
{{-- "tokenId":"{{xtoken}}" --}}
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetContactDoNotDisturb_JSONResp">
    	<p>The response will contain the DND information for the contact being retrieved.</p>
    	<pre class="language-http copytoclipboard"><code>{
  "success": true,
  "respText":"Retrieved DND setting for contact successfully",
  "userName": "Henry Peter M",
  "userPhoneNo": "+12092078446",
  "dndSetting": [
    {
      "day": "mon,wed,fri",
      "time": "20:30,5:30"
    },
    {
      "day": "weekends",
      "time": "22:00,5:00"
    }
  ]
}


(OR)

{}
    </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetContactDoNotDisturb_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">Name of the Contact</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">Phone number of the Contact</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">dndSetting</td>
                  <td align="left">DND Setting for the contact.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">success</td>
                  <td align="left">Indicates if retrieval is successful. When failed the respText indicates explanation of it.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respText</td>
                  <td align="left">Textual indication of what went right or wrong.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Contact DoNotDisturb Settings -->

		<!-- Phone Auth Service  -->
		<div id="PhoneAuthService" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Authentication Services</h2>
				<h3 class="sub-title">Phone Auth Service</h3>
				<p>This API initiates a 2-Factor Authentication mechanism. It goes with another API that will be used to confirm the code as part of the mechanism.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#PhoneAuthService_Request" aria-controls="PhoneAuthService_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#PhoneAuthService_Sample" aria-controls="PhoneAuthService_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#PhoneAuthService_JSONResp" aria-controls="PhoneAuthService_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#PhoneAuthService_Response" aria-controls="PhoneAuthService_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="PhoneAuthService_Request">
    	<table class="table table-striped table-responsive"><thead><tr><th align="left">Parameter</th><th align="left">Description</th></tr></thead><tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phoneNumber</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">phoneAuthService: This is the command to indicate a phone authentication service should be launched.. 

This command will launch the appropriate campaign that will initiate given message to the userPhoneNo indicated in the message. The same campaign will also handle responses from the same userPhoneNo.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">callbackUrl</td>
                  <td align="left">This is the URL of the business that Ushur will reference.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">regCode</td>
                  <td align="left">This represents the regional code for the phone number.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">checkPhoneExists</td>
                  <td align="left">This checks whether if the phone number exisits or not.</td>
                </tr>
              </tbody></table>
    </div>
    <div role="tabpanel" class="tab-pane" id="PhoneAuthService_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL:  https://community.ushur.me/rest/account/phoneAuthService
Content-Type: application/json

Request Body:
{
{{-- "tokenId" : "{{token}}", --}}
"phoneNumber" : "2098746734",
"cmd" : "phoneAuthService",
"callbackUrl" : "https://www.google.com",
"regCode" : "US" ,     (optional)
"checkPhoneExists" : "y" ( optional)
}</code></pre>
<p><strong>A text message will be sent to you with a code to verify the phone number entered above.</strong></p>
    </div>
    <div role="tabpanel" class="tab-pane" id="PhoneAuthService_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": "3c055082-df38-4ae4-9cbd-cead56aa140e-1454540458974",
  "infoText": "Sent Authcode to phoneNumber succesfully."
}</code></pre>
<p>If phone number already exists and checkPhoneExists flag is Y, it will respose with:</p>
<pre class="language-http copytoclipboard"><code>{
  "status: "failure",
  "respCode": 400,
  "infoText": "Phone number already exists."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="PhoneAuthService_Response">
    	<table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th align="left">Parameter</th><th align="left">Description</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">The texts vary depending on the API request. For this case, the data is displaying the phAuthTransactionId. You would need this phAuthTransactionId to confirm the phone number.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
            </tbody>
            </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Phone Auth Service -->

		<!-- Confirm Phone Number  -->
		<div id="ConfirmPhoneNumber" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Confirm Phone Number</h3>
				<p>This is the subsequent API to the #PhoneAuthService. This API will send the code received by the end user along with the transaction identifier that was retreived as part of the #PhoneAuthService.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ConfirmPhoneNumber_Request" aria-controls="ConfirmPhoneNumber_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#ConfirmPhoneNumber_Sample" aria-controls="ConfirmPhoneNumber_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#ConfirmPhoneNumber_JSONResp" aria-controls="ConfirmPhoneNumber_JSONResp" role="tab" data-toggle="tab">JSONResp</a></li>
    <li role="presentation"><a href="#ConfirmPhoneNumber_Response" aria-controls="ConfirmPhoneNumber_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="ConfirmPhoneNumber_Request">
    	<table class="table table-striped table-responsive"><thead><tr><th align="left">Parameter</th><th align="left">Description</th></tr></thead><tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phoneNumber</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">phoneAuthConfirm: This command verifies on the authentication number received by the user or the application. 

                  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">authNumber</td>
                  <td align="left">This is confirmation code that you will receive with the phone number you input from the Phone Auth Service request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phAuthTransactionId</td>
                  <td align="left">This phAuthTransactionId is obtained from the Phone Auth Service request.</td>
                </tr>
              </tbody></table>
    </div>
    <div role="tabpanel" class="tab-pane" id="ConfirmPhoneNumber_Sample">
    	<pre class="language-http copytoclipboard"><code>Method: POST
URL:  https://community.ushur.me/rest/account/phoneAuthConfirm
Content-Type: application/json


Request Body:
{
{{-- "tokenId" : "{{token}}", --}}
"phoneNumber" : "6508896904",
"cmd" : "phoneAuthConfirm",
"authNumber" : "752990",
"phAuthTransactionId":"3c055082-df38-4ae4-9cbd-cead56aa140e-1454540458974"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ConfirmPhoneNumber_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "phoneNumber": "+16508896904",
  "status": "success",
  "infoText": "Phone auth confirmation succeeded.",
  "respCode": 200
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ConfirmPhoneNumber_Response">
    	<table class="table table-striped table-responsive"><thead><tr><th align="left">Parameter</th><th align="left">Description</th></tr></thead><tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">The texts vary depending on the API request. For this case, the data is displaying the phAuthTransactionId. You would need this phAuthTransactionId to confirm the phone number.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
            </tbody></table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Confirm Phone Number -->

		<!-- Generate Short URL  -->
		<div id="GenerateShortURL" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">URL Services</h2>
				<h3 class="sub-title">Generate Short URL</h3>
					<p>This API is to retrieve a short url for the sent long url.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GenerateShortURL_Request" aria-controls="GenerateShortURL_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GenerateShortURL_Sample" aria-controls="GenerateShortURL_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GenerateShortURL_JSONResp" aria-controls="GenerateShortURL_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GenerateShortURL_Response" aria-controls="GenerateShortURL_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GenerateShortURL_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">getSurl: The command to get a shorter version of the url for the given long form.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">longUrl</td>
                  <td align="left">This the long URL that you want to shorten.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GenerateShortURL_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/infoQuery
with json 
{
"cmd":"getSurl",
"tokenId":"d5dbab0d-1251-4a2f-b5eb-8c0f752e997b",
"longUrl":"http://google.com"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GenerateShortURL_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "surl":"https://community.ushur.me/u/Mp9inR"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GenerateShortURL_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">surl</td>
                  <td align="left">The short URL generated by Ushur.</td>
                </tr>
                </tbody>
            </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Generate Short URL -->


		<!-- Get Short URL List  -->
		<div id="GetShortURLList" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Short URL List</h3>
				<p>This API is used to retrieve all the short url along with their long url and associated information such as the number of visits.  This API takes a date range sent in the request.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetShortURLList_Request" aria-controls="GetShortURLList_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetShortURLList_Sample" aria-controls="GetShortURLList_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetShortURLList_JSONResp" aria-controls="GetShortURLList_JSONResp" role="tab" data-toggle="tab">JSONResp</a></li>
    <li role="presentation"><a href="#GetShortURLList_Response" aria-controls="GetShortURLList_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetShortURLList_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">getSurlList: This command will return from Ushur all the stats for the shorter url accesses.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">startDate</td>
                  <td align="left">The start date.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">endDate</td>
                  <td align="left">The end date.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetShortURLList_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/infoQuery
with json
{
  "cmd":"getSurlList",
  "tokenId":"c57362dd-ffc5-4c1e-9c92-10cb3f96e87c",
  "startDate": "2015-11-13T07:53:15.376Z",
  "endDate" : "2015-11-15T07:53:15.376Z
}
if startDate or endDate or both null - all visit count are returned</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetShortURLList_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
    "result": [
        {
            "createdTimestamp": "2015-11-13T02:53:15.376Z",
            "longUrl": "https://community.ushur.me/processFeature",
            "surl": "https://community.ushur.me/u/MzWpM6",
            "visits": 0
        },
        {
            "createdTimestamp": "2015-11-18T01:04:41.727Z",
            "longUrl": "http://google.com",
            "surl": "https://community.ushur.me/u/Mp9inR",
            "visits": 5
        },
        {
            "createdTimestamp": "2015-11-18T01:09:15.207Z",
            "longUrl": "http://google.com",
            "surl": "https://community.ushur.me/u/cbwAmH",
            "visits": 2
        }
    ]
}
      </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetShortURLList_Response">
    <table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                  <td class="notranslate" align="left">longUrl</td>
                  <td align="left">The long URL before it was shortened.</td>
                </tr>
                  <tr>
                  <td class="notranslate" align="left">surl</td>
                  <td align="left">The short URL generated by Ushur.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">createdTimestamp</td>
                  <td align="left">The timestamp when the short URL created.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">visits</td>
                  <td align="left">The number of visits that the short URL got.</td>
                </tr>
                </tbody>
            </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Short URL List -->


		<!-- Action URL  -->
		<div id="ActionURL" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Action URL</h3>
					<p>Alternate form of invocation to retrieve a short url for the long url (action url).</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ActionURL_Request" aria-controls="ActionURL_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#ActionURL_Sample" aria-controls="ActionURL_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#ActionURL_JSONResp" aria-controls="ActionURL_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#ActionURL_Response" aria-controls="ActionURL_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="ActionURL_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">actionUrl</td>
                  <td align="left">The URL that you want to shorten by Ushur (See example at the response section).</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="ActionURL_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/actionUrl/save?userName=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh&actionUrl=https://www.ushur.com </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ActionURL_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": {
    "tinyUrl": "https://community.ushur.me/u/c2ZtMR"
  },
  "infoText": "Action url saved successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ActionURL_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">The texts vary depending on the API request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tinyUrl</td>
                  <td align="left">The tiny URL is a shortened link created from the Action URL you submitted.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Action URL -->


		<!-- Set Domain  
		<div id="SetDomain" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Domain Services</h2>
				<h3 class="sub-title">Set Domain</h3>
					<p>This API is to set the allowed domains from which the ushur scripts (say for widgets) can be accessed from.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetDomain_Request" aria-controls="SetDomain_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetDomain_Sample" aria-controls="SetDomain_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetDomain_JSONResp" aria-controls="SetDomain_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
	<li role="presentation"><a href="#SetDomain_Response" aria-controls="SetDomain_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes 
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetDomain_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">setDomains: This is the command to indicate setting of allowable domain for this enterprise.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">domains</td>
                  <td align="left">List of allowable domains for this enterprise.  When external Ushur widgets access Ushur from remote websites these domains will be verified against.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDomain_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>HTTP POST to https://community.ushur.me/infoQuery with  JSON
{
    "cmd": "setDomains",
    "tokenId": "c57362dd-ffc5-4c1e-9c92-10cb3f96e87c",
    "domains": "test1.me, test2.me"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetDomain_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{"status":"successful"}</code></pre>
    </div>
	<div role="tabpanel" class="tab-pane" id="SetDomain_Response">
	    <table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th align="left">Parameter</th><th align="left">Description</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
            </tbody>
        </table>
	</div>
  </div>
			</div>
		</div>
		<!-- // Set Domain -->


		<!-- Get Domain Stats  
		<div id="GetDomainStats" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Domain Stats</h3>
				<p>This API will retrieve all the information on the domains that were set.  The response will indicate the total visits from that domain among other information.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetDomainStats_Request" aria-controls="GetDomainStats_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetDomainStats_Sample" aria-controls="GetDomainStats_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetDomainStats_JSONResp" aria-controls="GetDomainStats_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
	<li role="presentation"><a href="#GetDomainStats_Response" aria-controls="GetDomainStats_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes 
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetDomainStats_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">getDomainStats: This command retrieves all stats for the set domains and their accesses.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetDomainStats_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>HTTP POST to https://community.ushur.me/infoQuery with  JSON
{
    "cmd": "getDomainStats",
    "tokenId": "c57362dd-ffc5-4c1e-9c92-10cb3f96e87c",
    "startDate": "2015-11-13T07:53:15.376Z",
    "endDate": "2015-12-30T00:00:00.000Z"
}

startDate and endDate are optional"</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetDomainStats_JSONResp">
    	<pre class="language-http copytoclipboard"><code> "{""result"":[{""Url"":""https://community.ushur.me/syp/indexTest.html"",""Domain"":""ushur.me"",
""Origin"":""https://community.ushur.me"",""Visits"":""1""},
{""Url"":""https://community.ushur.me/syp/indexTest2.html"",
""Domain"":""ushur.me"",
""Origin"":""https://community.ushur.me"",""Visits"":""1""},
{""Url"":""https://community.ushur.me/syp/index2.html"",
""Domain"":""ushur.me"",
""Origin"":""https://community.ushur.me"",""Visits"":""4""}]}"</code></pre>
    </div>
	<div role="tabpanel" class="tab-pane" id="GetDomainStats_Response">
		<table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th align="left">Parameter</th><th align="left">Description</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="notranslate" align="left">Url</td>
                  <td align="left">This field gives the URL information</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">Domain</td>
                  <td align="left">This field gives the Domain information</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">Origin</td>
                  <td align="left">This field gives the Origin information</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">Visits</td>
                  <td align="left">This field gives the information how many visits were made</td>
                </tr>				
			</tbody>
        </table>
	</div>
	
  </div>
			</div>
		</div>
		<!-- // Get Domain Stats -->


		<!-- Get Enterprise Stats  -->
		<div id="GetEnterpriseStats" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
			<h2 class="title">Stats Services</h2>
				<h3 class="sub-title">Get Enterprise Stats</h3>
				<p>This API will fetch all the stats for the specific parameters sent in the request.  This is for the entire enterprise basis.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetEnterpriseStats_Request" aria-controls="GetEnterpriseStats_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetEnterpriseStats_Sample" aria-controls="GetEnterpriseStats_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetEnterpriseStats_JSONResp" aria-controls="GetEnterpriseStats_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetEnterpriseStats_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">statsParams</td>
                  <td align="left">Contains list of parameters that will retrieve appropriate stats.  
                    These are comma separated list of stats parameters to be retrieved with corresponding values as below:
 Menu Sent : menuSent
 Menu Received :  menuRcvd
 Total Mobilyze Engagements : mobilyzeEng
 Total Reachme Engagements : reachmeEng
 Total Audio Sessions : audioSessions
 Total Video Sessions : videoSessions
 Shared Media : sharedMedia
 Campaigns Executed : campaignsExecuted
 SMS Sent : smsSent
 SMS Received : smsRcvd
 Customers Connected : customersConnected
 Communicating Now : communicatingNow
 Messages Exchanged : messagesExchanged
 Ongoing Mobilyze Engagements : ongoingMobilyzeEng
 Ongoing Reachme Engagements : ongoingReachmeEng</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">token</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseStats_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>HTTP POST to https://community.ushur.me/rest/enterprise/stats with JSON
{
"statsParams":"menuSent,menuRcvd,mobilyzeEng,reachmeEng,audioSessions,videoSessions,sharedMedia,campaignsExecuted,smsSent,smsRcvd,customersConnected,communicatingNow,messagesExchanged,ongoingMobilyzeEng,ongoingReachmeEng",
"level":"Month",
"startDate":"2016-01-01T00:00:00.000Z",
"endDate":"2016-01-31T23:59:59.999Z",
{{-- "tokenId" : "{{token}}", --}}
"username":"HENRY.PETER@USHURED.COM"
}  

startDate , endDate and level are optional for till date stats
level - Month/Day/Hourly, optional for till date stats</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetEnterpriseStats_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "audioSessions": 0,
  "respCode": 200,
  "menuSent": 847,
  "campaignsExecuted": 218,
  "infoText": "Request succeeded.",
  "status": "success",
  "ongoingReachmeEng": 0,
  "videoSessions": 0,
  "mobilyzeEng": 1061,
  "customersConnected": 1306,
  "sharedMedia": 0,
  "smsSent": 1302,
  "smsRcvd": 1302,
  "ongoingMobilyzeEng": 6,
  "messagesExchanged": 2844,
  "menuRcvd": 841,
  "communicatingNow": 652,
  "reachmeEng": 245
}</code></pre>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Enterprise Stats -->


		<!-- Get Campaign Stats  -->
		<div id="GetCampaignStats" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Campaign Stats</h3>
					<p>This API will retrieve the stats for the specific Ushur basis within the enterprise.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetCampaignStats_Request" aria-controls="GetCampaignStats_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetCampaignStats_Sample" aria-controls="GetCampaignStats_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetCampaignStats_JSONResp" aria-controls="GetCampaignStats_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetCampaignStats_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                   <tr>
                  <td class="notranslate" align="left">statsParams</td>
                  <td align="left">Contains list of parameters that will retrieve appropriate stats.  
                    These are comma separated list of stats parameters to be retrieved with corresponding values as below:
                    statsParams - comma separated list of stats parameters to be retrieved with corresponding values as below :
Ongoing Engagements : ongoingEng
Total Visual Engagements : totalVisualEng
Ongoing Visual Engagements : ongoingVisualEng
SMS Sent : smsSent
SMS Received : smsRcvd
Total Input Received : totalInputRcvd
Total Audio Sessions : totalAudioSessions
Ongoing Audio Sessions : ongoingAudioSessions
Total Video Sessions : totalVideoSessions
Ongoing Video Sessions : ongoingVideoSessions
Total Shared Media : totSharedMedia
Ongoing Shared Media : ongoingSharedMedia
Options Count : optionsCount"
</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetCampaignStats_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>HTTP POST to https://community.ushur.me/rest/campaign/stats with JSON
{
"statsParams":"ongoingEng,totalVisualEng,ongoingVisualEng,smsSent,smsRcvd,totalInputRcvd,totalAudioSessions,ongoingAudioSessions,totalVideoSessions,ongoingVideoSessions,totSharedMedia,ongoingSharedMedia,optionsCount",
"campaigns":"Camp2Create,SimpleMenuFeature,teslaMenu,ContactDataTest",
"level":"Month",
"startDate":"2015-01-01T00:00:00.000Z",
"endDate":"2016-01-31T23:59:59.999Z",
{{-- "tokenId" : "{{token}}", --}}
"username":"HENRY.PETER@USHURED.COM"
}

level:Month/Day/Hourly (Mandatory)
startDate, endDate - Date Range Mandatory
campaigns - comma separated list of campaigns for which stats are to be retrieved</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetCampaignStats_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "respCode": 200,
  "Data": [
    {},
    {
      "totalInputRcvd": 0,
      "ongoingEng": 1,
      "ongoingVisualEng": 0,
      "ongoingSharedMedia": 0,
      "enterprise": "HENRY.PETER@USHURED.COM",
      "totalVideoSessions": 0,
      "ongoingAudioSessions": 0,
      "smsSent": 1,
      "ongoingVideoSessions": 0,
      "totalVisualEng": 0,
      "totSharedMedia": 0,
      "smsRcvd": 0,
      "optionsCount": {},
      "totalAudioSessions": 0,
      "campaign": "SimpleMenuFeature"
    },
    {},
    {
      "totalInputRcvd": 0,
      "ongoingEng": 4,
      "ongoingVisualEng": 0,
      "ongoingSharedMedia": 0,
      "enterprise": "HENRY.PETER@USHURED.COM",
      "totalVideoSessions": 0,
      "ongoingAudioSessions": 0,
      "smsSent": 8,
      "ongoingVideoSessions": 0,
      "totalVisualEng": 0,
      "totSharedMedia": 0,
      "smsRcvd": 18,
      "optionsCount": {},
      "totalAudioSessions": 0,
      "campaign": "ContactDataTest"
    }
  ],
  "infoText": "Request succeeded.",
  "status": "success"
}</code></pre>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Campaign Stats -->

		<!-- Get Chat History  -->
		<div id="GetChatHistory" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Chat Services</h2>
				<h3 class="sub-title">Get Chat History</h3>
				<p>This API is used to retrieve the entire chat history on an enterprise and a unique id that identifies the specific chat exchanges.  This can be used in a Ushur Widget or by enterprises in their own settings.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetChatHistory_Request" aria-controls="GetChatHistory_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetChatHistory_Sample" aria-controls="GetChatHistory_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetChatHistory_JSONResp" aria-controls="GetChatHistory_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetChatHistory_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">cmd</td>
                  <td align="left">getChatHistory: The command that retrieves the chat history.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">primKeyId</td>
                  <td align="left">An optional id but for which a chat history is retrieved.  This is useful in the enterprise incident context. If not the chat history for entire account is returned.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">startTime</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">startChatId</td>
                  <td align="left">The credential for identifying the account.  This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userPhoneNo</td>
                  <td align="left">These are optional parameters for filtering.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">userName</td>
                  <td align="left">These are optional parameters for filtering.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetChatHistory_Sample">
    	<p>This is a POST request.</p>
    	<pre class="language-http copytoclipboard"><code>URL: https://community.ushur.me/infoQuery

 {
    "cmd": "getChatHistory",
    "primKeyId": "INC0000015",
    {{-- "tokenId": "{{token}}", --}}
    "startTime": "2016-01-16T03:51:27.613Z",
    "startChatId": "5699be43e4b0758fba87a2bf"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetChatHistory_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "result": [
    {
      "time": "2016-01-23T01:45:06.239Z",
      "dir": "Out",
      "msg": "[System Administrator]:okey",
      "chatId": "56a2db22e4b0786af43bf84a"
    },
    {
      "time": "2016-01-16T03:51:31.558Z",
      "dir": "Inc",
      "msg": "[Freddy]:Ok",
      "chatId": "5699be43e4b0758fba87a2bf"
    }
  ]
}</code></pre>
    </div>
  </div>				
			</div>
		</div>
		<!-- // Get Chat History -->


				<!-- Reserve Ushur ID  -->
		<div id="ReserveUshurID" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">UshurID Services</h2>
				<h3 class="sub-title">Reserve Ushur ID</h3>
				<p>Among many services provided by the Ushur Platform, to reserve a unique identity that can be used to access a service or a device with a URL this API is used.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ReserveUshurID_Request" aria-controls="ReserveUshurID_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#ReserveUshurID_Sample" aria-controls="ReserveUshurID_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#ReserveUshurID_JSONResp" aria-controls="ReserveUshurID_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#ReserveUshurID_Response" aria-controls="ReserveUshurID_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="ReserveUshurID_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">ushurId</td>
                  <td align="left">An ID that can be reserved by the user.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="ReserveUshurID_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/GetushurId/reserve?email=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh&ushurId=myfirstid</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ReserveUshurID_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "infoText": "Id is reserved successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="ReserveUshurID_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
            </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Reserve Ushur ID -->

		<!-- Save Ushur ID  -->
		<div id="SaveUshurID" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Save Ushur ID</h3>
				<p>This API would save the ushur id in the account. </p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SaveUshurID_Request" aria-controls="SaveUshurID_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SaveUshurID_Sample" aria-controls="SaveUshurID_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SaveUshurID_JSONResp" aria-controls="SaveUshurID_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SaveUshurID_Response" aria-controls="SaveUshurID_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SaveUshurID_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">ushurId</td>
                  <td align="left">An ID that can be reserved by the user.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveUshurID_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/generateurl?token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh&email=ed@ushurdummy.me&ushurId=myfirstid</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveUshurID_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": "200",
  "publicUrl": "https://www.ushur.me/connect?myfirstid",
  "emailId": "ed@ushurdummy.me"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveUshurID_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                 <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">publicUrl</td>
                  <td align="left">This is the publicly accessible url with the ushur id.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">emailId</td>
                  <td align="left">The submitted email identifier is returned back for correlation purposes. If there are multiple outstanding requests, this helps the caller of the APIs to correlate requests and responses.
                  </td>
                </tr>
                </tbody>
            </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Save Ushur ID -->

		<!-- Set Modes  -->
	<!--	<div id="SetModes" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set Modes</h3>
				<p>This API would set the desired modes on the Ushur Account.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetModes_Request" aria-controls="SetModes_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetModes_Sample" aria-controls="SetModes_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetModes_JSONResp" aria-controls="SetModes_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetModes_Response" aria-controls="SetModes_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>  -->

  <!-- Tab panes -->
<!--  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetModes_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">Modes (chat/voice/video)</td>
                  <td align="left">".../setModes/chat/voice/video?... value is either y/n"</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetModes_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/AvailabilityWeb/setModes/n/n/y?email=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetModes_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": null,
  "infoText": "Modes updated successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetModes_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">No relevance today.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Set Modes -->

				<!-- Get Availability Status  -->
		<div id="GetAvailabilityStatus" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h2 class="title">Utility Services</h2>
				<h3 class="sub-title">Get Availability Status</h3>
					<p>This API is used to fetch the user availability behind the account.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetAvailabilityStatus_Request" aria-controls="GetAvailabilityStatus_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetAvailabilityStatus_Sample" aria-controls="GetAvailabilityStatus_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetAvailabilityStatus_JSONResp" aria-controls="GetAvailabilityStatus_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetAvailabilityStatus_Response" aria-controls="GetAvailabilityStatus_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetAvailabilityStatus_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAvailabilityStatus_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/AvailabilityWeb/getStatus?email=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAvailabilityStatus_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": "available",
  "infoText": "Availability status retrieved successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetAvailabilityStatus_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">No relevance today.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Availability Status -->


		<!-- Get Phone Number  -->
		<div id="GetPhoneNumber" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Phone Number</h3>
				<p>This API is to retrieve the phone number behind the account.  The Ushur Account can be used for a reachable service whereby a phone number assigned to the account can be reached by a anonymous user (credentials can be based on configuration) using a unique URL assigned to the user on the Ushur Account. </p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetPhoneNumber_Request" aria-controls="GetPhoneNumber_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetPhoneNumber_Sample" aria-controls="GetPhoneNumber_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetPhoneNumber_JSONResp" aria-controls="GetPhoneNumber_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetPhoneNumber_Response" aria-controls="GetPhoneNumber_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetPhoneNumber_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetPhoneNumber_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/GetPhoneNumber/gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh/ed@ushurdummy.me</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetPhoneNumber_JSONResp">
    	<pre class="language-http copytoclipboard">
			<code>
			{
				"status":"success",
				"respCode":"200",
				"phoneNumber":"+16508888989",
				"emailId":"ed@ushurdummy.me"
			}
			</code>
		</pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetPhoneNumber_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">phoneNumber</td>
                  <td align="left">The phone number of the account.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">emailId</td>
                  <td align="left">The submitted email identifier is returned back for correlation purposes. If there are multiple outstanding requests, this helps the caller of the APIs to correlate requests and responses.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Phone Number -->


		<!-- Get Timezone  -->
		<div id="GetTimezone" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Timezone</h3>
					<p>This API would retrieve the DND (Do Not Disturb) TimeZone.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetTimezone_Request" aria-controls="GetTimezone_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetTimezone_Sample" aria-controls="GetTimezone_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetTimezone_JSONResp" aria-controls="GetTimezone_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetTimezone_Response" aria-controls="GetTimezone_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetTimezone_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTimezone_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/changeDNDTimezone/get?email=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh </code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTimezone_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": "US/East",
  "infoText": "DND timezone retrieved successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetTimezone_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">It will show different texts depending on the request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Timezone -->

				<!-- Set Timezone  -->
		<div id="SetTimezone" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Set Timezone</h3>
					<p>This API will set the DND TimeZone on the account.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SetTimezone_Request" aria-controls="SetTimezone_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SetTimezone_Sample" aria-controls="SetTimezone_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SetTimezone_JSONResp" aria-controls="SetTimezone_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SetTimezone_Response" aria-controls="SetTimezone_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SetTimezone_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">timezone</td>
                  <td align="left">The timezone that you choose to set. For example: US/West, US/East, etc.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetTimezone_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/changeDNDTimezone?email=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh&timezone=US/East</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetTimezone_JSONResp">
    	<pre class="language-http copytoclipboard">
			<code>
			{
				"status":"success",
				"respCode":"200",
				"infoText":"Changes saved sucessfully",
				"emailId":"ed@ushurdummy.me"
			}
			</code>
		</pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SetTimezone_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">emailId</td>
                  <td align="left">The submitted email identifier is returned back for correlation purposes. If there are multiple outstanding requests, this helps the caller of the APIs to correlate requests and responses.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Set Timezone -->

		<!-- Get Location  -->
		<div id="GetLocation" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Location</h3>
				<p>This API will retrieve the location of the user behind the Ushur Account.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetLocation_Request" aria-controls="GetLocation_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetLocation_Sample" aria-controls="GetLocation_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetLocation_JSONResp" aria-controls="GetLocation_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetLocation_Response" aria-controls="GetLocation_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetLocation_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left">The credential for identifying the account. This is the tokenId that was sent by Ushur
 as part of login response.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetLocation_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/location/get?userName=ed@ushurdummy.me&token=gIwgVYm6uj1oKKekc6UKJUsLD8GvwchnIXnNjYKJLrzuw5SLmh</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetLocation_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "respCode": 200,
  "data": null,
  "infoText": "Location retrieved successfully."
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetLocation_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">respCode</td>
                  <td align="left">An integer code for programmatic purposes. 200 denotes success and 4xx denotes failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">data</td>
                  <td align="left">It will show different texts depending on the request.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Get Location -->

		<!-- Save Appearance  -->
		<div id="SaveAppearance" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Save Appearance</h3>
				<p> This API will set the business appearance properties such as the name, the title that goes out in the messages as display, offline messages to be sent out for the business as well as any nickname that is used for displaying on the Ushur Front-End Interface. </p>
			</div>
			<div class="col-sm-7 docs equal-item">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#SaveAppearance_Request" aria-controls="SaveAppearance_Request" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#SaveAppearance_Sample" aria-controls="SaveAppearance_Sample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#SaveAppearance_JSONResp" aria-controls="SaveAppearance_JSONResp" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#SaveAppearance_Response" aria-controls="SaveAppearance_Response" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SaveAppearance_Request">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">email</td>
                  <td align="left">Users can access their account using this email identifier they originally signed-up with.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">businessName</td>
                  <td align="left">The business name of the account.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">businessTitle</td>
                  <td align="left">The business title of the account.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">changeOfflinemsgcontent</td>
                  <td align="left"></td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">nickName</td>
                  <td align="left">The nick name of the account.</td>
                </tr>
                </tbody>
                </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveAppearance_Sample">
    	<pre class="language-http copytoclipboard"><code>https://community.ushur.me/rest/saveAppearance?email=ed@ushurdummy.me&businessName=Ed the Marketing dude&businessTitle=Marketing dude&changeOfflinemsgcontent=testing&nickName=Foobar</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveAppearance_JSONResp">
    	<pre class="language-http copytoclipboard"><code>{
  "status": "success",
  "infoText": "Your preferences saved successfully"
}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="SaveAppearance_Response">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">A textual indication of success or failure.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">infoText</td>
                  <td align="left">A description of the response for the submitted request.</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		<!-- // Save Appearance -->
		
		<!-- // GetUshurActivities -->
<div id="GetUshurActivities" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">GetUshurActivities</h3>		
				<p> This API gives the list of all the schedules activities for an Ushur</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetUshurActivities_RequestParameters" aria-controls="GetUshurActivities_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetUshurActivities_RequestSample" aria-controls="GetUshurActivities_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetUshurActivities_JSONResponseSample" aria-controls="GetUshurActivities_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetUshurActivities_ResponseParameters" aria-controls="GetUshurActivities_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetUshurActivities_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">nRecords</td>
                  <td align="left">  Limit Number of records returned to this number -used for pagination</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">lastRecordId</td>
                  <td align="left"> id of last record Id of the set, used to get the next set of records starting from here</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> The status indicates whether the campaign is scheduled </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">startDate</td>
                  <td align="left"> The start date from which the activities needs to be captured for the given token ID </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">endDate</td>
                  <td align="left"> The end date to which the activities needs to be captured for the given token ID </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left"> The Campaign ID for which the Activities details needs to be captured </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.2 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetUshurActivities_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/GetUshurActivities
		Content-Type:application/json
		{
			"tokenId":"",
			"apiVer":"2.2",
			"nRecords":"700",
			"lastRecordId":null,
			"status":"scheduled",
			"startDate":"2019-12-26T06:46:21.165Z",
			"endDate":"2020-12-26T06:46:21.165Z",
			"campaignId":"ResponseTabUpdation"
		} 
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetUshurActivities_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
			{
				"activities":[
								{
									"activityId":"b0a8d006-5d08-4d33-8fc2-12b14564f055-1577343044444",
									"notificationId":"5e0458449e8e9b6fe3a7ce89",
									"type":"scheduled",
									"status":"scheduled",
									"date":{
												"$date":"2019-12-26T06:50:44.444Z"
											},
									"campaignId":"ResponseTabUpdation",
									"ushurRecordId":"5e0458449e8e9b6fe3a7ce8a",
									"notDate":{
												"$date":"2019-12-26T07:00:44.405Z"
											},
									"notType":"INDIVIDUAL",
									"notMsg.userPhNo":"+16614187487",
									"notMsg.campaignId":"ResponseTabUpdation"
								}
							],
							
				"counts":1,
				"totalRecords":1,
				"lastRecordId":"5e0458449e8e9b6fe3a7ce8a"
			}
		}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetUshurActivities_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left"> The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notificationId</td>
                  <td align="left"> The notification id is internal identifier for the scheduled Ushur </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">type</td>
                  <td align="left"> The type specified if this is Scheduled Ushur (ushur sent out immediately) </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left"> The status to indicate whether details are for Scheduled, Initiated, Canceled  activities</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">date</td>
                  <td align="left"> The date ushur is scheduled</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left"> Ushur Name </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">ushurRecordId</td>
                  <td align="left"> Internal record identifier </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notDate</td>
                  <td align="left"> Scheduled Date ( notification Date) </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notType</td>
                  <td align="left"> Whether Notification is for INDIVIDUAL or BULK </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notMsg.userPhoneNo</td>
                  <td align="left"> phone Number to which Ushur is scheduled </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notMsg.campaignId</td>
                  <td align="left"> Ushur that is scheduled</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
				
		<!-- // End of GetUshurActivities -->
		
		<!-- // GetUshurActivity -->
<div id="GetUshurActivity" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Get Ushur Activity</h3>		
				<p> This API will provide information about a specific activity Id for a given ushur(campaign)</p>		
			</div>
			<div class="col-sm-7 docs equal-item">
			  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#GetUshurActivity_RequestParameters" aria-controls="GetUshurActivity_RequestParameters" role="tab" data-toggle="tab">Request</a></li>
    <li role="presentation"><a href="#GetUshurActivity_RequestSample" aria-controls="GetUshurActivity_RequestSample" role="tab" data-toggle="tab">Sample</a></li>
    <li role="presentation"><a href="#GetUshurActivity_JSONResponseSample" aria-controls="GetUshurActivity_JSONResponseSample" role="tab" data-toggle="tab">JSON Resp</a></li>
    <li role="presentation"><a href="#GetUshurActivity_ResponseParameters" aria-controls="GetUshurActivity_ResponseParameters" role="tab" data-toggle="tab">Response</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="GetUshurActivity_RequestParameters">
    	<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">tokenId</td>
                  <td align="left"> For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services. For security reasons, Ushur has some mechanisms whereby it can internally re-generate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left">The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">filterCmd</td>
                  <td align="left">The filter parameter that passed as input. For the specific example, activity details of the Ushur passed as filter  </td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">apiVer</td>
                  <td align="left"> The version of the API being used which is by default set to 2.1 for this API </td>
                </tr>
                </tbody>
                </table>
    </div>
    
	<div role="tabpanel" class="tab-pane" id="GetUshurActivity_RequestSample">
    	<pre class="language-http copytoclipboard"><code>
		
		Method : POST
		https://community.ushur.me/infoQuery/GetUshurActivity
		Content-Type:application/json
		{
			{{-- "tokenId":"{{validTokenId}}", --}}
			"apiVer":"2.2",
			"activityId":"b0a8d006-5d08-4d33-8fc2-12b14564f055-1577343044444",
			"filterCmd":"getActivityDetails"
		} 
 		</code></pre>
    </div>
    <!--  <h4>JSON Response Sample</h4> -->
	<div role="tabpanel" class="tab-pane" id="GetUshurActivity_JSONResponseSample">
    	<pre class="language-http copytoclipboard"><code>{
		"activityId":"b0a8d006-5d08-4d33-8fc2-12b14564f055-1577343044444",
		"notificationId":"5e0458449e8e9b6fe3a7ce89",
		"type":"scheduled",
		"status":"scheduled",
		"date":{
					"$date":"2019-12-26T06:50:44.444Z"
			   },
		"campaignId":"ResponseTabUpdation",
		"notDate":{
					"$date":"2019-12-26T07:00:44.405Z"
				},
		"notType":"INDIVIDUAL",
		"notMsg":{
					"other":{
								"metaData":"
											{
												"date":null,
												"time":null,
												"name":"test",
												"location":"",
												"bulk":false,
												"cScope":"local
											"}",
								"dbUserEmail":"EVA.ANGRA@USHUR.COM",
								"campaignType":"OtherCampaigns",
								"sendDate":"2019-12-26T07:00:44.405Z",
								"campaignId":"ResponseTabUpdation",
								"userPhoneNo":"+16614187487",
								"intervalTimeUnit":"hours",
								"virtualNumber":"14157671510",
								"userMsg":"null",
								"callBackNumber":"+918056286949"
							},
					"mEmailChannelActive":false,
					"mEmailFrom":null,
					"mEmailTo":null,
					"mEmailSubject":null,
					"mEmailBody":null,
					"mEmailId":null,
					"mEmailRecordId":null,
					"keyword":null,
					"featureId":"ResponseTabUpdation",
					"groupId":"",
					"dnDHolidaysActive":false,
					"campaignId":"ResponseTabUpdation",
					"ushurMsgId":"",
					"parentSid":null,
					"userMsg":"null",
					"footerMsg":null,
					"storeForwardFeatureOn":false,
					"pushMsgFromRemote":true,
					"userPhNo":"+16614187487",
					"viaVirtualNumber":"14157671510",
					"appContext":"",
					"unedaContent":"",
					"cmd":"initCampaign",
					"viaVendor":"",
					"dbUserEmailId":"EVA.ANGRA@USHUR.COM",
					"campaignType":"OtherCampaigns",
					"callbackNo":"+918056286949",
					"operatorInitTag":null,
					"metaData":"{
									"date":null,
									"time":null,
									"name":"test",
									"location":"",
									"bulk":false,
									"cScope":"local
								"}",
					"campaignScope":"local",
					"userName":null,
					"requestId":"",
					"dbUserEmail":"EVA.ANGRA@USHUR.COM",
					"sendDate":"2019-12-26T07:00:44.405Z",
					"userPhoneNo":"+16614187487"
					,"intervalTimeUnit":"hours",
					"virtualNumber":"14157671510",
					"callBackNumber":"+918056286949"
				},
		"isImmNot":false,
		"isNotSent":false,
		"engagementDate":null,
		"transactionId":"12aaaddd-363f-4d48-8888-7ee348223c66",
		"gc":false,
		"sendInterval":0,
		"repeatNo":0,
		"intervalTimeUnit":"hours",
		"createdDate":{
							"$date":"2019-12-26T06:50:44.416Z"
					   },
		"updatedDate":{
							"$date":"2019-12-26T06:50:44.447Z"
					}
	}</code></pre>
    </div>
    <div role="tabpanel" class="tab-pane" id="GetUshurActivity_ResponseParameters">
    		<table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Parameter</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">activityId</td>
                  <td align="left"> The activity identifier that reflects the activity pertaining to the initiated request. This can be used in other APIs to track and operate (say even cancel) on the ongoing activity </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notificationId</td>
                  <td align="left"> Internal reference to scheduled ushur</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">type</td>
                  <td align="left"> Returns whether it was Scheduled Ushur ( send immediately) </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">status</td>
                  <td align="left">  The status to indicate whether details are for Scheduled, Initiated, Canceled  activities  </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">date</td>
                  <td align="left">  Date time when Ushur was to be sent</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">campaignId</td>
                  <td align="left">  Name of Ushur</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notDate</td>
                  <td align="left">  Schedule to Send on this date/time </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notType</td>
                  <td align="left"> Whether Notification is for INDIVIDUAL or BULK </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">notMsg</td>
                  <td align="left">  message sent</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left">isImmNot</td>
                  <td align="left">   If Ushur was sent immediate or not</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> isNotSent</td>
                  <td align="left">  true if ushur is already inititated. False otherwise </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> engagementDate</td>
                  <td align="left">   date scheduled</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> transactionId</td>
                  <td align="left">  internal unique Id for this operation transactionId </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> gc</td>
                  <td align="left">  internal use - garbage collect( mark this record for deletion after processing)</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> sendInterval</td>
                  <td align="left">  initiate ushur after this interval</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> repeatNo</td>
                  <td align="left"> number to repeat /initiate ushur number of times specified </td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> intervalTimeUnit</td>
                  <td align="left">   time Unit for sendInterval field hours, minutes , seconds</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> createdDate</td>
                  <td align="left">  timestamp when this record is created</td>
                </tr>
				<tr>
                  <td class="notranslate" align="left"> updatedDate</td>
                  <td align="left"> timestamp when this record is updated</td>
                </tr>
                </tbody>
              </table>
    </div>
  </div>
			</div>
		</div>
		
		<!-- // End of GetUshurActivity -->

		<!-- Response Codes  -->
		<div id="ResponseCodes" class="doc-content no-padding">
			<div class="col-sm-5 description equal-item">
				<h3 class="sub-title">Response Codes</h3>
				<p>These are the response codes used by the Ushur Platform as part of the API responses to give some guidance for the enterprise applications.</p>
			</div>
			<div class="col-sm-7 docs equal-item">
          <table class="table table-striped table-responsive">
                <thead>
                <tr>
                  <th align="left">Response Code</th>
                  <th align="left">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="notranslate" align="left">401</td>
                  <td align="left">Email id field is empty</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">402</td>
                  <td align="left">Token value is empty</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">403</td>
                  <td align="left">Account disabled</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">404</td>
                  <td align="left">Invalid user</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">405</td>
                  <td align="left">Nickname field is empty</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">406</td>
                  <td align="left">E-mail id does not have required parameters</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">407</td>
                  <td align="left">Auth token is empty</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">408</td>
                  <td align="left">Auth token is invalid</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">409</td>
                  <td align="left">Passwords do not match</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">410</td>
                  <td align="left">Password field is empty</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">411</td>
                  <td align="left">Confirm password field is empty</td>
                </tr>
		 <tr>
		  <td class="notranslate" align="left">412</td>
		  <td align="left">Phone number is empty</td>
		</tr>
		 <tr>
		  <td class="notranslate" align="left">413</td>
		  <td align="left">Transaction id is empty</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">414</td>
		  <td align="left">Region code is empty</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">415</td>
		  <td align="left">Invalid phone mumber or region code</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">422</td>
		  <td align="left">Old password field is empty in ChangePassword rest api</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">423</td>
		  <td align="left">New Password field is empty in ChangePassword rest api</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">424</td>
		  <td align="left">Confirm password field is empty in ChangePassword rest api</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">425</td>
		  <td align="left">Passwords doesn't match in ChangePassword rest api</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">427</td>
		  <td align="left">Password must be greater than 6 characters and must contain atleast one numerical value, one capital letter and one special character,emailId:{emailId}</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">428</td>
		  <td align="left">New password you entered matches with last two changed passwords : please create a new one, emailId:{emailId}</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">430</td>
		  <td align="left">Ushur Id is empty</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">431</td>
		  <td align="left">Id is already reserved</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">432</td>
		  <td align="left">Failed to release Id</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">433</td>
		  <td align="left">Business name already exists. Please use a different business name.</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">435</td>
		  <td align="left">Perosnalized Id not available</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">436</td>
		  <td align="left">Campaign Id is empty</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">437</td>
		  <td align="left">Phone number is empty</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">438</td>
		  <td align="left">Numericals are not allowed in the nickname field of Signup rest api</td>
		</tr>
		<tr>
		  <td class="notranslate" align="left">439</td>
		  <td align="left">Campaign Id not found</td>
		</tr>
                 <tr>
                  <td class="notranslate" align="left">440</td>
                  <td align="left">Username already exists. Please use a different username.</td>
                </tr>
                  <tr>
                  <td class="notranslate" align="left">441</td>
                  <td align="left">Enterprise name already exists. Please use a different enterprise name.</td>
                </tr>
                <tr>
                  <td class="notranslate" align="left">442</td>
                  <td align="left">Enterprise Id limited to 25 characters.</td>
                </tr>
                                <tr>
                  <td class="notranslate" align="left">443</td>
                  <td align="left">Enterprise format not valid</td>
                </tr>
                                <tr>
                  <td class="notranslate" align="left">444</td>
                  <td align="left">Bad Request</td>
                </tr>
                  <tr>
                  <td class="notranslate" align="left">500</td>
                  <td align="left">Server Error</td>
                </tr>

                </tbody>
              </table>
			</div>
		</div>
		<!-- // Response Codes -->


	</div>
</div>
@endsection