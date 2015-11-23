/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
"use strict";
var nc = jQuery.noConflict();
nc(document).ready(function () {
   var $formSteps = nc('#customer-informations-stps');
  $formSteps.responsiveTabs({
    startCollapsed: 'accordion'
  });
});
