<?php

namespace Tests\Setup\Models;

use LaravelFreelancerNL\Aranguent\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['location'];

    protected $fillable = [
        '_key',
        'name',
        'surname',
        'alive',
        'age',
        'traits',
        'location_key',
        'residence_key',
    ];

    /**
     * Get the last known residence of the character.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function leads()
    {
        return $this->hasOne(Location::class, 'led_by');
    }

    public function residence()
    {
        return $this->belongsTo(Location::class, 'residence_key');
    }

    public function parents()
    {
        return $this->belongsToMany(Character::class, 'ChildOf', '_from', '_to');
    }

    public function children()
    {
        return $this->belongsToMany(Character::class, 'child_of', '_from', '_to', '_id', '_id');
    }

    public function captured()
    {
        return $this->morphMany(Location::class, 'capturable');
    }

    public function conquered()
    {
        return $this->morphOne(Location::class, 'capturable');
    }
}
