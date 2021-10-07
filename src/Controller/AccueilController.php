<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    /**
     * @route("/accueil", name="accueil")
     */

    public function afficherAccueil()
    {
        return $this->render('accueil.html.twig');
    }
}
