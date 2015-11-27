<div id="additional-information">
  <fieldset class="form-horizontal step-fields"> 
    <div class="form-group">
      <div class="col-xs-12">
        <label>Address in the Philippines</label>
        <textarea class="form-control" rows="3" id="additional-address-philippines" name="additional[address_philippines]"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-12">Travel Plans</label>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="additional-travel-plans-no">
            <input type="radio" value="No" id="additional-travel-plans-no" name="additional[travel_plans]" checked="checked">
            No
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="additional-travel-plans-yes">
            <input type="radio" value="Yes" id="additional-travel-plans-yes" name="additional[travel_plans]">
            Yes
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>If yes, when / where</label>
        <input type="text" class="form-control" id="additional-travel-when-where" name="additional[travel_when_where]">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>Home Phone in Philippines</label>
        <input type="text" class="form-control" id="additional-phone-philippines" name="additional[phone_philippines]">
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>Cell Phone in Philippines</label>
        <input type="text" class="form-control" id="additional-mobile-philippines" name="additional[mobile_philippines]">
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-12 col-sm-12 col-md-12">Maternity Leave</label>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label>
            <input type="radio" value="No" id="additional-maternity-leave-no" name="additional[maternity_leave]" checked="checked">
            No
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="radio">
          <label for="additional-maternity-leave-yes">
            <input type="radio" value="Yes" id="additional-maternity-leave-yes" name="additional[maternity_leave]">
            Yes
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>If yes, when</label>
        <div class='input-group date-picker bs-date' id='date-maternity-leave-when'>
          <input type='text' class="form-control bs-date-ddmmyyy" placeholder="DD/MM/YYYY"  id="additional-maternity-leave-when" name="additional[leave_when]" />
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label>Referred By</label>
        <input type="text" class="form-control" id="additional-referred-by" name="additional[referred_by]">
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5">
        <label>Co-Signer</label>
        <input type="text" class="form-control" id="additional-co-signer" name="additional[co_signer]">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 text-right">
        <hr />
        <button class="btn btn-submit btn-tab-move nav-prev" type="button" data-stp="4" data-movestp="3"><i class="fa fa-chevron-left"></i> Back</button>
        <button class="btn btn-submit btn-tab-move nav-next" type="button" data-stp="4" data-movestp="5">Next <i class="fa fa-chevron-right"></i></button>       
      </div>
    </div>
  </fieldset>
</div>