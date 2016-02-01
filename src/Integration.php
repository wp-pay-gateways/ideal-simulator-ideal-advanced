<?php

/**
 * Title: iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'ideal-simulator-ideal-advanced';
		$this->name       = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw';
		$this->provider   = 'ideal-simulator';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvanced_ConfigFactory';
	}
}
