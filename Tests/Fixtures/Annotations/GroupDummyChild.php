<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Tests\Fixtures\Annotations;

class GroupDummyChild extends GroupDummy
{
    private $baz;

    public function getBaz(): mixed
    {
        return $this->baz;
    }

    public function setBaz(mixed $baz)
    {
        $this->baz = $baz;
    }
}
