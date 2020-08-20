<?php

namespace App\Repositories;

use App\Models\Peyement;
use App\Repositories\BaseRepository;

/**
 * Class PeyementRepository
 * @package App\Repositories
 * @version August 20, 2020, 10:11 am UTC
*/

class PeyementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mode_payement',
        'formation_id',
        'condidat_id',
        'prix'
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
        return Peyement::class;
    }
}
