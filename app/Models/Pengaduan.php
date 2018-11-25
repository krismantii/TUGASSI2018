<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pengaduan
 * @package App\Models
 * @version November 14, 2018, 3:16 pm UTC
 *
 * @property string Jenis_pengaduan
 * @property string Keterangan
 */
class Pengaduan extends Model
{
    use SoftDeletes;

    public $table = 'pengaduans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Jenis_pengaduan',
        'Keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Jenis_pengaduan' => 'string',
        'Keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Jenis_pengaduan' => 'required',
        'Keterangan' => 'required'
    ];

    
}
