<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;

class RegisterRepository extends BaseRepository
{
    protected $user;

    public function __construct( User $user)
    {
        $this->user = $user;
    }

    public function register($data)
    {
        $data['password'] = bcrypt($data['password']);

        if(!$this->user->create($data))
        {
            return $this->fail() ;
        }

        auth()->login($this->user->where("email", $data['email'])->first());


        return $this->success();
    }
}
