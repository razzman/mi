<?php
/**
 * Short description for product_category_fixture.php
 *
 * Long description for product_category_fixture.php
 *
 * PHP version 5
 *
 * Copyright (c) 2008, Andy Dawson
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright            Copyright (c) 2008, Andy Dawson
 * @link                 www.ad7six.com
 * @package              base
 * @subpackage           base.tests.fixtures
 * @since                v 1.0
 * @modifiedBy           $LastChangedBy$
 * @lastModified         $Date$
 * @license              http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * ProductCategoryFixture class
 *
 * @uses                 CakeTestFixture
 * @package              base
 * @subpackage           base.tests.fixtures
 */
class ProductCategoryFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'ProductCategory'
 * @access public
 */
	public $name = 'ProductCategory';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'title' => array('type'=> 'string', 'null' => false, 'length' => 100),
		'parent_id' => array('type' => 'integer', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => false),
		'rght' => array('type' => 'integer', 'null' => false),
		'depth' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	public $records = array(
		array('id' => 1, 'title' => 'Toys', 'parent_id' => null, 'lft' => 1, 'rght' => 6, 'depth' => 0),
		array('id' => 2, 'title' => 'X-men', 'parent_id' => 1, 'lft' => 2, 'rght' => 3, 'depth' => 0),
		array('id' => 3, 'title' => 'Donald Duck', 'parent_id' => 1, 'lft' => 4, 'rght' => 5, 'depth' => 0),
		array('id' => 4, 'title' => 'Comics', 'parent_id' => null, 'lft' => 7, 'rght' => 12, 'depth' => 0),
		array('id' => 5, 'title' => 'X-men', 'parent_id' => 4, 'lft' => 8, 'rght' => 9, 'depth' => 0),
		array('id' => 6, 'title' => 'Donald Duck', 'parent_id' => 4, 'lft' => 10, 'rght' => 11, 'depth' => 0)
	);
}

?>
