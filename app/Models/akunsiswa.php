<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunsiswa extends Model
{
    use HasFactory;
    protected $table = 'akunsiswa'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nisn', 'nm_siswa', 'th_ajaran', 'email'];

}
