<?php

namespace App\Controller;

use App\Service\Survey\SurveyServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SurveyController extends AbstractController
{
    public function saveSurvey(SurveyServiceInterface $array): Response
    {
        return $this->render('saveSurvey.html.twig', ['data'=>$array->saveSurvey()]);
    }

    public function viewSurvey(SurveyServiceInterface $array): Response
    {
        return $this->render('getSurvey.html.twig', ['data'=>$array->getSurvey()]);
    }
}