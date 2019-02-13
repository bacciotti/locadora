<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardPayment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'card_payments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['payment_id', 'company', 'number'];

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }
    
}
