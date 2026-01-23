@extends('website.layout.design')
@section('title')
<meta name="description" content="GetLead CRM offers affordable pricing plans for businesses of all sizes. Choose a plan that fits your business needs and budget, and start managing your sales and marketing processes more efficiently with GetLead CRM.">
<title>GetLead CRM Pricing - Choose a Plan That Fits Your Business
</title>   
@endsection
@section('css')
 <title>GetLead CRM: Sales Flow Process Explained</title>
    <style>

        
        h1, h2, h3 {
            color: #2c3e50;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 15px;
        }
        
        .intro {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .flow-section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .status-block {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
        
        .lead-status {
            background-color: #fff9c4;
        }
        
        .deal-status {
            background-color: #ffecb3;
        }
        
        .status-item {
            padding: 8px 15px;
            border-radius: 4px;
            display: inline-block;
        }
        
        .not-interested {
            background-color: #e0e0e0;
        }
        
        .invalid {
            background-color: #e0e0e0; 
        }
        
        .cool {
            background-color: #80deea;
        }
        
        .warm {
            background-color: #ffd54f;
        }
        
        .interested {
            background-color: #ff8a65;
        }
        
        .new {
            background-color: #ef9a9a;
        }
        
        .proposal, .approval, .invoice, .advance, .delivery, .payment {
            background-color: #ef9a9a;
        }
        
        .customer {
            background-color: #aed581;
        }
        
        .call-status {
            background-color: #ffe0b2;
        }
        
        .attempted {
            background-color: #64b5f6;
        }
        
        .flow-chart {
            width: 100%;
            text-align: center;
            margin: 30px 0;
        }
        
        .flow-chart img {
            max-width: 100%;
            height: auto;
        }
        
        .benefits {
            background-color: #e8f5e9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
        
        .tips {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
        
        .step-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }
        
        .step-box {
            flex: 0 0 48%;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .arrow {
            text-align: center;
            font-size: 24px;
            margin: 10px 0;
            color: #7f8c8d;
        }
        
        @media (max-width: 768px) {
            .step-box {
                flex: 0 0 100%;
            }
        }
        
        .highlight {
            background-color: #fff176;
            padding: 2px 5px;
            border-radius: 3px;
        }
        
        .summary {
            margin-top: 40px;
            padding: 20px;
            background-color: #e8eaf6;
            border-radius: 5px;
			margin-bottom:100px;
        }
		h3 {text-align:left !important;
			font-size: 25px !important;
			font-weight: 400;
		}
		h2 {
			font-size: 30px !important;
			font-weight: 500  !important;
		}
		
		.flow-data ul
		{
			margin-top:15px;
			margin-left:30px;
			line-height:35px;
			list-style-type:disc !important;
		}
		
		.flow-data ol
		{
			margin-top:15px;
			margin-left:30px;
			line-height:35px;
			list-style-type:number !important;
		}
		
		
    </style>
@endsection
@section('code')


<div class="rogan-hero-section-sec rogan-hero-section-v2 rogan-hero-section rogan-hero-five pt-150  md-pt-100  pos-r">
    <div class="container">
       <div class="main-wrapper pos-r">
          <h1 class="secondary-title banner-main-title pt-15 pb-15 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s">Getlead <span class="high">CRM</span> : Understanding the <br> Sales Flow Process
          </h1>
          <div class="clear"></div>
       </div>
    </div>
 </div>
 <div class="price-section pt-110 pb-0">
    <div class="container">

<div class="row flow-data">
<div class="col-md-12 col-lg-12 col-sm-12 col-12"> 

    <div class="intro">
        <h2>Introduction to CRM Sales Flow</h2>
        <p>A Customer Relationship Management (CRM) sales flow is a structured process that guides your sales team from lead generation to closing deals and maintaining customer relationships. Understanding this flow is crucial for optimizing your sales process, improving conversion rates, and growing your business revenue.</p>
        <p>This document explains each stage of the GetLead CRM sales flow, helping you understand how leads move through your sales pipeline and eventually become valuable customers.</p>
    </div>
    
    <div class="flow-section">
        <h2>The Complete Sales Flow Journey</h2>
        <p>The sales flow in GetLead CRM is divided into three main phases:</p>
        <ol>
            <li><strong>Lead Generation and Initial Contact</strong> - Where new leads enter your system</li>
            <li><strong>Lead Nurturing and Qualification</strong> - Where leads are categorized by interest level</li>
            <li><strong>Deal Progression and Conversion</strong> - Where interested leads become paying customers</li>
        </ol>
        
        <div class="flow-chart">
            <p><em>Reference the CRM Sales Flow Diagram for a visual representation of this process</em></p>
        </div>

    </div>
	
	 <div class="flow-section">
	 <img src="{{url('/images/sales_flow_diagram.png')}}" alt="No Diagram">
	 </div>
	
	
    
    <div class="flow-section">
        <h2>Phase 1: Lead Generation and Initial Contact</h2>
        <p>Every sales journey begins with a new lead entering your system.</p>
        
		
        <div class="step-container">
		
            <div class="step-box">
                <h3>New Lead Generated</h3>
                <p>This is the entry point to your sales funnel. Leads can come from various sources:</p>
                <ul>
                    <li>Website inquiries</li>
                    <li>Social media interactions</li>
                    <li>Email sign-ups</li>
                    <li>Event contacts</li>
                    <li>Referrals</li>
                    <li>Cold outreach</li>
                </ul>
                <p>Once a lead is in your system, the next step is to make initial contact.</p>
            </div>
            
            <div class="step-box">
                <h3>Initial Contact Attempt</h3>
                <p>Your sales team attempts to establish the first contact with the lead, typically through:</p>
                <ul>
                    <li>Phone calls</li>
                    <li>Emails</li>
                    <li>Direct messages</li>
                </ul>
                <p>This initial contact branches into two possible outcomes:</p>
                <ul>
                    <li><strong>Call Answered</strong> - Lead responds to your contact attempt</li>
                    <li><strong>Call Not Answered</strong> - Lead doesn't respond to your contact attempt</li>
                </ul>
            </div>
        </div>
        
        <div class="arrow">↓</div>
        
        <div class="step-container">
            <div class="step-box">
                <h3>Call Answered Scenarios</h3>
                <p>When a lead responds to your initial contact, they enter the qualification process where they'll be categorized based on their level of interest.</p>
                <p>This leads directly to the Lead Status categorization in Phase 2.</p>
            </div>
            
            <div class="step-box">
                <h3>Call Not Answered Scenarios</h3>
                <p>When leads don't respond to your initial contact, they're classified under one of these categories:</p>
                <ul>
                    <li><span class="status-item">No Ring</span> - Call didn't connect</li>
                    <li><span class="status-item">Ringing No Response</span> - Call connected but wasn't answered</li>
                    <li><span class="status-item">Busy</span> - Lead's line was busy</li>
                    <li><span class="status-item">Invalid Number</span> - Contact information is incorrect</li>
                </ul>
                <p>These leads are flagged as <span class="status-item attempted">Attempted to contact</span> and may require follow-up strategies.</p>
            </div>
        </div>
    </div>
    
    <div class="flow-section">
        <h2>Phase 2: Lead Nurturing and Qualification</h2>
        <p>In this phase, leads are categorized based on their interest level and readiness to purchase.</p>
        
        <div class="status-block lead-status">
            <h3>Lead Status Categories</h3>
            <p>After initial contact, leads are sorted into these categories based on their response and interest level:</p>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item not-interested">Not Interested</span></h4>
                    <p>Leads who explicitly state they're not interested in your product or service.</p>
                    <p><strong>Action:</strong> These leads are typically moved to a dormant status but may be contacted again after a suitable interval or if new relevant offerings become available.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item invalid">Invalid / Spam</span></h4>
                    <p>Leads with incorrect contact information or those identified as spam or fake leads.</p>
                    <p><strong>Action:</strong> These leads are usually removed from active follow-up but may be kept in the database for record-keeping.</p>
                </div>
            </div>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item cool">Cool</span></h4>
                    <p>Leads who show minimal interest but don't reject your offering outright.</p>
                    <p><strong>Action:</strong> These leads require nurturing through educational content, newsletters, and occasional check-ins to increase their interest level.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item warm">Warm</span></h4>
                    <p>Leads who show moderate interest but aren't ready to make a purchasing decision yet.</p>
                    <p><strong>Action:</strong> These leads need regular follow-ups, more targeted information, and possibly demonstrations or trials to move them toward the "Interested" stage.</p>
                </div>
            </div>
            
            <div class="step-box">
                <h4><span class="status-item interested">Interested</span></h4>
                <p>Leads who show significant interest and are considering your product or service as a viable solution to their needs.</p>
                <p><strong>Action:</strong> These leads are prime candidates for conversion and should receive personalized attention from your sales team. The next step is to <strong>Create new Deal</strong> and move them to the Deal/Opportunity phase.</p>
            </div>
        </div>
    </div>
    
    <div class="flow-section">
        <h2>Phase 3: Deal Progression and Conversion</h2>
        <p>When a lead shows significant interest, they transition to the Deal/Opportunity phase where they progress through a structured sales pipeline.</p>
        
        <div class="status-block deal-status">
            <h3>Deal/Opportunity Stages</h3>
            <p>The journey from interested lead to paying customer follows these stages:</p>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item new">New</span></h4>
                    <p>A new opportunity has been created from an interested lead.</p>
                    <p><strong>Action:</strong> Begin formal sales process, gather detailed requirements, and prepare for proposal.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item proposal">Proposal</span></h4>
                    <p>A formal proposal or quote has been presented to the prospect.</p>
                    <p><strong>Action:</strong> Follow up on proposal, address questions or concerns, and negotiate terms if necessary.</p>
                </div>
            </div>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item approval">Approval</span></h4>
                    <p>The prospect has approved the proposal and agreed to move forward.</p>
                    <p><strong>Action:</strong> Finalize terms, prepare contracts, and set expectations for next steps.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item invoice">Invoice</span></h4>
                    <p>An invoice has been generated and sent to the prospect.</p>
                    <p><strong>Action:</strong> Ensure invoice has been received, address any billing questions, and monitor for payment.</p>
                </div>
            </div>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item advance">Advance</span></h4>
                    <p>An advance payment or deposit has been received.</p>
                    <p><strong>Action:</strong> Acknowledge payment, begin service preparation or product allocation, and coordinate delivery timeline.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item delivery">Delivery</span></h4>
                    <p>The product has been delivered or the service has begun.</p>
                    <p><strong>Action:</strong> Ensure smooth implementation, address any initial concerns, and monitor satisfaction.</p>
                </div>
            </div>
            
            <div class="step-container">
                <div class="step-box">
                    <h4><span class="status-item payment">Final Payment</span></h4>
                    <p>Full payment has been received from the customer.</p>
                    <p><strong>Action:</strong> Confirm payment completion, ensure all deliverables have been fulfilled, and transition to customer service.</p>
                </div>
                
                <div class="step-box">
                    <h4><span class="status-item customer">Customer</span></h4>
                    <p>The prospect has successfully completed the sales process and is now an active customer.</p>
                    <p><strong>Action:</strong> Transfer to account management, begin customer onboarding, and implement retention strategies.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="benefits">
        <h2>Benefits of Following a Structured Sales Flow</h2>
        <div class="step-container">
            <div class="step-box">
                <h3>For Sales Teams</h3>
                <ul>
                    <li>Clear visibility of the sales pipeline</li>
                    <li>Standardized process for consistent results</li>
                    <li>Easier identification of bottlenecks</li>
                    <li>More accurate sales forecasting</li>
                    <li>Efficient resource allocation</li>
                </ul>
            </div>
            
            <div class="step-box">
                <h3>For Business Growth</h3>
                <ul>
                    <li>Higher conversion rates</li>
                    <li>Reduced sales cycle length</li>
                    <li>Improved customer experience</li>
                    <li>Increased revenue predictability</li>
                    <li>Better retention and repeat business</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="tips">
        <h2>Best Practices for CRM Sales Flow Management</h2>
        <div class="step-container">
            <div class="step-box">
                <h3>Data Management</h3>
                <ul>
                    <li>Keep contact information up-to-date</li>
                    <li>Document all interactions with leads and customers</li>
                    <li>Use tags and custom fields to track important details</li>
                    <li>Regularly clean your database to remove outdated entries</li>
                </ul>
            </div>
            
            <div class="step-box">
                <h3>Process Optimization</h3>
                <ul>
                    <li>Set clear criteria for moving leads between stages</li>
                    <li>Establish follow-up timelines for each status</li>
                    <li>Regularly review and refine your sales process</li>
                    <li>Create automated workflows for routine tasks</li>
                </ul>
            </div>
        </div>
        
        <div class="step-container">
            <div class="step-box">
                <h3>Team Empowerment</h3>
                <ul>
                    <li>Train your team on CRM best practices</li>
                    <li>Share success stories and winning strategies</li>
                    <li>Use performance metrics to identify coaching opportunities</li>
                    <li>Encourage collaboration between sales and marketing</li>
                </ul>
            </div>
            
            <div class="step-box">
                <h3>Customer-Centric Approach</h3>
                <ul>
                    <li>Focus on solving customer problems, not just selling</li>
                    <li>Personalize communication at every stage</li>
                    <li>Collect and act on customer feedback</li>
                    <li>Build long-term relationships beyond the initial sale</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="summary">
        <h2 style="margin-bottom:20px;">Key Takeaways</h2>
        <ol>
            <li>The CRM sales flow is a structured process that guides leads from first contact to becoming customers.</li>
            <li>Leads are categorized based on their level of interest and readiness to purchase.</li>
            <li>The Deal/Opportunity phase follows a clear progression through proposal, approval, payment, and delivery stages.</li>
            <li>Following a well-defined sales flow improves efficiency, conversion rates, and revenue predictability.</li>
            <li>Regular optimization of your sales process based on performance data is essential for continued growth.</li>
        </ol>
        <p>By understanding and effectively implementing this sales flow in GetLead CRM, your business can streamline its sales operations, improve customer relationships, and achieve sustainable growth.</p>
    </div>


</div>
</div>
        
</div>
 </div>
 </div>

@section('script')
{{ Html::script('/js/jquery.ccpicker.js') }}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    var countryCode=$('#country_code').val();
    $("#phoneField1").CcPicker();
    $("#phoneField1").CcPicker("setCountryByCode", countryCode);

    $(document).ready(function () {

       @if(session('message'))
         flashy('Successfully Submit your Request', {
            type : 'flashy__success',
            timeout: 5000, 
         });
        @endif
        $("#contactUsForm").validate({
            // in 'rules' user have to specify all the constraints for respective fields
            rules: {
                first_name: "required",
               //  last_name: "required",
                username: {
                    required: true,
                    minlength: 2 //for length of lastname
                },
                email: {
                    required: true,
                    email: true
                },
                mobile:{
                    required:true,
                    digits:true,
                    minlength: 7,
                    maxlength: 12,
                },
               //  company_name:"required",
                country:"required",
               //  comments:"required",
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                first_name: " Please enter your firstname",
               //  last_name: " Please enter your lastname",
                email:{
                    required:"Please enter email id",
                    email:"please enter valid email id",
                },
                mobile:{
                    required: "Please enter mobile number",
                    digits:"please enter only number",
                    minlength: "Please enter valid number",
                    maxlength:"Please enter valid number"

                },
               //  company_name:"Please enter company name",
                country:"Please enter Country",
               //  comments:"Please enter",
            }
        });
    });
</script>
@endsection
@endsection
