<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvImport;

class CsvImportController extends Controller
{
    public function index() {
    	if (($handle = fopen ( public_path () . '/ean_sku.csv', 'r' )) !== FALSE) {
        while ( ($data = fgetcsv ( $handle, 35112, ',' )) !== FALSE ) {
 
			$csv_data = new CsvImport ();
            $csv_data->ean = $data [0];
            $csv_data->sku = $data [1];
            $csv_data->save ();
 
        }
        fclose ( $handle );
    }
    	return view('import.index');
    }
}
