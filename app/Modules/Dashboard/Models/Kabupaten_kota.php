<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Kabupaten_kota extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'kabupaten_kota';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nama'];

	// Dates
	protected $useTimestamps        = true;
}
