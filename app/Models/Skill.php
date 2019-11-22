<?php

namespace App\Models;

use App\Helpers\SamirzValidator;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'degree'
    ];

    /**
     * Set the Skill's Name
     *
     * @param  string $value
     * @return string
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = SamirzValidator::sanitizeString($value)[0];
    }

    /**
     * Set the Skill's Degree
     *
     * @param  string $value
     * @return string
     */
    public function setDegreeAttribute($value)
    {
        $this->attributes['degree'] = SamirzValidator::sanitizeInteger($value)[0];
    }
}
