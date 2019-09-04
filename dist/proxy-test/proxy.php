<?php

if ( isset( $_GET['zip'] ) ) {

    $api_key = 'key2POW2gXrgbzzd6';

    $url = 'https://api.airtable.com/v0/appdmGKsjDcqHYEUz/School%20Data';
    // $url = 'https://api.airtable.com/v0/appdmGKsjDcqHYEUz/School%20Data?maxRecords=3&view=Grid%20view';
    $zip = $_GET['zip'];
    $filter = sprintf( 'filterByFormula=AND(Zip=%s)', $zip );
    $url .= '?' . $filter;

    $headers = array('Authorization: Bearer ' . $api_key);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // grab URL and pass it to the browser
    $results = curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);

    echo $results;

} 
