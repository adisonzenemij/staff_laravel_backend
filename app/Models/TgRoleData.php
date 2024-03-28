<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TgRoleData extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the TgRoleData
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    # Modelo singular con relacion de muchos a uno
    public function tgUserData(): BelongsTo
    {
        return $this->belongsTo(TgUserData::class);
    }
}
