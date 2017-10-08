<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final class HomeController
{
    /**
     * @Route("/", name="home")
     */
    public function __invoke(Environment $twig): Response
    {
        return new Response($twig->render('home.html.twig'));
    }
}
