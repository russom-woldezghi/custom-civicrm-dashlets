<?php

/**
 * This class contains all the function that are called using AJAX
 */
require_once 'CRM/Admin/Form/Setting.php';
require_once 'CRM/Core/BAO/CustomField.php';

class CRM_Admin_Form_Setting_CiviCRMDashlets extends CRM_Admin_Form_Setting {

  public function buildQuickForm() {
    CRM_Utils_System::setTitle(ts('CiviCRM Dashlets Settings'));

    $customFields = CRM_Core_BAO_CustomField::getFields();
    $this->addElement('text', 'civicrmdashlets_text', ts('Dashlet Label')
    );
    $this->addElement('select', 'civicrmdashlets_dropdown', ts('User Access Permission Level'), array('0' => ts('- Select -')) + CRM_Core_Permission::basicPermissions()
    );
    $this->addWysiwyg('civicrmdashlets_textarea', ts('Body'), array('rows' => 6, 'cols' => 40)
    );
    $this->addElement('checkbox', 'civicrmdashlets_checkbox', ts('Is this CiviCRM Dashlet active?'));

    $config = CRM_Core_Config::singleton();
    $text_civicrm_dashlets_id_1 = $config->civicrmdashlets_text;
    $select_civicrm_dashlets_id_1 = $config->civicrmdashlets_dropdown;
    
    
    
    parent::buildQuickForm();
  }

}

