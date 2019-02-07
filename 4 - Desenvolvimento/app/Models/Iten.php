<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itens';

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
    protected $fillable = ['date_acquisition', 'serial_number', 'media_type_id', 'movie_id', 'distributor_id'];

    public function media_types()
    {
        return $this->belongsToMany(MediaType::class);
    }
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
    public function distributors()
    {
        return $this->belongsToMany(Distributor::class);
    }
    
}
