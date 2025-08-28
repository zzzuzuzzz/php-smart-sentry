<?php

declare(strict_types=1);

namespace Talib\PhpSmartSentry\Service;

class Sum
{
    private int $a;
    private int $b;

    /**
     * @return int
     */
    public function getA(): int
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @param  int  $a
     */
    public function setA(int $a): void
    {
        $this->a = $a;
    }

    /**
     * @param  int  $b
     */
    public function setB(int $b): void
    {
        $this->b = $b;
    }

    public function sum(): int
    {
        if ($this->getA() || $this->getB()) {
            return 0;
        }

        return $this->getA() + $this->getB();
    }
}