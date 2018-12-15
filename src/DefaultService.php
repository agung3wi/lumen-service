<?php 

namespace PhyLovely\Core;

/**
 * @author Agung
 */
interface DefaultService {
	
	public function getDescription();
	public function execute( $input );

}