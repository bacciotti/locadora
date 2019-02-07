<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'genre_movie';

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
    protected $fillable = ['movie_id, genre_id'];

    public function movies() {
        return $this->belongsToMany(Movie::class);
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}
