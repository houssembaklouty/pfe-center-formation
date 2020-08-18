<?php

namespace App\Repositories;

use App\Models\Actualite;
use App\Repositories\BaseRepository;

/**
 * Class ActualiteRepository
 * @package App\Repositories
 * @version August 18, 2020, 9:43 pm UTC
*/

class ActualiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'description'
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
        return Actualite::class;
    }
}
