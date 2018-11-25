<?php

namespace App\Repositories;

use App\Models\Pengaduan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PengaduanRepository
 * @package App\Repositories
 * @version November 14, 2018, 3:16 pm UTC
 *
 * @method Pengaduan findWithoutFail($id, $columns = ['*'])
 * @method Pengaduan find($id, $columns = ['*'])
 * @method Pengaduan first($columns = ['*'])
*/
class PengaduanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Jenis_pengaduan',
        'Keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pengaduan::class;
    }
}
