<div id="borrows-information">
  <fieldset class="form-horizontal step-fields">
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-title">Title</label>
        <select class="form-control bs-selects" name="borrows[title]" id="borrows-title">
          <option>Mr.</option>
          <option>Mrs.</option>
        </select>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-first-name">First Name</label>
        <input type="text" class="form-control required" name="borrows[first_name]" id="borrows-first-name" required="required"/>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-last-name">Last Name</label>
        <input type="text" class="form-control" name="borrows[last_name]" id="borrows-last-name" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-title">Date of Birth</label>
        <div class='input-group date-picker bs-date' id='date-picker-dob'>
          <input type='text' class="form-control bs-date-ddmmyyy required" placeholder="DD / MM / YYYY" name="borrows[date_of_birth]" id="borrows-date-of-birth"  required="required"/>
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-right-4">
        <label for="borrows-marrital-status">Marrital Status</label>
        <select class="form-control bs-selects" name="borrows[marrital_status]" id="borrows-marrital-status">
          <option>Married</option>
          <option>Unmarried</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <label for="borrows-current-address">Current Home Address (Street No. & Name, Apt. No.)</label>
        <textarea class="form-control required" rows="3" name="borrows[current_address]" id="borrows-current-address" required="required"></textarea>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-live-since">Since</label>
        <div class='input-group date-picker' id='date-picker-live-since'>
          <input type='text' class="form-control bs-date-mmyyyy" placeholder="MM / YYYY" name="borrows[live_since]" id="borrows-live-since"/>
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
          </span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <label for="borrows-prev-address">Previous Address (if at current address is less than 2 years)</label>
        <textarea class="form-control" rows="3" name="borrows[prev_address]" id="borrows-prev-address"></textarea>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <label for="borrows-email-address">E-mail Address</label>
        <input type='email' class="form-control" name="borrows[email_address]" id="borrows-email-address"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 text-right">   
        <hr />
        <button class="btn btn-submit btn-tab-move nav-next" type="button" data-stp="1" data-movestp="2">Next <i class="fa fa-chevron-right"></i></button>
      </div>
    </div>
  </fieldset>
</div>