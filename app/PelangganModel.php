<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';

    //opsional
    protected $PrimaryKey = 'id_pelanggan';
    protected $fillable = [
    	'nama', 'email', 'no_hp', 'alamat',
    ];
    public $timestamps = false;
}
