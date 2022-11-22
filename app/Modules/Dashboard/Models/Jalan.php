<?php

namespace App\Modules\Dashboard\Models;

use CodeIgniter\Model;

class Jalan extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'data_jalan';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';

	protected $protectFields        = true;
	protected $allowedFields        = [
		'no_ruas',
		'nama_ruas',
		'kecamatan_dilalui',
		'panjang_ruas',
		'lebar_ruas',
		'permukaan_hotmix',
		'permukaan_aspal',
		'permukaan_beton',
		'permukaan_kerikil',
		'permukaan_tanah',
		'kondisi_baik_km',
		'kondisi_baik_persentase',
		'kondisi_sedang_km',
		'kondisi_sedang_persentase',
		'kondisi_rusak_ringan_km',
		'kondisi_rusak_ringan_persentase',
		'kondisi_rusak_berat_km',
		'kondisi_rusak_berat_persentase',
		'lhr',
		'akses_p_n_k',
		'keterangan',
		'koordinat',
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
