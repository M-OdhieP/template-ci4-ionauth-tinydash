<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Perangkat extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'perangkat';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';

	protected $protectFields        = true;
	protected $allowedFields        = [
		'no_perangkat',
		'id_data_jalan',
		'koordinat',
		'status',
		'keterangan',
	];

	// soft delete 
	protected $useSoftDeletes = true;

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
