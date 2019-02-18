<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leasings';

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
    protected $fillable = ['date_time_leasing', 'date_time_devolution', 'user_id', 'booking_id'];

    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}