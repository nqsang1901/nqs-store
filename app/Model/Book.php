<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = "book";
    
    protected $primaryKey = "id";

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'picture',
        'price',
        'saleoff',
        'category_id',
        'number_of_view',
        'sell_number',
        'quantity_in_stock',
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
