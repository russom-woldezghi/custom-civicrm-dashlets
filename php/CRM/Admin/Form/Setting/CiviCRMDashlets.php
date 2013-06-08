
<?php

/*
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
 */

/**
 * This class contains all the function that are called using AJAX
 */
 
require_once 'CRM/Admin/Form/Setting.php';
require_once 'CRM/Core/BAO/CustomField.php';
 

class CRM_Admin_Form_Setting_CiviCRMDashlets extends CRM_Admin_Form_Setting {

  public function buildQuickForm() {
    CRM_Utils_System::setTitle(ts('CiviCRM Dashlets Settings'));


   // $config = CRM_Core_Config::singleton();
    //$civicrmdashlets_field_id1 = $config->civicrmdashlets_dropdown;
    //$civicrmdashlets_field_id2 = $config->civicrmdashlets_text;

    $customFields = CRM_Core_BAO_CustomField::getFields();
    $cf = array();
    foreach ($customFields as $k => $v) {
      $cf[$k] = $v['label'];
    }

    $this->addElement('select', 'civicrmdashlets_dropdown', ts('Select1'), array('' => ts('- select -')) + $cf
    );

    $this->addElement('text', 'civicrmdashlets_text', ts('Text2')
    );
    

    parent::buildQuickForm();
  }

}