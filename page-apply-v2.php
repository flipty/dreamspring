<?php include('includes/head-offline.html');?>

<section class="application-screener">
  <div class="container">
    <div class="card-row">
                      <!--
                      <option value="external-flare" data-buttonchange="" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">Trigger Flare</option>
                      <option value="external-lendio" data-buttonchange="" data-buttondelete="" data-buttonurl="https://lp.lendio.com/dreamspring-lendio">Trigger Lendio</option>
                      <option value="external-lendioLP" data-buttonchange="" data-buttondelete="" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Trigger Lendio LP</option>
                      <option value="external-windsor" data-buttonchange="" data-buttondelete="" data-buttonurl="https://www.windsoradvantage.com/dreamspring">Trigger Windsor Advantage</option>
                      -->
      <div class="card h-100">
              
              <img class="card-img-top question-image" src="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-1-v3.jpg" loading="lazy">
              
              <div class="card-body">
  
                <div class="questions">
                  
                  <div class="question active" id="location" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-1-v3.jpg">
                    <h3>What state is your business located in? (#location)</h3>                    
                    <select>
                      <option value="default">Select state</option>
                      <option value="amount">Alabama</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Alaska</option>
                      <option value="amount-founding">Arizona</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Arkansas</option>
                      <option value="amount">California</option>
                      <option value="amount-founding">Colorado</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Connecticut</option>
                      <option value="amount">Delaware</option>
                      <option value="amount">District Of Columbia</option>
                      <option value="amount">Florida</option>
                      <option value="amount">Georgia</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Hawaii</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Idaho</option>
                      <option value="amount">Illinois</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Indiana</option>
                      <option value="amount">Iowa</option>
                      <option value="amount">Kansas</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Kentucky</option>
                      <option value="amount">Louisiana</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Maine</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Maryland</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Massachusetts</option>
                      <option value="amount">Michigan</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Minnesota</option>
                      <option value="amount">Mississippi</option>
                      <option value="amount">Missouri</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Montana</option>
                      <option value="amount">Nebraska</option>
                      <option value="amount-founding">Nevada</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">New Hampshire</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">New Jersey</option>
                      <option value="amount-founding">New Mexico</option>
                      <option value="amount">New York</option>
                      <option value="amount">North Carolina</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">North Dakota</option>
                      <option value="amount">Ohio</option>
                      <option value="amount">Oklahoma</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Oregon</option>
                      <option value="amount">Pennsylvania</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Rhode Island</option>
                      <option value="amount">South Carolina</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">South Dakota</option>
                      <option value="amount">Tennessee</option>
                      <option value="amount-founding">Texas</option>
                      <option value="amount">Utah</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Vermont</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Virginia</option>
                      <option value="amount">Washington</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">West Virginia</option>
                      <option value="external-lendio-state" data-buttonchange="Continue to Lendio" data-buttonurl="https://lp.lendio.com/partners-low-lf?source=DreamSpring&affiliate=3153550376&medium=Partner">Wisconsin</option>
                      <option value="amount">Wyoming</option>
                    </select>
                  </div><!--/question-->

                  <div class="question inactive" id="amount-founding" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-2-v3.jpg">
                    <h3>How much are you looking for? (#amount-founding)</h3>
                    <p class="mb-3">By sharing a general idea of your funding request amount, we can match you with the best loan product for your needs.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$1,000 - $10,000</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$10,001 - $30,000</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$30,001 - $50,000</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$50,001 or more</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="amount" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-2-v3.jpg">
                    <h3>How much are you looking for? (#amount)</h3>
                    <p class="mb-3">By sharing a general idea of your funding request amount, we can match you with the best loan product for your needs.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$1,000 - $10,000</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$10,001 - $30,000</option>
                      <option value="external-flare" data-buttonchange="Continue to Our Application" data-buttondelete="" data-buttonurl="https://flare.dreamspring.org/loan_applications/new">$30,001 - $50,000</option>
                      <option value="external-lendio-50k" data-buttonchange="Continue to Lendio" data-buttondelete="" data-buttonurl="https://lp.lendio.com/dreamspring-lendio">$50,001 or more</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="usecase-founding" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-3-v3.jpg">
                    <h3>How will you use the loan funds? (#usecase-founding)</h3>
                    <p class="mb-3">Do we need content here?</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">For Commercial Real Estate</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">For Leasehold Improvements</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">Reasons other than Commercial Real Estate or Leasehold Improvements</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="usecase" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-3-v3.jpg">
                    <h3>How will you use the loan funds? (#amount)</h3>
                    <p class="mb-3">Do we need content here?</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">For Commercial Real Estate</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">For Leasehold Improvements</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">Reasons other than Commercial Real Estate or Leasehold Improvements</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="duration-founding" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-3-v2.jpg">
                    <h3>How long have you been in business?  (#duration-founding)</h3>
                    <p class="mb-3">We lend to both startup ventures and existing small businesses. The age of your business helps us identify the right loan for you.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">0 - 2 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">2 - 5 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">5 - 10 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">10+ Years</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="duration" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-3-v2.jpg">
                    <h3>How long have you been in business? (#duration)</h3>
                    <p class="mb-3">We lend to both startup ventures and existing small businesses. The age of your business helps us identify the right loan for you.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">0 - 2 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">2 - 5 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">5 - 10 Years</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">10+ Years</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="revenue-founding" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-5-v3.jpg">
                    <h3>What are your annual business revenues? (#revenue-founding)</h3>
                    <p class="mb-3">Please share an estimate of your annual business revenue.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$0 - $25,000</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$25,000 - $49,999</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$50,000 - $150,000</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">More than $150,000</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="revenue" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-5-v3.jpg">
                    <h3>What are your annual business revenues?</h3>
                    <p class="mb-3">Please share an estimate of your annual business revenue. (#revenue)</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$0 - $25,000</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$25,000 - $49,999</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">$50,000 - $150,000</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">More than $150,000</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="credit-founding" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-1-v3.jpg">
                    <h3>What is your credit score? (#credit-founding)</h3>
                    <p class="mb-3">Please provide the best estimate of your personal credit score.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">No score</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">450 - 600</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">601 - 650</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">651 - 690</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">690+</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="question inactive" id="credit" data-questionbutton="" data-imageurl="https://www.dreamspring.org/hubfs/Alternate-Pre-application-UX-1-v3.jpg">
                    <h3>What is your credit score? (#credit)</h3>
                    <p class="mb-3">Please provide the best estimate of your personal credit score.</p>
                    <select>
                      <option>Select answer...</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">No score</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">450 - 600</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">601 - 650</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">651 - 690</option>
                      <option value="question-1" data-buttonchange="" data-buttondelete="">690+</option>
                    </select>                  
                  </div><!--/question-->

                  <div class="external-links">
                    <div class="external inactive" id="external-flare">
                      <div class="inner">Based on your responses, you’re ready to apply through DreamSpring’s client portal. Please continue on the next page to start your loan application!</div>
                    </div>
                    <div class="external inactive" id="external-lendio">
                      <div class="inner">Based on your responses, you’re ready to apply for funding through DreamSpring’s partner, Lendio. Please continue on the next page to start your loan application!</div>
                    </div>
                    <div class="external inactive" id="external-lendio-state">
                      <div class="inner">Based on your response, you’re ready to apply for funding through DreamSpring’s partner, Lendio. Please continue on the next page to start your loan application! (state out of range)</div>
                    </div>
                    <div class="external inactive" id="external-lendio-50k">
                      <div class="inner">Based on your responses, you’re ready to apply for funding through DreamSpring’s partner, Lendio. Please continue on the next page to start your loan application! (50k + and non-founding)</div>
                    </div>
                    <div class="external inactive" id="external-lendioLP">
                      <div class="inner">Based on your responses, you’re ready to apply for funding through DreamSpring’s partner, Lendio. Please continue on the next page to start your loan application!</div>
                    </div>
                    <div class="external inactive" id="external-windsor">
                      <div class="inner">Based on your responses, you’re ready to apply for funding through DreamSpring’s partner, Windsor Advantage. Please continue on the next page to start your loan application!</div>
                    </div>                    
                  </div>

                </div><!--/questions container-->

                <div class="screener-button-container">
                  <a class="btn btn-sm btn-primary-primary transition-3d-hover screener-button" tabindex="0">Continue</a>
                </div>

              </div>
              
              <div class="card-footer border-0 pt-0 text-center">
              </div>

      </div>


    </div>    
  </div>
</section>
<script>
<?php include('js/pre-screener.js');?>  
</script>
<style>
<?php include('css/module-application-screener.css');?>  
</style>
<?php include('includes/footer.html');?>