var txghaccordioneffect = 'blind';
var txghaccordionoptions = { duration: 0.3 };

function txghaccordionsingletoggle(uid) {
	Effect.toggle('tx_ghaccordion_content_' + uid, txghaccordioneffect, txghaccordionoptions );
	if( $('tx_ghaccordion_header_' + uid).hasClassName('tx_ghaccordion_status0')) {
		$('tx_ghaccordion_header_' + uid).removeClassName('tx_ghaccordion_status0');
		$('tx_ghaccordion_header_' + uid).addClassName('tx_ghaccordion_status1');
	} else {
		$('tx_ghaccordion_header_' + uid).removeClassName('tx_ghaccordion_status1');
		$('tx_ghaccordion_header_' + uid).addClassName('tx_ghaccordion_status0');
	}
}