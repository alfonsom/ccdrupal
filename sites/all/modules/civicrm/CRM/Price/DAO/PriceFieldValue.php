<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
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
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Price/PriceFieldValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Price_DAO_PriceFieldValue extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_price_field_value';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * Price Field Value
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to civicrm_price_field
   *
   * @var int unsigned
   */
  public $price_field_id;
  /**
   * Price field option name
   *
   * @var string
   */
  public $name;
  /**
   * Price field option label
   *
   * @var string
   */
  public $label;
  /**
   * >Price field option description.
   *
   * @var text
   */
  public $description;
  /**
   * Price field option amount
   *
   * @var string
   */
  public $amount;
  /**
   * Number of participants per field option
   *
   * @var int unsigned
   */
  public $count;
  /**
   * Max number of participants per field options
   *
   * @var int unsigned
   */
  public $max_value;
  /**
   * Order in which the field options should appear
   *
   * @var int
   */
  public $weight;
  /**
   * FK to Membership Type
   *
   * @var int unsigned
   */
  public $membership_type_id;
  /**
   * Number of terms for this membership
   *
   * @var int unsigned
   */
  public $membership_num_terms;
  /**
   * Is this default price field option
   *
   * @var boolean
   */
  public $is_default;
  /**
   * Is this price field value active
   *
   * @var boolean
   */
  public $is_active;
  /**
   * FK to Financial Type.
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * Tax-deductible portion of the amount
   *
   * @var float
   */
  public $deductible_amount;
  /**
   * class constructor
   *
   * @return civicrm_price_field_value
   */
  function __construct()
  {
    $this->__table = 'civicrm_price_field_value';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'price_field_id', 'civicrm_price_field', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'membership_type_id', 'civicrm_membership_type', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Field Value ID') ,
          'description' => 'Price Field Value',
          'required' => true,
        ) ,
        'price_field_id' => array(
          'name' => 'price_field_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Field') ,
          'description' => 'FK to civicrm_price_field',
          'required' => true,
          'FKClassName' => 'CRM_Price_DAO_PriceField',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Price field option name',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label') ,
          'description' => 'Price field option label',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Description') ,
          'description' => '>Price field option description.',
          'rows' => 2,
          'cols' => 60,
          'default' => 'NULL',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'amount' => array(
          'name' => 'amount',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Amount') ,
          'description' => 'Price field option amount',
          'required' => true,
          'maxlength' => 512,
          'size' => 8,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'count' => array(
          'name' => 'count',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Count') ,
          'description' => 'Number of participants per field option',
          'default' => 'NULL',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'max_value' => array(
          'name' => 'max_value',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Max Value') ,
          'description' => 'Max number of participants per field options',
          'default' => 'NULL',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Order in which the field options should appear',
          'default' => '1',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'membership_type_id' => array(
          'name' => 'membership_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type') ,
          'description' => 'FK to Membership Type',
          'default' => 'NULL',
          'FKClassName' => 'CRM_Member_DAO_MembershipType',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'membership_num_terms' => array(
          'name' => 'membership_num_terms',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Num Terms') ,
          'description' => 'Number of terms for this membership',
          'default' => 'NULL',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'is_default' => array(
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Default Price Field Option?') ,
          'description' => 'Is this default price field option',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Price Field Value is Active') ,
          'description' => 'Is this price field value active',
          'default' => '1',
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type') ,
          'description' => 'FK to Financial Type.',
          'default' => 'NULL',
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'deductible_amount' => array(
          'name' => 'deductible_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Deductible Amount') ,
          'description' => 'Tax-deductible portion of the amount',
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'default' => '0.0',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'price_field_id' => 'price_field_id',
        'name' => 'name',
        'label' => 'label',
        'description' => 'description',
        'amount' => 'amount',
        'count' => 'count',
        'max_value' => 'max_value',
        'weight' => 'weight',
        'membership_type_id' => 'membership_type_id',
        'membership_num_terms' => 'membership_num_terms',
        'is_default' => 'is_default',
        'is_active' => 'is_active',
        'financial_type_id' => 'financial_type_id',
        'deductible_amount' => 'deductible_amount',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['price_field_value'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['price_field_value'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
