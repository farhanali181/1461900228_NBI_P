<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    //apabila id bukan integer
    public $incrementing = false;

    //nama tabel
    protected $table = 'ms_buku';

    //primary field
    protected $primaryKey = 'kode_buku';

    //isi tabel
    protected $fillable = [
        'kode_buku',
        'kode_kategori',
        'kode_penerbit',
        'judul_buku',
        'jumlah_buku',
        'pengarang_buku',
        'tahun_terbit_buku',
    ];
    public function penerbit(){
        return $this->belongsTo(Penerbit::class, 'kode_penerbit');
    }
}