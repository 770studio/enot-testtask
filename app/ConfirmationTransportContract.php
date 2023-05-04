<?php

namespace App;

interface ConfirmationTransportContract
{
    public function sendCode() : void;

}