<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cama
 *
 * @property $id
 * @property $numero
 * @property $piso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cama extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'piso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','piso'];



}
