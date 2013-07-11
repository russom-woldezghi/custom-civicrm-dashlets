/* 
 * Add Add More Dashlets button CiviCRM landing page
 */
  cj(function($) {
    $('#crm-dashboard-configure').click(function() {
      $.ajax({
         url: CRM.url('civicrm/dashlet', 'reset=1&snippet=1'),
         success: function( content ) {
           $("#civicrm-dashboard, #crm-dashboard-configure, .show-refresh, #empty-message").hide();
           $('.show-done').show().after('<a style=float:right; href="civicrm/admin/setting/dashlets?reset=1" class="button show-add"><span><div id="add-more-dashlets" class="icon add-icon"></div>Add More Dashlets</span></a>');
         }
      });
      return false;
    });
  });
  cj().crmAccordions();