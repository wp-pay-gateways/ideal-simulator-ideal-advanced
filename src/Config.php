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
class Pronamic_WP_Pay_Gateways_IDealSimulator_IDealAdvanced_Config extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://www.ideal-simulator.nl/professional/';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/simulator.cer',
		);
	}
}
