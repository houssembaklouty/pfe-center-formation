<?php

namespace App\Repositories;

use App\Models\Formation;
use App\Repositories\BaseRepository;

/**
 * Class FormationRepository
 * @package App\Repositories
 * @version August 13, 2020, 10:06 am UTC
*/

class FormationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'date',
        'etat',
        'duree',
        'id_categorie'
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
        return Formation::class;
    }
}
