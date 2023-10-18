<?php

namespace App\Repository;

use App\Models\User;

class loginRepository
{
    public function __construct(private User $user)
    {
        $this->user = $user;
    }

    public function logIn(array $data): bool
    {
        return auth()->attempt($data);
    }
}
