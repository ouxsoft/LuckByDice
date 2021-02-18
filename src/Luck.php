<?php
/*
 * This file is part of the LuckByDice package.
 *
 * (c) 2020-2021 Ouxsoft <contact@ouxsoft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ouxsoft\LuckByDice;

class Luck
{
    private $luck;

    public function get() : int
    {
        return $this->luck;
    }

    public function set(int $luck) : void
    {
        $this->luck = $luck;
    }
}
