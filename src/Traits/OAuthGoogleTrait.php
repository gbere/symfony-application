<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Traits;

trait OAuthGoogleTrait
{
    /**
     * @ORM\Column(type="string", nullable=true, unique=true)
     */
    protected $googleId;

    /**
     * @return string
     */
    public function getGoogleId(): string
    {
        return $this->googleId;
    }

    /**
     * @param string $googleId
     *
     * @return self
     */
    public function setGoogleId(string $googleId): self
    {
        $this->googleId = $googleId;

        return $this;
    }
}
