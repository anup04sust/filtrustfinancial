<div id="loan-details">
  <fieldset class="form-horizontal step-fields"> 
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="radio">
              <label for="loan-type-new-loan">
                <input type="radio" value="New Loan" name="loan[type]" id="loan-type-new-loan" checked>
                New Loan
              </label>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="radio">
              <label for="loan-type-change">
                <input type="radio" value="Increase existing loan amount" name="loan[type]" id="loan-type-increase">
                Increase existing loan amount
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="radio">
              <label for="loan-type-renewal">
                <input type="radio" value="Loan Renewal" name="loan[type]" id="loan-type-renewal">
                Loan Renewal
              </label>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="radio">
              <label for="loan-type-change">
                <input type="radio" value="Change existing loan options" name="loan[type]" id="loan-type-change">
                Change existing loan options
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>Loan Amount ($ 500 - $ 2,000)</label>
        <input type="text" class="form-control" name="loan[amount]" id="loan-amount">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h4 class="scetion-title">Repayment Options</h4>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-repayment-principal-interest">
            <input type="radio" value="Principal and Interest" name="loan[repayment]" id="loan-repayment-principal-interest">
            Principal and Interest
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-repayment-interest-only">
            <input type="radio" value="Interest Only " name="loan[repayment]" id="loan-repayment-interest-only">
            Interest Only 
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h4 class="scetion-title">Amortization</h4>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-amortization-4month">
            <input type="radio" value="4 Months" name="loan[amortization]" id="loan-amortization-4month">
            4 Months 
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-amortization-6month">
            <input type="radio" value="6 Months" name="loan[amortization]" id="loan-amortization-5month">
            6 Months 
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-amortization-9month">
            <input type="radio" value="9 Months" name="loan[amortization]" id="loan-amortization-9month">
            9 Months 
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="loan-amortization-1year">
            <input type="radio" value="1year" name="loan[amortization]" id="loan-amortization-1year">
            1 Year 
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h4 class="scetion-title">Preferred Payment Frequency</h4>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="checkbox">
          <label for="loan-payment-frequency-weekly">
            <input type="checkbox" value="Weekly" name="loan[payment_frequency][]" id="loan-payment-frequency-weekly">
            Weekly  
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="checkbox">
          <label for="loan-payment-frequency-bi-weekly">
            <input type="checkbox" value="Bi-Weekly" name="loan[payment_frequency][]" id="loan-payment-frequency-bi-weekly">
            Bi-Weekly  
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="checkbox">
          <label for="loan-payment-frequency-semi-monthly">
            <input type="checkbox" value="Semi-Monthly" name="loan[payment_frequency][]" id="loan-payment-frequency-semi-monthly">
            Semi-Monthly 
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="checkbox">
          <label for="loan-payment-frequency-monthly">
            <input type="checkbox" value="Monthly" name="loan[payment_frequency][]" id="loan-payment-frequency-monthly">
            Monthly
          </label>
        </div>
      </div> 
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>For weekly/bi-weekly, preferred day? </label>
        <input type="text" class="form-control" name="loan[frequency_weekly_day]" id="loan-payment-weekly-preferred-day">
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5">
        <label>For monthly payments, preferred date of the month? </label>
        <input type="text" class="form-control" name="loan[frequency_monthly_day]" id="loan-payment-monthly-preferred-month">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 text-right">
        <hr />
        <button class="btn btn-submit btn-tab-move nav-prev" type="button" data-stp="6" data-movestp="5"><i class="fa fa-chevron-left"></i> Back</button>
        <button class="btn btn-submit nav-next" type="submit">Submit  <i class="fa fa-send"></i></button>      
      </div>
    </div>
  </fieldset>
</div>