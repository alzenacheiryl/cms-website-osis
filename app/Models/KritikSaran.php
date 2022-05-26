<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KritikSaran extends Model
{
    use HasFactory;
    protected $table = 'kritiksaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal', 'kritiksaran', 'akunsiswa_id'];
        

        /**
         * Get the AkunSiswa that owns the KritikSaran
         *      
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function AkunSiswa(): BelongsTo
        {       
            return $this->belongsTo(AkunSiswa::class, 'akunsiswa_id', 'id');
        }
}
