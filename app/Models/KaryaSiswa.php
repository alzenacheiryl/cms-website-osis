<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaSiswa extends Model
{
    use HasFactory;
    protected $table = 'karyasiswa'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'tanggal', 'judul', 'karya', 'tipe', 'akunsiswa_id'];
}
