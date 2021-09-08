<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docespe
 *
 * @property $id
 * @property $doctor_id
 * @property $especialidad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor $doctor
 * @property Especialidad $especialidad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docespe extends Model
{
    
    static $rules = [
		'doctor_id' => 'required',
		'especialidad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doctor_id','especialidad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'especialidad_id');
    }
    

}
