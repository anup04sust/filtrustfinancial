<div id="loan-details">
  <fieldset class="form-horizontal step-fields"> 
    <div class="form-group">
      <div class="col-xs-12 col-sm-8 col-md-8">
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
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label>Loan Amount ($ 500 - $ 2,000)</label>
        <input type="text" class="form-control" name="loan[amount]" id="loan-amount">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h4 class="scetion-title">Repayment Options</h4>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="loan-repayment-principal-interest">
            <input type="radio" value="Principal and Interest" name="loan[repayment]" id="loan-repayment-principal-interest">
            Principal and Interest
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="loan-repayment-interest-only">
            <input type="radio" value="Interest Only " name="loan[repayment]" id="loan-repayment-interest-only">
            Interest Only 
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 text-right">
        <hr />
        <button class="btn btn-submit btn-tab-move nav-prev" type="button" data-stp="2" data-movestp="1"><i class="fa fa-chevron-left"></i> Back</button>
        <button class="btn btn-submit btn-tab-move nav-next" type="button" data-stp="2" data-movestp="3">Next <i class="fa fa-chevron-right"></i></button>
        <button class="btn btn-submit" type="submit">Test Submit</button>
      </div>
    </div>
  </fieldset>
</div>