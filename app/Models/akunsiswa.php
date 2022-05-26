<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AkunSiswa extends Model
{
    use HasFactory;
    protected $table = 'akunsiswa'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nisn', 'nm_siswa', 'th_ajaran', 'email'];

        /**
         * Get all of the Karyasiswa for the AkunSiswa
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function Karyasiswa(): HasMany
        {
            return $this->hasMany(KaryaSiswa::class, 'akunsiswa_id', 'id');
        }

        /**
         * Get all of the KritikSaran for the AkunSiswa
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function KritikSaran(): HasMany
        {
            return $this->hasMany(KritikSaran::class, 'akunsiswa_id', 'id');
        }
}
