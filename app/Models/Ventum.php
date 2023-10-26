<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 *
 * @property $id
 * @property $product_id
 * @property $cantidda
 * @property $fecha_venta
 * @property $precio_unitario
 * @property $created_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ventum extends Model
{
    
    static $rules = [
      'product_id' => 'required',
      'cantidad' => 'required',
      'precio_unitario' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','cantidad','precio_unitario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    

}
