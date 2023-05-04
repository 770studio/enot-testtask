<?php

namespace App;

interface CodeStorageContract
{
    public function saveCode(int $user_id, int $code) : void;

    public function getCode(int $user_id) : int;
}