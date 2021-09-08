<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $id
 * @property $cedula
 * @property $direccion
 * @property $telefono
 * @property $usuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Docespe[] $docespes
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'usuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','direccion','telefono','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docespes()
    {
        return $this->hasMany('App\Models\Docespe', 'doctor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
