/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
"use strict";
var nc = jQuery.noConflict();
var BSMLTSF = {
  bind: function () {
    /* Custom Select Functions*/
    nc('.bs-selects').selectpicker({
      style: 'btn-clear',
      size: 4
    });
    /* Date Field Functions*/
    nc('.bs-date-ddmmyyy').datetimepicker({
      format: 'DD/MM/YYYY',
    });
    nc('.bs-date-mmyyyy').datetimepicker({
      format: 'MM/YYYY',
    });
    /* TAB Functions*/
    var $formSteps = nc('#customer-informations-stps');
    $formSteps.responsiveTabs({
      startCollapsed: 'accordion',
      animation: 'fade',
      disabled: [1, 2, 3, 4, 5],
      active:0,
      load: function () {
        $formSteps.css('opacity', 1);
      },
      activate: function (e, tab) {
        console.log(tab);
      },
      activateState: function (e, state) {
        console.log(state);
      }
    });
    nc('.btn-tab-move', '#customer-informations-stps').on('click', function () {
      var moveTab = false;
      var $current_stp = nc(this).data('stp');
      var $move_stp = nc(this).data('movestp');
      moveTab = BSMLTSF.formAction($current_stp, $move_stp);
      if (moveTab) {
        $formSteps.responsiveTabs('enable', $move_stp - 1);
        $formSteps.responsiveTabs('activate', $move_stp - 1);
      }
    });
    nc('.form-group input[type="radio"]:checked,.form-group input[type="checkbox"]:checked').each(function (index) {
      nc(this).parent('label').addClass('field-checked');
    });
    nc('.form-group .radio > label,.form-group .checkbox > label').on('click', function () {
      nc(this).parents('.form-group').find('.radio > label').removeClass('field-checked');      
         
      if (nc(this).find('input[type="radio"]').is(':checked')) {
        nc(this).addClass('field-checked');        
      }
      BSMLTSF.radioOthers(nc(this));   
    });
    nc('.form-group .checkbox > label').on('click', function () {
      if (nc(this).find('input[type="checkbox"]').is(':checked')) {
        nc(this).addClass('field-checked');        
      }else{
         nc(this).removeClass('field-checked');      
      }
      BSMLTSF.radioOthers(nc(this));   
    });

    
   nc('#roomer-other').change(function(){

   }); 
  },
  formAction: function ($cStp, $nStp) {
    console.log($cStp + '->' + $nStp);
    return true;
  },
  radioOthers:function($label){   
     var fieldOther = nc($label).data('others');
      if (nc($label).hasClass('field-checked') && typeof fieldOther !== "undefined") { 
        nc(fieldOther).slideDown('slow');
      }else{
        nc($label).parents('.form-group').find('.others-options').each(function(){
          if(nc(this).parent().find('label').hasClass('field-checked')){
             nc(this).slideDown('slow');
          }else{
            nc(this).slideUp('slow')
          }
        
        });
      }
  },
  formStp1:function(){},
  formStp2:function(){},
  formStp3:function(){},
  formStp4:function(){},
  formStp5:function(){},
  formStp6:function(){},
};
nc(document).ready(function () {
  BSMLTSF.bind();
});
