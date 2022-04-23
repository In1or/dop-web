<?php
class SurveyFileStorage
{
    private string $pathToDirectory;

    public function __construct(string $pathToDirectory)
    {
        $this->pathToDirectory = $pathToDirectory;
    }

	public function saveToFile(Survey $survey): void
	{
        $pathFile = $this->createPathFile($survey->getEmail());
		if ($survey->getEmail() || $survey->getEmail() === '')
		{
			if (file_exists($pathFile))
			{
				$arrayData = file($pathFile);
                $surveyInFile = $this->loadFromFile($survey->getEmail());
				if ($survey->getFirstName() !== $surveyInFile->getFirstName())
				{
					$arrayData[0] = "First name: " . $survey->getFirstName() . PHP_EOL;
				}
				if ($survey->getLastName() !== $surveyInFile->getLastName())
				{
					$arrayData[1] = "Last name: " . $survey->getLastName() . PHP_EOL;
				}
				if ($survey->getAge() !== $surveyInFile->getAge())
				{
					$arrayData[3] = "Age: " . $survey->getAge();
				}
				file_put_contents($pathFile, $arrayData);
			}
			else
			{
				$fp = fopen($pathFile, "w");
				fwrite($fp, "First name: " . $survey->getFirstName() . PHP_EOL);
				fwrite($fp, "Last name: " . $survey->getLastName() . PHP_EOL);
				fwrite($fp, "Email: " . $survey->getEmail() . PHP_EOL);
				fwrite($fp, "Age: " . $survey->getAge() . PHP_EOL);
				fclose($fp);
			}
		}
		else
		{
            echo "Unable to save to this email" . PHP_EOL . "Email is empty";
			return;
		}
	}

	public function loadFromFile($email): Survey
	{
        $pathFile = $this->createPathFile($email);

		if (file_exists($pathFile) and ($email !== null || $email !== '') )
		{
			$arrayData = file($pathFile);
			$array = [];
			foreach ($arrayData as $item) 
			{
				$temporaryString = explode(": ", $item);
				$array[$temporaryString[0]] = $temporaryString[1] ?? null;
			}
			return new Survey($array["Email"], $array["First name"], $array["Last name"], $array["Age"]);
		}
		else
		{
			return new Survey("none", null, null, null);
		}
	}

    private function createPathFile(string $email): string
    {
        return $this->pathToDirectory . $email . ".txt";
    }
}