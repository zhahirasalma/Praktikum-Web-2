<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    //opsional
    protected $PrimaryKey = 'id_produk';
    protected $fillable = [
    	'id_produk', 'nama', 'harga',
    ];
    public $timestamps = false;

    
}
