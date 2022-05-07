<?php
class SurveyPrinter
{
    public static function printData(Survey $survey): void
    {
        echo "First name: " . $survey->getFirstName() . PHP_EOL;
        echo "Last name: " . $survey->getLastName() . PHP_EOL;
        echo "Email: " . $survey->getEmail() . PHP_EOL;
        echo "Age: " . $survey->getAge() . PHP_EOL;
    }
}