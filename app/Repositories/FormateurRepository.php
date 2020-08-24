<?php

namespace App\Repositories;

use App\Formateur;
use App\Repositories\BaseRepository;

/**
 * Class FormateurRepository
 * @package App\Repositories
 * @version August 13, 2020, 9:11 am UTC
*/

class FormateurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom', 'prenom', 'email', 'password', 'grade', 'specialite', 'etat', 'region', 'tel'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Formateur::class;
    }
}
