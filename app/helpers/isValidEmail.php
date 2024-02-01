<?php

namespace app\helpers;

class isValidEmail
{
    public static function isValid($email):string{
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}