<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Security\OAuth;

use App\Entity\OAuth\Client;
use App\Entity\User;
use FOS\OAuthServerBundle\Storage\OAuthStorage as FOSOAuthStorage;
use OAuth2\Model\IOAuth2Client;

class TokenStorage extends FOSOAuthStorage
{
    /**
     * {@inheritdoc}
     */
    public function createAccessToken($tokenString, IOAuth2Client $client, $data, $expires, $scope = null)
    {
        if ($client instanceof Client && $client->getUser() instanceof User) {
            $data = $client->getUser();
        }

        return parent::createAccessToken($tokenString, $client, $data, $expires, $scope);
    }
}
