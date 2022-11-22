<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Identitas extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'identitas';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nama_website',  'color', 'bg_color', 'dark_mode', 'login_image',  'favicon', 'logo', 'created_by'];

	// Dates
	protected $useTimestamps        = true;
}
