<?php

namespace App\Repository;

use App\Models\User;

class RegisterRepository
{
    public function __construct(private User $user)
    {
        $this->user = $user;
    }

    public function register(array $data) : User
    {
       return  $this->user->create($data);
    }


}
