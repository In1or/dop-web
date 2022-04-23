<?php

namespace App\Module\Survey;

class SurveyLoader
{
    public function loadSurvey(): Survey
    {
        $firstName = self::getGetParam("first_name");
        $lastName = self::getGetParam("last_name");
        $email = self::getGetParam("email");
        $age = self::getGetParam("age");
        return new Survey($email, $firstName, $lastName, $age);
    }

    private function getGetParam(string $name): ?string
    {
        return $_GET[$name] ?? null;
    }
}