<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Peyement
 * @package App\Models
 * @version August 20, 2020, 10:11 am UTC
 *
 * @property string $mode_payement
 * @property integer $formation_id
 * @property integer $condidat_id
 * @property number $prix
 */
class Peyement extends Model
{

    public $table = 'peyements';
    



    public $fillable = [
        'mode_payement',
        'formation_id',
        'condidat_id',
        'prix'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mode_payement' => 'string',
        'formation_id' => 'integer',
        'condidat_id' => 'integer',
        'prix' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mode_payement' => 'required',
        'formation_id' => 'required',
        'condidat_id' => 'required',
        'prix' => 'required'
    ];

    public function condidat()
    {
        return $this->belongsTo('App\Condidat');
    }

    public function formation()
    {
        return $this->belongsTo('App\Models\Formation');
    }

    
}
