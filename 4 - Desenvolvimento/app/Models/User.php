<?php

namespace App\Models;

use App\Notifications\UserCreated;
use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;

class User extends Authenticatable implements TableInterface
{
    use Notifiable;
    const ROLE_ADMIN = 1;
    const ROLE_CLIENT = 2;
    const ROLE_DEPENDENT = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'enrolment_number', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */
    public function getTableHeaders()
    {
        return['ID', 'Nome', 'E-mail', 'Status'];
    }

    /**
     * Get the value for a given header. Note that this will be the value
     * passed to any callback functions that are being used.
     *
     * @param string $header
     * @return mixed
     */
    public function getValueForHeader($header)
    {
        $status = "";
        if($this->status == 1){
            $status = "Ativo";
        }else{
            $status = "Inativo";
        }


        switch ($header){
            case 'ID':
                return $this->id;
            case 'Nome':
                return $this->name;
            case 'E-mail':
                return $this->email;
            case 'Status':
                return $status;
        }
    }
    
    public function profile(){
        return $this->hasOne(UserProfile::class)->withDefault();
    }

    public function userable(){
        return $this->morphTo();
    }

    public static function createFully($data)
    {
        $password = str_random(6);
        $data['password'] = bcrypt($password);

        $user = parent::create($data + ['enrolment_number' => str_random(6)]);
        self::Enrolment($user, self::ROLE_ADMIN);
        self::Role($user, $data['type']);
        $user->save();
        if(isset($data['send_mail'])){
            $token = \Password::broker()->createToken($user);
            $user->notify(new UserCreated($token));
        }

        return $user;
    }
    public static function Enrolment(User $user, $type)
    {
        $types = [
            self::ROLE_ADMIN => 100000,
            self::ROLE_CLIENT => 200000,
            self::ROLE_DEPENDENT => 700000
        ];
        $user->enrolment_number = $types[$type] + $user->id;
        return $user->enrolment_number;
    }

    public static function Role(User $user, $type)
    {
        $types = [
            self::ROLE_ADMIN => Admin::class,
            self::ROLE_CLIENT => Client::class,
            self::ROLE_DEPENDENT => Dependent::class,
        ];
        $model = $types[$type];
        $model = $model::create([]);
        $user->userable()->associate($model);
    }
}
