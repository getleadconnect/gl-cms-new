@extends('website.layout.design')
@section('title')
<meta name="description" content="GetLead CRM Developer Hub offers a comprehensive suite of developer tools, APIs, and resources to help businesses build and customize their CRM solutions. Access our documentation, community forums, and more to get started.">
<title>GetLead CRM Developer Hub | API Documentation & Integration Resources  
</title>   
@endsection
@section('css')
 <style>
        pre {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            padding: 1em;
            overflow-x: auto;
            white-space: pre-wrap;
        }
        .about-crm-col pre{
            margin: 30px 0px !important;
         }
    </style>
@endsection
@section('code')
<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150 pb-0 md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Developer Hub
          </h1>
          <p class="second-sub-title banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">Explore the complete range of lead management tools to get your<br>
             business the right leads to pursue and generate sales.
          </p>
          <div class="searchbar pb-60">
             <input type="text" placeholder="Search..."><button><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
          <div class="clear"></div>
       </div>
    </div>
    <div class="chat-box">
       <a href="#" >
          {{ Html::image('website/images/chat-box.svg','getlead') }}
       </a>
    </div>
 </div>
 <div class="help-center-sec pt-85 pb-95">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
             <div class="articles-col">
                <h4>Topics</h4>
                <ul class="article-list article-list-dev pt-30 nav" role="tablist">
                   <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                      Lead creation API
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                      Task Creation API
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                         Note Creation API
                      </a>
                   </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                         Status Change API
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                         Deal Creation API
                      </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                         Department Vise Agent Assign
                      </a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="tab-content">
               <div class="tab-pane active" id="tabs-1" role="tabpanel">
                  <div class="about-crm-col">
                        <h4>Create lead API Documentation</h4>
                        <p>This documentation provides a guide on how to use the create lead API, which allows you to assign a import a new lead via any source using the POST method.</p>
                        <h5>API Endpoint</h5>
                        <pre>https://app.getleadcrm.com/api/gl-website-contacts</pre>

                        <h5>Request Method</h5>
                        <p>POST</p>

                        <h5>Request Parameters</h5>
                        <div class="web-table" style="overflow: auto">
                           <table class="table table-bordered">
                              <thead>
                                    <tr>
                                       <th>Parameter</th>
                                       <th>Type</th>
                                       <th>Description</th>
                                       <th>Required</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                       <td>token</td>
                                       <td>string</td>
                                       <td>The token in which we got from the getlead.</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>name </td>
                                       <td>string</td>
                                       <td>The customer name.</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>email </td>
                                       <td>string</td>
                                       <td>The customer email.</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>countrycode</td>
                                       <td>string</td>
                                       <td>Country code like (91).</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>mobileno</td>
                                       <td>string</td>
                                       <td>The customer mobile number with or without country code acceptable.</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>feedback</td>
                                       <td>string</td>
                                       <td>Customer feedback note can be add.</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>source</td>
                                       <td>string</td>
                                       <td>Source of the lead.</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>company_name</td>
                                       <td>string</td>
                                       <td>The customer company name.</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>staff_name</td>
                                       <td>string</td>
                                       <td>The lead will be assign to agent name.</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>date_of_birth</td>
                                       <td>string</td>
                                       <td>The customer dob</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>purpose</td>
                                       <td>string</td>
                                       <td>The lead purpose</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>status</td>
                                       <td>string</td>
                                       <td>The lead status</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>department</td>
                                       <td>string</td>
                                       <td>replace with the department(Staff auto assign option on the basis of department vise)</td>
                                       <td>No</td>
                                    </tr>

                                    <tr>
                                       <td>{Additional fields}</td>
                                       <td>string</td>
                                       <td>Create new additional field or update value to existing data</td>
                                       <td>No</td>
                                    </tr>
                              </tbody>
                           </table>
                        </div>
                        <h5>To get token</h5>
                        <ol>
                           <li>Click on your profile dropdown and then click <span>Settings</span></li>
                           <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                           <li> Then Click on the <span>API</span> menu.</li>
                           <li>In the API page, click Show / generate token button</li>
                           <li>Copy the token from the popup</li>
                           <li>Paste the API Parementer accordingly.</li>
                        </ol>

                        <h5>Example Request</h5>
                        <pre>https://app.getleadcrm.com/api/gl-website-contacts?token=gl_8ee******&name=Te***&countrycode=91&mobileno=985*******&source=Test</pre>

                        <h5>Response Format</h5>
                        <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                        <h5>Success Response</h5>
                        <pre>
                        {
                        "status": "success",
                        "message": "Lead Added Successfully."
                        }
                        </pre>

                        <h5>Error Response</h5>
                        <pre>
                        <span>1.To check the mobile is valid</span>
                        {
                        "status": "fail",
                        "message": "The mobileno must be between 8 and 14 digits."
                        }
                        <span>2.To check the parameters is valid</span>
                        {
                        "status": "fail",
                        "message": "Please check the parameters."
                        }
                        </pre>
                        <h5>Support</h5>
                           <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>
               <div class="tab-pane" id="tabs-2" role="tabpanel">
                   <div class="about-crm-col">
                     <h4>Create Task API Documentation</h4>
                     <p>This documentation provides a guide on how to use the create a new task, which allows you to create a new task to CRM using the POST method.</p>
                     <h5>API Endpoint</h5>
                     <pre>https://app.getleadcrm.com/api/gl-task-creation-api</pre>

                     <h5>Request Method</h5>
                     <p>POST</p>

                     <h5>Request Parameters</h5>
                     <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>Parameter</th>
                                 <th>Type</th>
                                 <th>Description</th>
                                 <th>Required</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>token</td>
                                 <td>string</td>
                                 <td>The token in which we got from the getlead.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>name</td>
                                 <td>string</td>
                                 <td>To identify the task.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>description</td>
                                 <td>string</td>
                                 <td>Brief description about new task.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>countrycode</td>
                                 <td>string</td>
                                 <td>To identify which lead under the task.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>mobile_no</td>
                                 <td>string</td>
                                 <td>To identify which lead under the task</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>email</td>
                                 <td>string</td>
                                 <td>To identify which lead under the task.</td>
                                 <td>No</td>
                              </tr>
                               <tr>
                                 <td>comment</td>
                                 <td>string</td>
                                 <td>Comments.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>task_category_id</td>
                                 <td>string</td>
                                 <td>Which category (1:Normal task,2:call task).</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>scheduled_date</td>
                                 <td>string</td>
                                 <td>The date which the task scheduled.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>assigned_to</td>
                                 <td>string</td>
                                 <td>The assigned_to to which the agent should be assigned.</td>
                                 <td>No</td>
                              </tr>
                        </tbody>

                     </table>

                     <h5>To get token</h5>
                     <ol>
                        <li>Click on your profile dropdown and then click <span>Settings</span></li>
                        <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                        <li> Then Click on the <span>API</span> menu.</li>
                        <li>In the API page, click Show / generate token button</li>
                        <li>Copy the token from the popup</li>
                        <li>Paste the API Parementer accordingly.</li>
                     </ol>

                     <h5>Example Request</h5>
                     <pre>https://app.getleadcrm.com/api/gl-task-creation-api?token=gl_8ee******&name=Te***&task_category_id=1&assigned_to=Ajay</pre>

                     <h5>Response Format</h5>
                     <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                     <h5>Success Response</h5>
                     <pre>{
                     "status": "success",
                     "message": "Task Added Successfully."
                     }
                     </pre>

                     <h5>Error Response</h5>
                     <pre>
                     {
                     "status": "error",
                     "message": "Please check the parameters."
                     }
                     </pre>
                     <h5>Support</h5>
                        <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>
               <div class="tab-pane" id="tabs-3" role="tabpanel">
                   <div class="about-crm-col">
                     <h4>Create Note API Documentation</h4>
                     <p>This documentation provides a guide on how to use the create a note, which allows you to create a note to lead using the POST method.</p>
                     <h5>API Endpoint</h5>
                     <pre>https://app.getleadcrm.com/api/gl-note-creation-api</pre>

                     <h5>Request Method</h5>
                     <p>POST</p>

                     <h5>Request Parameters</h5>
                     <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>Parameter</th>
                                 <th>Type</th>
                                 <th>Description</th>
                                 <th>Required</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>token</td>
                                 <td>string</td>
                                 <td>The token in which we got from the getlead.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>note</td>
                                 <td>string</td>
                                 <td>To create a new note</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>countrycode</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>mobile_no</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>email</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note.</td>
                                 <td>No</td>
                              </tr>
                        </tbody>

                     </table>

                     <h5>To get token</h5>
                     <ol>
                        <li>Click on your profile dropdown and then click <span>Settings</span></li>
                        <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                        <li> Then Click on the <span>API</span> menu.</li>
                        <li>In the API page, click Show / generate token button</li>
                        <li>Copy the token from the popup</li>
                        <li>Paste the API Parementer accordingly.</li>
                     </ol>


                     <h5>Example Request</h5>
					 
                     <pre> https://app.getleadcrm.com/api/gl-note-creation-api?token=gl_8e*****&countrycode=91&mobile_no=98959***56&amp;note=This is testing note***</pre>

                     <h5>Response Format</h5>
                     <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                     <h5>Success Response</h5>
                     <pre>{
                     "status": "success",
                     "message": "Note Added Successfully."
                     }
                     </pre>

                     <h5>Error Response</h5>
                     <pre>
                     <span>Invalid lead details passed</span>
                     {
                     "status": "error",
                     "message": "Enquiry Not Found."
                     }
                     <span>Invalid parameters passed</span>
                     {
                     "status": "error",
                     "message": "Please check the parameters."
                     }
                     </pre>
                     <h5>Support</h5>
                        <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>
               <div class="tab-pane" id="tabs-4" role="tabpanel">
                  <div class="about-crm-col">
                     <h4>Status change API Documentation</h4>
                     <p>This documentation provides a guide on how to change the status of the lead using the POST method.</p>
                     <h5>API Endpoint</h5>
                     <pre>https://app.getleadcrm.com/api/gl-status-change-api</pre>

                     <h5>Request Method</h5>
                     <p>POST</p>

                     <h5>Request Parameters</h5>
                     <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>Parameter</th>
                                 <th>Type</th>
                                 <th>Description</th>
                                 <th>Required</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>token</td>
                                 <td>string</td>
                                 <td>The token in which we got from the getlead.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>status</td>
                                 <td>string</td>
                                 <td>To identify the status of the lead</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>countrycode</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>mobile_no</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>email</td>
                                 <td>string</td>
                                 <td>To identify which lead under the note.</td>
                                 <td>No</td>
                              </tr>
                        </tbody>

                     </table>

                     <h5>To get token</h5>
                     <ol>
                        <li>Click on your profile dropdown and then click <span>Settings</span></li>
                        <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                        <li> Then Click on the <span>API</span> menu.</li>
                        <li>In the API page, click Show / generate token button</li>
                        <li>Copy the token from the popup</li>
                        <li>Paste the API Parementer accordingly.</li>
                     </ol>

                     <h5>Example Request</h5>
                     <pre>https://app.getleadcrm.com/api/gl-status-change-api?token=gl_8e*****&countrycode=91&mobile_no=98959***56&status=Te***</pre>

                     <h5>Response Format</h5>
                     <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                     <h5>Success Response</h5>
                     <pre>{
                     "status": "success",
                     "message": "Note Added Successfully."
                     }
                     </pre>

                     <h5>Error Response</h5>
                     <pre>
                     <span>Invalid lead details passed</span>
                     {
                     "status": "error",
                     "message": "Enquiry Not Found."
                     }
                     <span>Invalid parameters passed</span>
                     {
                     "status": "error",
                     "message": "Please check the parameters."
                     }
                     </pre>
                     <h5>Support</h5>
                        <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>
                 <div class="tab-pane" id="tabs-5" role="tabpanel">
                   <div class="about-crm-col">
                     <h4>Create Deal API Documentation</h4>
                     <p>This documentation provides a guide on how to use the create a new deal, which allows you to create a new deal to CRM using the POST method.</p>
                     <h5>API Endpoint</h5>
                     <pre>https://app.getleadcrm.com/api/gl-deal-creation-api</pre>

                     <h5>Request Method</h5>
                     <p>POST</p>

                     <h5>Request Parameters</h5>
                     <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>Parameter</th>
                                 <th>Type</th>
                                 <th>Description</th>
                                 <th>Required</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>token</td>
                                 <td>string</td>
                                 <td>The token in which we got from the getlead.</td>
                                 <td>Yes</td>
                              </tr>
                              
                              <tr>
                                 <td>mobile</td>
                                 <td>string</td>
                                 <td>To identify which lead under the deal</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>status</td>
                                 <td>string</td>
                                 <td>To identify deal status.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>deal name</td>
                                 <td>string</td>
                                 <td>To identify the deal name.</td>
                                 <td>No</td>
                              </tr>
                               <tr>
                                 <td>countrycode</td>
                                 <td>string</td>
                                 <td>country code.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>staff_name</td>
                                 <td>string</td>
                                 <td>Deal agent.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>deal_amount</td>
                                 <td>integer</td>
                                 <td>Deal amount.</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>start_date</td>
                                 <td>string</td>
                                 <td>Deal start estimated time.(format:YYYY-MM-DDD)</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>end_date</td>
                                 <td>string</td>
                                 <td>Deal end estimated time.(format:YYYY-MM-DDD)</td>
                                 <td>No</td>
                              </tr>
                              <tr>
                                 <td>deal_note</td>
                                 <td>string</td>
                                 <td>Deal note</td>
                                 <td>No</td>
                              </tr>
                        </tbody>

                     </table>

                     <h5>To get token</h5>
                     <ol>
                        <li>Click on your profile dropdown and then click <span>Settings</span></li>
                        <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                        <li> Then Click on the <span>API</span> menu.</li>
                        <li>In the API page, click Show / generate token button</li>
                        <li>Copy the token from the popup</li>
                        <li>Paste the API Parementer accordingly.</li>
                     </ol>

                     <h5>Example Request</h5>
                     <pre>https://app.getleadcrm.com/api/gl-task-creation-api?token=gl_8ee******&name=Te***&task_category_id=1&assigned_to=Ajay</pre>

                     <h5>Response Format</h5>
                     <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                     <h5>Success Response</h5>
                     <pre>{
                     "status": "success",
                     "message": "Task Added Successfully."
                     }
                     </pre>

                     <h5>Error Response</h5>
                     <pre>
                     {
                     "status": "error",
                     "message": "Please check the parameters."
                     }
                     </pre>
                     <h5>Support</h5>
                        <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>
               <div class="tab-pane" id="tabs-6" role="tabpanel">
                  <div class="about-crm-col">
                     <h4>Assign to Department API Documentation</h4>
                     <p>This documentation provides a guide on how to use the Assign to Department API, which allows you to assign a source number to a specific department using the POST method.</p>
                     <h5>API Endpoint</h5>
                     <pre>https://app.getleadcrm.com/api/gl-department-vise-agent-assign/{token}</pre>

                     <h5>Request Method</h5>
                     <p>POST</p>

                     <h5>Request Parameters</h5>
                     <table class="table table-bordered">
                        <thead>
                              <tr>
                                 <th>Parameter</th>
                                 <th>Type</th>
                                 <th>Description</th>
                                 <th>Required</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>token</td>
                                 <td>string</td>
                                 <td>The token in which we got from the getlead.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>SourceNumber</td>
                                 <td>string</td>
                                 <td>The source number to be assigned.</td>
                                 <td>Yes</td>
                              </tr>
                              <tr>
                                 <td>department</td>
                                 <td>string</td>
                                 <td>The department to which the source number should be assigned.</td>
                                 <td>Yes</td>
                              </tr>
                        </tbody>
                     </table>

                     <h5>To get token</h5>
                     <ol>
                        <li>Click on your profile dropdown and then click <span>Settings</span></li>
                        <li> In the <span>Getlead</span> setting menu, click <span>GL Connect.</span></li>
                        <li> Then Click on the <span>API</span> menu.</li>
                        <li>In the API page, click Show / generate token button</li>
                        <li>Copy the token from the popup</li>
                        <li>Paste the API Parementer accordingly.</li>
                     </ol>

                     <h5>Example Request</h5>
                     <pre>https://app.getleadcrm.com/api/gl-department-vise-agent-assign/gl_a9a5ed112f********?SourceNumber=4234*******&department=******</pre>

                     <h5>Response Format</h5>
                     <p>The API will return a JSON object containing the status of the assignment and a message.</p>

                     <h5>Success Response</h5>
                     <pre>{
                     "status": "success",
                     "message": "The source number has been assigned to the specified department."
                     }
                     </pre>

                     <h5>Error Response</h5>
                     <pre>
                     {
                     "status": "error",
                     "message": "Error description (e.g., missing parameters, invalid department, etc.)."
                     }
                     </pre>
                     <h5>Support</h5>
                        <p>If you have any questions or require assistance, please contact our support team at support@getlead.co.uk.</p>
                  </div>
               </div>

            </div>
         </div>
       </div>
    </div>
 </div>

 
@section('script')
@endsection
@endsection


