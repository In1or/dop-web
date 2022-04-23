<?php

namespace App\Service\Survey;

interface SurveyServiceInterface
{
    public function saveSurvey(): array;
    public function getSurvey(): array;
}