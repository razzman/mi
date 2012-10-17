<?php
/**
 * TreePlus Test cases
 *
 * PHP version 5
 *
 * Copyright (c) 2010, Andy Dawson
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright (c) 2010, Andy Dawson
 * @link          www.ad7six.com
 * @package       mi
 * @subpackage    mi.tests.cases.behaviors
 * @since         v 1.0 (05-Dec-2010)
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * ProductCategory class
 *
 * Represents fixture.
 *
 * @uses          CakeTestModel
 */
class ProductCategory extends CakeTestModel {
	public $actsAs = array('Tree', 'Mi.TreePlus');
}

/**
 * TreePlusBehaviorTestCase class
 *
 * Tests TreePlusBehavior
 *
 * @uses          CakeTestCase
 * @package       mi
 * @subpackage    mi.tests.cases.behaviors
 */
class TreePlusBehaviorTestCase extends CakeTestCase {

/**
 * Fixtures property
 *
 * @var array
 * @access public
 */
	public $fixtures = array('plugin.mi.product_category');

/**
 * ProductCategory property
 *
 * @var ProductCategory
 * @access private
 */
	private $ProductCategory = null;

/**
 * startTest method
 *
 * Initializes the test model.
 *
 * @return void
 * @access public
 */
	public function startTest() {
		$this->ProductCategory = ClassRegistry::init('ProductCategory');
	}

/**
 * testResetDepths method
 *
 * Tests TreePlusBehavior::resetDepths().
 *
 * @return void
 * @access public
 */
	public function testResetDepths() {
		$this->ProductCategory->resetDepths();
		$result = $this->ProductCategory->find('list', array(
			'fields' => array('id', 'depth'),
			'order' => array('id' => 'ASC'),
			'recursive' => false
		));
		$this->assertEqual(array_values($result), array(0, 1, 1, 0, 1, 1));
	}

/**
 * endTest method
 *
 * Destroys the test model.
 *
 * @return void
 * @access public
 */
	public function endTest() {
		unset($this->ProductCategory);
		ClassRegistry::flush();
	}
}
?>