<?php

namespace App\Repositories;

use App\Condidat;
use App\Repositories\BaseRepository;

/**
 * Class CondidatRepository
 * @package App\Repositories
 * @version August 13, 2020, 9:11 am UTC
*/

class CondidatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom', 'prenom', 'region', 'tel', 'email', 'password', 'niveau', 'etat'
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
        return Condidat::class;
    }
}
