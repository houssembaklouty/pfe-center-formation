<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Formation
 * @package App\Models
 * @version August 13, 2020, 10:06 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property string $title
 * @property string $description
 * @property string $date
 * @property boolean $etat
 * @property integer $duree
 * @property integer $id_categorie
 */
class Formation extends Model
{

    public $table = 'formations';
    



    public $fillable = [
        'title',
        'description',
        'date',
        'etat',
        'duree',
        'id_categorie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'date' => 'datetime',
        'etat' => 'boolean',
        'duree' => 'integer',
        'id_categorie' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'date' => 'required',
        'duree' => 'required',
        'id_categorie' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categorie()
    {
        return $this->belongsTo(\App\Models\Categorie::class, 'id_categorie', 'id');
    }
}
