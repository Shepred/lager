<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvImport extends Model
{
   	protected $table = 'ean_to_sku';
   	public $timestamps = false;
}
