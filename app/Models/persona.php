<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $rol
 * @property $nombre
 * @property $apellido
 * @property $tipo_documento
 * @property $documento
 * @property $telefono
 * @property $direccion
 * @property $fecha_nacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'rol' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'tipo_documento' => 'required',
		'documento' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'fecha_nacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rol','nombre','apellido','tipo_documento','documento','telefono','direccion','fecha_nacimiento'];



}
