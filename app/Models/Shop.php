<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Traits\Admin\ActionButtonTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model implements Transformable
{
    use TransformableTrait;
    use ActionButtonTrait;
    use SoftDeletes;

    protected $table = 'wr_shop';


    /*
     * 可以被批量赋值的属性.
     * */
    protected $fillable = [
        'shop_name',
        'address',
        'detail_address',
        'tel',
        'open_time',
        'longitude',
        'latitude',
        'introduce',
        'merchant_id',
        'token',
        'img0',
        'img1',
        'img2',
        'img3',
    ];

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = [];

    //软删除
    protected $dates = ['deleted_at'];


    public function freshTimestamp() {
        return time();
    }

    public function fromDateTime($value) {
        return $value;
    }

    public function getDateFormat() {
        return 'U';
    }

}
