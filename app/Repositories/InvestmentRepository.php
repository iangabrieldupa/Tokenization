<?php

namespace App\Repositories;

use App\Models\Investment;
use App\Repositories\BaseRepository;

/**
 * Class InvestmentRepository
 * @package App\Repositories
 * @version October 27, 2021, 6:52 am UTC
*/

class InvestmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lastName',
        'firstName',
        'accountName',
        'init_invest',
        'start_date',
        'remarks'
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
        return Investment::class;
    }
}
