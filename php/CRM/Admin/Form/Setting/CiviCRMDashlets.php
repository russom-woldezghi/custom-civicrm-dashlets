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
    $this->add('text', 'title', ts('Title'), null, $required = true);
    $this->add('select', 'permission', ts('User Permission'), array('0' => ts('- Select -')) + CRM_Core_Permission::basicPermissions(), $required = true
    );
    $status = array('1' => ts('Active'), '2' => ts('Disabled'));
    foreach ($status as $key => $var) {
      $statusOptions[$key] = HTML_QuickForm::createElement('radio', null, ts('Status'), $var, $key);
    }
    $this->addGroup($statusOptions, 'status', ts('Status'));
    $this->addWysiwyg('body', ts('Body'), array('rows' => 5, 'cols' => 40)
    );



    parent::buildQuickForm();
  }

  public function postProcess() {
    $params = $this->controller->exportValues();
  }

}

