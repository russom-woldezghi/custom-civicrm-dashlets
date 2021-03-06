
<div id="help" style="padding: 1em;">
        {ts}Description/Help text here.{/ts}
        {help id="id-add_dashlets" file="CRM/Admin/Form/Setting/CiviCRMDashlets.hlp" admin=$admin}
</div>
<br/>

<div class="crm-block crm-form-block civicrm-dashlets-form-block">
<div class="crm-submit-buttons">
  {include file="CRM/common/formButtons.tpl" location="bottom"}</div>      
  
  <fieldset>
    <table class="form-layout">
      <thead><h3>{ts}Add Dashlets{/ts}</h3></thead>
    
        <tr class="crm-dashlets-form-field">
          <td class="label">
            {$form.label.label}
          </td>
          <td>
            {$form.label.html}
          </td>
        </tr>
        <tr class="crm-dashlets-form-field">
          <td class="label">
            {$form.weight.label}
          </td>
          <td>
            {$form.weight.html}
          </td>
        </tr>
        <tr class="crm-dashlets-form-field">
          <td class="label">
            {$form.permission.label}
          </td>
          <td>
            {$form.permission.html}
          </td>
        </tr>
        <tr class="crm-dashlets-form-field">
          <td class="label">
            {$form.is_active.label}
          </td>
          <td>
            {$form.is_active.html}
          </td>
        </tr> 
        <tr class="crm-dashlets-form-field">
          <td class="label">
            {$form.body.label}
          </td>
          <td>
            {$form.body.html}
          </td>
        </tr>
        
   </table>
 
    <div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="bottom"}</div>
</fieldset>
 
</div>