<?php

/**
 * Class for displaying signatures via [signaturelist] shortcode
 */
class dk_speakout_Signaturelist
{

	/**
	 * generates HTML table of signatures for a single petition
	 *
	 * @param int $id the ID petition for which we are displaying signatures
	 * @param int $start the first signature to be retrieved
	 * @param int $limit number of signatures to be retrieved
	 * @param string $context either 'shortcode' or 'ajax' to distinguish between calls from the initia page load (shortcode) and calls from pagination buttons (ajax)
	 * @param string $dateformat PHP date format provided by shortcode attribute - also relayed in ajax requests
	 * @param string $nextbuttontext provided by shortcode attribute
	 * @param string $prevtbuttontext provided by shortcode attribute
	 *
	 * @return string HTML table containing signatures (or just the table rows if context is ajax)
	 */
	public static function table( $id, $start, $limit, $context = 'shortcode', $dateformat = 'M d, Y', $nextbuttontext = '&gt;', $prevbuttontext = '&lt;' ) {

		include_once( 'class.signature.php' );
		$the_signatures = new dk_speakout_Signature();
		$options = get_option( 'dk_speakout_options' );

		// get list of columns to display - as defined in settings
		$columns = unserialize( $options['signaturelist_columns'] );

		// get the signatures
		$signatures = $the_signatures->all( $id, $start, $limit, 'signaturelist' );

		$total = $the_signatures->count( $id, 'signaturelist' );
		$current_signature_number = $total - $start;
		$signatures_list = '';

		// only show signature lists if there are signatures
		if ( $total > 0 ) {
			// determine which columns to display
			// "street", which is organization or profesion, is shown: 
			$display_street   = 1;
			$display_city     = ( in_array( 'sig_city', $columns ) ) ? 1 : 0;
			$display_state    = ( in_array( 'sig_state', $columns ) ) ? 1 : 0;
			$display_postcode = ( in_array( 'sig_postcode', $columns ) ) ? 1 : 0;
			$display_country  = ( in_array( 'sig_country', $columns ) ) ? 1 : 0;
			$display_custom   = ( in_array( 'sig_custom', $columns ) ) ? 1 : 0;
			$display_date     = ( in_array( 'sig_date', $columns ) ) ? 1 : 0;
			$display_message  = ( in_array( 'sig_message', $columns ) ) ? 1 : 0;

// display signatures as a list (option on settings page)
if($options['signaturelist_display']=='list'){
    $signatures_list .= "	<!-- signaturelist -->";
    $signatures_list .= '<h3>' . $options['signaturelist_header'] . '</h3>';

    foreach ( $signatures as $signature ) {
	  	$display_lastname = $options['signaturelist_privacy']=='enabled'?  substr($signature->last_name, 0, 1) . "., " : $signature->last_name . ", ";
		$signatures_list .= stripslashes( $signature->first_name . ' ' . $display_lastname ); 
	}
	
	return $signatures_list;
}
// or display signatures as a table
else{

			if ( $context !== 'ajax' ) { // only include on initial page load (not when paging)
				$signatures_list = '
				<!-- signaturelist -->
					<table class="dk-speakout-signaturelist dk-speakout-signaturelist-' . $id . '">
						<caption>' . $options['signaturelist_header'] . '</caption>';
			}

			$row_count = 0;
			foreach ( $signatures as $signature ) {
				if ( $row_count % 2 ) {
					$signatures_list .= '<tr class="dk-speakout-even">'.PHP_EOL;
				}
				else {
					$signatures_list .= '<tr class="dk-speakout-odd">'.PHP_EOL;
				}
				$signatures_list .= "\t" .'<td class="dk-speakout-signaturelist-count">' . number_format( $current_signature_number, 0, '.', ',' ) . '</td>'.PHP_EOL;
				$display_lastname =	$signature->last_name;
				// if we have enabled privacy, only show forst letter of surname
				if($options['signaturelist_privacy']=='enabled'){
				 $display_lastname =	substr($signature->last_name, 0, 1) . ".";
				}
				$signatures_list .= "\t" .'<td class="dk-speakout-signaturelist-name" >' . stripslashes( $signature->first_name . ' ' . $display_lastname ) . '</td>'.PHP_EOL ;
				if ( $display_street ) $signatures_list   .= "\t" .'<td class="dk-speakout-signaturelist-street">' . stripslashes( $signature->street_address ) . '</td>'.PHP_EOL;

				// if we display both city and state, combine them into one column
				$city  = ( $display_city )  ? $signature->city : '';
				$state = ( $display_state ) ? $signature->state : '';
				if ( $display_city && $display_state ) {
					// should we separate with a comma?
					$delimiter = ( $city !='' && $state != '' ) ? ', ' : '';
					$signatures_list .= "\t" .'<td class="dk-speakout-signaturelist-city">' . stripslashes( $city . $delimiter . $state ) . '</td>'.PHP_EOL;
				}
				// else keep city or state values in their own column
				else {
					if ( $display_city ) $signatures_list  .= "\t" .'<td class="dk-speakout-signaturelist-city">' . stripslashes( $city ) . '</td>'.PHP_EOL;
					if ( $display_state ) $signatures_list .= "\t" .'<td class="dk-speakout-signaturelist-state">' . stripslashes( $state ) . '</td>'.PHP_EOL;
				}

				if ( $display_postcode ) $signatures_list .= "\t" .'<td class="dk-speakout-signaturelist-postcode">' . stripslashes( $signature->postcode ) . '</td>'.PHP_EOL;
				if ( $display_country ) $signatures_list  .= "\t" .'<td class="dk-speakout-signaturelist-country">' . stripslashes( $signature->country ) . '</td>'.PHP_EOL;
				if ( $display_custom ) $signatures_list   .= "\t" .'<td class="dk-speakout-signaturelist-custom">' . stripslashes( $signature->custom_field ) . '</td>'.PHP_EOL;
				if ( $display_message ) $signatures_list     .= "\t" .'<td class="dk-speakout-signaturelist-message">' . mb_strimwidth(stripslashes( $signature->custom_message ),0,100,"...") . '</td>'.PHP_EOL;
				if ( $display_date ) $signatures_list     .= "\t" .'<td class="dk-speakout-signaturelist-date">' . date_i18n( $dateformat, strtotime( $signature->date ) ) . '</td>'.PHP_EOL;
				$signatures_list .= '</tr>'.PHP_EOL;
 
				$current_signature_number --;
				$row_count ++;
			}

			if ( $context !== 'ajax' ) { // only include on initial page load

				if ( $limit != 0 && $start + $limit < $total  ) {
					$colspan = ( count( $columns ) + 2 );
					$signatures_list .= '
					<tr class="dk-speakout-signaturelist-pagelinks">
						<td colspan="' . $colspan . '">
							<a class="dk-speakout-signaturelist-prev dk-speakout-signaturelist-disabled" rel="' . $id .  ',' . $total . ',' . $limit . ',' . $total . ',0">' . $prevbuttontext . '</a>
							<a class="dk-speakout-signaturelist-next" rel="' . $id .  ',' . ( $start + $limit ) . ',' . $limit . ',' . $total . ',1">' . $nextbuttontext . '</a>
						</td>
					</tr>
					';
				}
				$signatures_list .= '</table>';
			}

		}

		return $signatures_list;
	}
}// end if table/list
}

?>