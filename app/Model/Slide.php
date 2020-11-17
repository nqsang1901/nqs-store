<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $table = "slide";
    
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable = [
    	'picture',
    	'created_at',
        'updated_at',
        'deleted_at'
    ];

    // ép kiểu của trường về thời gian ngày/tháng/năm
    protected $casts = [
        'created_at'=>'datetime:d/m/Y - H:i',
        'updated_at'=>'datetime:d/m/Y - H:i',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
