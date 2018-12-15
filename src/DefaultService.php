<?php 

namespace Phylovely\ApiService;

/**
 * @author Agung
 */
interface DefaultService {
	
	public function getDescription();
	public function execute( $input );

}