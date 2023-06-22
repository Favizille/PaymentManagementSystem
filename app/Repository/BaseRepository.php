<?php

namespace App\Repository;

class BaseRepository
{
    public function success(){
        return true;
    }

    public function fail(){
        return false;
    }
}
