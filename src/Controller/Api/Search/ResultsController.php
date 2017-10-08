<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller\Api\Search;

use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ResultsController
{
    /**
     * @Route("/api/search", name="api_search")
     *
     * @ApiDoc(
     *   section="Search",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when unauthorized"
     *   }
     * )
     *
     * @QueryParam(name="query")
     *
     * @View(statusCode=200)
     */
    public function __invoke(Request $request): Response
    {
        $query = $request->query->get('query');

        return new JsonResponse([
            'query' => $query,
            'results' => [],
        ]);
    }
}
