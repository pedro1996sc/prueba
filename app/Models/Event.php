<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property $id
 * @property $name
 * @property $status
 * @property $description
 * @property $day
 * @property $hour
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'status', 'description', 'day', 'hour'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany(\App\Models\Purchase::class, 'id', 'events_id');
    }
    
}
