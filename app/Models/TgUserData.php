<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TgUserData extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the TgUserData
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    # Modelo plural con relacion de uno a muchos
    public function tgRolesDatas(): HasMany
    {
        return $this->hasMany(TgRoleData::class);
    }
}
