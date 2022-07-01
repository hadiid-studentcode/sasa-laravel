<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tbbarang';
    protected $primarykey = 'id';
    protected $filable = [
    	'kode',
    	'nama',
    	'idsatuan',
    	'sawal',
    	'hb',
    	'hj',
    ];

    //relasi
    public function Satuan()
    {
    	return $this->belongsTo('App\Models\Satuan', 'idsatuan', 'idsatuan');
    }

}
