<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorie
 * @package App\Models
 * @version August 13, 2020, 9:11 am UTC
 *
 * @property string $title_cat
 * @property string $date_cat
 */
class Categorie extends Model
{

    public $table = 'categories';
    



    public $fillable = [
        'title_cat',
        'date_cat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_cat' => 'string',
        'date_cat' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_cat' => 'required'
    ];

    
}
