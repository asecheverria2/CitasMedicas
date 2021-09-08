<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidad
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Docespe[] $docespes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialidad extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docespes()
    {
        return $this->hasMany('App\Models\Docespe', 'especialidad_id', 'id');
    }
    

}
