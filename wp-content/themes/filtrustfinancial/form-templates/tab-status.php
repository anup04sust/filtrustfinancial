<div id="status-in-canada">  
  <fieldset class="form-horizontal step-fields">
    <div class="form-group">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-permanent-resident">
            <input type="radio" name="status[roomer]" id="roomer-permanent-resident" value="Permanent Resident" checked>
            Permanent Resident
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-canadian-citizen">
            <input type="radio" name="status[roomer]" id="roomer-canadian-citizen" value="Canadian Citizen">
            Canadian Citizen
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-caregiver">
            <input type="radio" name="status[roomer]" id="roomer-caregiver" value="Caregiver">
            Caregiver
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-temporary-work-visa">
            <input type="radio" name="status[roomer]" id="roomer-temporary-work-visa" value="Temporary Work Visa">
            Temporary Work Visa
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-refugee">
            <input type="radio" name="status[roomer]" id="roomer-refugee" value="Refugee">
            Refugee
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="roomer-other" data-others="#roomer-other-text">
            <input type="radio" name="status[roomer]" id="roomer-other" value="Other">
            Other
          </label>
        </div>
        <div id="roomer-other-text" class="others-options">
          <input type='text' id="roomer-other-text" class="form-control" name="status[roomer_other]"/>
        </div>       
      </div>
    </div>   
    <div class="form-group">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label>Date of arrival in Canada</label>
        <div class='input-group date-picker bs-date' id='date-picker-arrival-in-canada'>
          <input type='text' class="form-control bs-date-ddmmyyy" placeholder="DD/MM/YYYY" name="status[arrival]"/>
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <h4 class="scetion-title">Original Valid Identification (please provide photocopy) </h4>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="checkbox">
          <label for="identification-driveing-licence">
            <input type="checkbox" value="Driver\'s Licence" id="identification-driveing-licence" name="status[identification][]">
            Driver’s Licence
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="checkbox">
          <label for="identification-passport">
            <input type="checkbox"  value="Passport" id="identification-passport" name="status[identification][]">
            Passport
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="checkbox">
          <label for="identification-permanent-resident-card">
            <input type="checkbox" value="Permanent Resident Card" id="identification-permanent-resident-card" name="status[identification][]">
            Permanent Resident Card    
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="checkbox">
          <label for="identification-citizenship-card">
            <input type="checkbox" value="Citizenship Card" id="identification-citizenship-card" name="status[identification][]" >
            Citizenship Card    
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="document_number">Document Number</label>
        <input type="text" class="form-control" id="document_number" name="status[document_number]">
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="place-issued">Place Issued</label>
        <input type="text" class="form-control" id="place-issued" name="status[place_issued]">
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="place-issued">Expiry Date </label>
        <div class='input-group date-picker bs-date' id='date-place-issued'>
          <input type='text' class="form-control bs-date-ddmmyyy" placeholder="DD/MM/YYYY" id="place-issued" name="status[expiry_date]" />
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-xs-12 col-sm-12 col-md-12">Have you previously declared bankruptcy?</label>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio">
          <label for="bankruptcy-no">
            <input type="radio" value="No" id="bankruptcy-no" name="status[bankruptcy]" checked="checked">
            No
          </label>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="radio" for="bankruptcy-yes">
          <label>
            <input type="radio" value="Yes" id="bankruptcy-yes" name="status[bankruptcy]">
            Yes
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="yes-date-discharge">If yes, date of discharge</label>
        <div class='input-group date-picker bs-date' id='date-yes-discharge'>
          <input type='text' class="form-control bs-date-ddmmyyy" placeholder="DD/MM/YYYY" id="yes-date-discharge" name="status[date_discharge]" />
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
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