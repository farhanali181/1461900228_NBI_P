<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    use HasFactory;

    //apabila id bukan integer
    public $incrementing = false;

    //nama tabel
    protected $table = 'ms_penerbit';

    //primary field
    protected $primaryKey = 'kode_penerbit';

    //isi tabel
    protected $fillable = [
        'kode_penerbit',
        'nama_penerbit',
        'alamat_penerbit',
        'telp_penerbit'
    ];
    public function buku(){
        return $this->hasMany(Buku::class, 'kode_buku');
    }
}