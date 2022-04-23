<?php

namespace ContainerPcPdJaV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSurveyServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Survey\SurveyService' shared autowired service.
     *
     * @return \App\Service\Survey\SurveyService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Survey'.\DIRECTORY_SEPARATOR.'SurveyServiceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Survey'.\DIRECTORY_SEPARATOR.'SurveyService.php';

        return $container->privates['App\\Service\\Survey\\SurveyService'] = new \App\Service\Survey\SurveyService();
    }
}
