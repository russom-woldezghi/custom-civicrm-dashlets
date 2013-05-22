/* 
 * Add button
 * TODO: ajax
 */
cj(function ($) {
  $('.crm-submit-buttons').append('<a style=float:right; href="civicrm/admin/setting/dashlets?reset=1" class="button show-add"><span><div id="add-more-dashlets" class="icon add-icon"></div>Add More Dashlets</span></a>').show();
    $('#add-more-dashlets').click(function() {
        $("configure-dashlet").hide();
       
    });  
});