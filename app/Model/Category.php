<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";
    
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable = [
        'name',
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
