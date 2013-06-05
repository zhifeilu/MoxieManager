<?php

App::uses('AppHelper', 'View/Helper');

/**
 * MoxieManager Helper
 *
 * PHP version 5
 *
 * @category MoxieManager.Helper
 * @package  MoxieManager.View.Helper
 * @version  1.5
 * @author   Paul Gardner <phpmagpie@webbedit.co.uk>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class MoxieManagerHelper extends AppHelper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
		'Js',
	);

/**
 * beforeRender
 *
 * @param string $viewFile
 * @return void
 */
	public function beforeRender($viewFile) {
		$this->Html->script(
	    array('/MoxieManager/js/moxman.loader.min'),
	    array('inline' => false)
	  );
	}
}
