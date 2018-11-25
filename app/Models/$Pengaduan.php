<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class $Pengaduan
 * @package App\Models
 * @version November 14, 2018, 3:10 pm UTC
 *
 * @property string Jenis_Pengaduan
 */
class $Pengaduan extends Model
{
    use SoftDeletes;

    public $table = '$_pengaduans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Jenis_Pengaduan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Jenis_Pengaduan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Jenis_Pengaduan' => 'required'
    ];

    
}
