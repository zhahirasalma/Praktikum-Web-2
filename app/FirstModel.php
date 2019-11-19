<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FirstModel extends Model
{
    protected $table = 'kategori';

    //opsional
    protected $PrimaryKey = 'id_kategori';
    protected $fillable = [
    	'id_kategori', 'nama_kategori',
    ];
    public $timestamps = false;

    use SoftDeletes;



   /* protected $table = 'produk';

    //opsional
    protected $primarykey = 'id_kategori';
    protected $fillable = [
    	'nama',
    ];*/
}
