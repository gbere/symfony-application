<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Action;

use App\Responder\SearchResponder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SearchAction
{
    /**
     * @Route("/search", name="search")
     */
    public function __invoke(Request $request, SearchResponder $responder): Response
    {
        $query = $request->query->get('query');

        $results = []; // Get results from domain

        return $responder($query, $results);
    }
}
