<?php

namespace App\Service\Survey;

use App\Module\Survey\SurveyFileStorage;
use App\Module\Survey\SurveyLoader;

class SurveyService implements SurveyServiceInterface
{
    private SurveyLoader $loader;
    private SurveyFileStorage $fileStorage;

    public function __construct(SurveyLoader $loader, SurveyFileStorage $fileStorage)
    {
        $loader = new SurveyLoader();
        $fileStorage = new SurveyFileStorage("./data/");
    }

    public function saveSurvey(): array // :survey
    {
        $survey = $this->loader->loadSurvey();
        $this->fileStorage->saveSurveyToFile($survey);
        return [
            'first_name' => $survey->getFirstName(),
            'last_name' => $survey->getLastName(),
            'email' => $survey->getEmail(),
            'age' => $survey->getAge(),
        ];
    }

    public function getSurvey(): array // :survey
    {
        $survey = $this->loader->loadSurvey();
        $surveyInFile = $this->fileStorage->getSurveyFromFile($survey->getEmail());
        return [
            'first_name' => $surveyInFile->getFirstName(),
            'last_name' => $surveyInFile->getLastName(),
            'email' => $survey->getEmail(),
            'age' => $surveyInFile->getAge(),
        ];
    }
}