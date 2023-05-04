<?php

namespace App;

use App;

class UserSettingGuardController
{
    public function __construct( User $user, ConfirmationTransportContract $transport, CodeStorageContract $storage)
    {
    }

    public function sendVerificationCode()
    {

    }

    public function checkVerificationCode()
    {

    }
}