<?php

namespace App\Service\Survey;

interface SurveyServiceInterface
{
    public function saveSurvey(): array; // :survey
    public function getSurvey(): array; // :survey
}