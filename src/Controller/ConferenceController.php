<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */

    public function index()
    {
        // $htmlResponseTest = "<html><body><img src=\"/images/under-construction.gif\" /></body></html>";

        return new Response(
            '<html><body><img src="images/under-construction.gif" /></body></html>'
        );
    }
}
