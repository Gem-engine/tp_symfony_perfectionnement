<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CGUController extends AbstractController
{

    /**
     * @route("/cgu", name="cgu")
     */

    public function afficherAccueil()
    {
        return $this->render('cgu.html.twig');
    }
}
