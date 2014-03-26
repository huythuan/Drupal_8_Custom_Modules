<?php
namespace Drupal\chad\Controller;
class ChadController {
	/**
	* Generates an example page
	*/
	public function chadPage(){
		$build = array( 
			'#type'=>'markup',
			'#markup'=>t('Hello World!'),			
		);
		return $build;
	}
}