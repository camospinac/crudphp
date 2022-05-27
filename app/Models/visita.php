<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visita
 *
 * @property $id
 * @property $cantidadVisitas
 * @property $fechaVisita
 * @property $horaVisita
 * @property $hospital
 * @property $medico
 * @property $servicios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visita extends Model
{
    
    static $rules = [
		'cantidadVisitas' => 'required',
		'fechaVisita' => 'required',
		'horaVisita' => 'required',
		'hospital' => 'required',
		'medico' => 'required',
		'servicios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidadVisitas','fechaVisita','horaVisita','hospital','medico','servicios'];



}
