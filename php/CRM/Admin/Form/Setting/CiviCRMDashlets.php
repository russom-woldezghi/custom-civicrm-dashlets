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
    //$this->add('text', 'name', ts('Title'), null, $required = true);
    $this->add('text', 'label', ts('Title'), null, $required = true);
    $this->add('text', 'weight', ts('Weight'), CRM_Core_DAO::getAttribute('CRM_Core_DAO_OptionValue', 'weight'), TRUE
    );
    $this->addRule('weight', ts('is a numeric field'), 'numeric');
    $this->add('select', 'permission', ts('User Permission'), array('0' => ts('- Select -')) + CRM_Core_Permission::basicPermissions(), $required = true
    );
    $this->add('checkbox', 'is_active', ts('Is this dashlet active?'), null, $required = true);
    $this->addWysiwyg('body', ts('Body'), array('rows' => 5, 'cols' => 40)
    );
    parent::buildQuickForm();
  }

  public function postProcess() {
    $params = $this->controller->exportValues();

    //values
    $data = array(
      'domain_id' => 1,
      'name' => NULL,
      'label' => $params['label'],
      'url' => 'www', /* TODO: URL */
      'permission' => $params['permission'],
      'permission_operator' => NULL,
      'column_no' => 0,
      'is_minimized' => 0,
      'fullscreen_url' => 0, /* TODO: URL */
      'is_fullscreen' => 1,
      'is_active' => $params['is_active'],
      'is_reseverd' => 1,
      'weight' => $params['weight'],
    );
    CRM_Core_Session::setStatus("Success, dashlet created." ? : "Failed to create dashlet." );
  }

}

