<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Jembatan extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'data_jembatan';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';

	protected $protectFields        = true;
	protected $allowedFields        = [
		'no_jembatan',
		'nama_jembatan',
		'nama_ruas',
		'panjang_jembatan',
		'lebar_jembatan',
		'jumlah_bentang_jembatan',
		'bangunan_atas_tipe',
		'bangunan_atas_kondisi',
		'bangunan_bawah_tipe',
		'bangunan_bawah_kondisi',
		'fondasi_tipe',
		'fondasi_kondisi',
		'lantai_tipe',
		'lantai_kondisi',
		'kabupaten_kota_id',
		'keterangan',
	];

	// soft delete 
	protected $useSoftDeletes       = true;

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
