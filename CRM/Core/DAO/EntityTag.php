<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/EntityTag.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:cb9ae7d6e83dd7423a431498f8dee5c8)
 */

/**
 * Database access object for the EntityTag entity.
 */
class CRM_Core_DAO_EntityTag extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_entity_tag';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * primary key
   *
   * @var int unsigned
   */
  public $id;

  /**
   * physical tablename for entity being joined to file, e.g. civicrm_contact
   *
   * @var string
   */
  public $entity_table;

  /**
   * FK to entity table specified in entity_table column.
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * FK to civicrm_tag
   *
   * @var int unsigned
   */
  public $tag_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_entity_tag';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'tag_id', 'civicrm_tag', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity Tag ID'),
          'description' => 'primary key',
          'required' => TRUE,
          'table_name' => 'civicrm_entity_tag',
          'entity' => 'EntityTag',
          'bao' => 'CRM_Core_BAO_EntityTag',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => 'physical tablename for entity being joined to file, e.g. civicrm_contact',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_entity_tag',
          'entity' => 'EntityTag',
          'bao' => 'CRM_Core_BAO_EntityTag',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'tag_used_for',
            'optionEditPath' => 'civicrm/admin/options/tag_used_for',
          ]
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => 'FK to entity table specified in entity_table column.',
          'required' => TRUE,
          'table_name' => 'civicrm_entity_tag',
          'entity' => 'EntityTag',
          'bao' => 'CRM_Core_BAO_EntityTag',
          'localizable' => 0,
        ],
        'tag_id' => [
          'name' => 'tag_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Tag'),
          'description' => 'FK to civicrm_tag',
          'required' => TRUE,
          'table_name' => 'civicrm_entity_tag',
          'entity' => 'EntityTag',
          'bao' => 'CRM_Core_BAO_EntityTag',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Tag',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_tag',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'entity_tag', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'entity_tag', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_entity_id_entity_table_tag_id' => [
        'name' => 'UI_entity_id_entity_table_tag_id',
        'field' => [
          0 => 'entity_id',
          1 => 'entity_table',
          2 => 'tag_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_entity_tag::1::entity_id::entity_table::tag_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
