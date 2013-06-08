{*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.3                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
<div id="help" style="padding: 1em;">
        {ts}Description/Help text here.{/ts}
        {help id="id-add_dashlets" file="CRM/Admin/Form/Setting/CiviCRMDashlets.hlp" admin=$admin}
</div>
<br/>
<div class="crm-block crm-form-block crm-mysettings-form-block">
  <div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="top"}</div>
 
<fieldset>
    <table class="form-layout">
        <tr class="crm-mysettings-form-block-specialty">
          <td class="label">{$form.civicrmdashlets_dropdown.label}</td>
          <td>
            {$form.civicrmdashlets_dropdown.html}
          </td>
        </tr>
         <tr class="crm-mysettings-form-block-recipient">
          <td class="label">{$form.civicrmdashlets_text.label}</td>
          <td>
            {$form.civicrmdashlets_text.html}
          </td>
        </tr>
   </table>
 
    <div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="bottom"}</div>
</fieldset>
 
</div>