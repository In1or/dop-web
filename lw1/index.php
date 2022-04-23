<?php
header('Content-Type: text/plain');
require_once("./src/common.inc.php");

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage("./data/");
$survey = $requestSurveyLoader->load();

echo "Данные пользователя:", PHP_EOL, PHP_EOL;
SurveyPrinter::printData($survey);
$surveyFileStorage->saveToFile($survey);

echo PHP_EOL, PHP_EOL;
$surveyFileStorage->loadFromFile($survey->getEmail());
echo "Данные загруженные из файла:", PHP_EOL, PHP_EOL;
SurveyPrinter::printData($survey);