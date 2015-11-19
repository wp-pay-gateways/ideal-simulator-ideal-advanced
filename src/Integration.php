<?php

class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'ideal-simulator-ideal-advanced';
		$this->name       = 'iDEAL Simulator - iDEAL Professional / Advanced / Zelfbouw';
		$this->provider   = 'ideal-simulator';
	}
}
