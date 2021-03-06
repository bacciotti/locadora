<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'movies';

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
    protected $fillable = ['original_title', 'pt_br_tittle', 'countries', 'year', 'director', 'cast', 'sinopse', 'duration'];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function bookings() {
        return $this->belongsToMany(Booking::class);
    }

    public function items() {
        return $this->belongsTo(Items::class);
    }


}
