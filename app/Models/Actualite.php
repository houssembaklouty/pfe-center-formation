<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Actualite
 * @package App\Models
 * @version August 18, 2020, 9:43 pm UTC
 *
 * @property string $nom
 * @property string $description
 */
class Actualite extends Model
{

    public $table = 'actualites';
    



    public $fillable = [
        'nom',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'description' => 'required'
    ];

    
}
