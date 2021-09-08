<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $cedula
 * @property $direccion
 * @property $sexo
 * @property $edad
 * @property $fecha_nacimiento
 * @property $telefono
 * @property $usuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'direccion' => 'required',
		'sexo' => 'required',
		'edad' => 'required',
		'fecha_nacimiento' => 'required',
		'telefono' => 'required',
		'usuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','direccion','sexo','edad','fecha_nacimiento','telefono','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
