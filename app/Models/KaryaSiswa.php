<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class KaryaSiswa extends Model
{
    use HasFactory;
    protected $table = 'karyasiswa'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'tanggal', 'judul', 'karya', 'tipe', 'akunsiswa_id'];

        /**
         * Get the user that owns the KaryaSiswa
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Akunsiswa(): BelongsTo
        {
            return $this->belongsTo(AkunSiswa::class, 'akunsiswa_id', 'id');
        }
}
