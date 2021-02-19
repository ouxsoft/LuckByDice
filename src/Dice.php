<?php
/*
 * This file is part of the LuckByDice package.
 *
 * (c) 2020-2021 Ouxsoft <contact@ouxsoft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ouxsoft\LuckByDice;

use OutOfRangeException;

/**
 * Class Dice
 * @package Ouxsoft\LuckByDice
 */
class Dice
{
    private $sides;

    /**
     * Dice constructor.
     * @param $sides
     */
    public function __construct($sides)
    {
        if ($sides <= 1) {
            throw new OutOfRangeException('Dice must have at least 2 sides.');
        }

        $this->sides = $sides;
    }

    /**
     * @return int
     */
    public function roll() : int
    {
        return mt_rand(1, $this->sides);
    }
}