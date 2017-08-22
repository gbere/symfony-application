<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('superadmin');
        $user->setPlainPassword('superadmin');
        $user->setEmail('info@endroid.nl');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);

        $manager->persist($user);
        $manager->flush();
    }
}
