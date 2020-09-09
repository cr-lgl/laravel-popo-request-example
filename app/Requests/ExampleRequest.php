<?php

declare(strict_types=1);

namespace App\Requests;

/**
 * Class ExampleRequest
 */
class ExampleRequest
{
    /**
     * @var int
     */
    private int $num;

    /**
     * @var string
     */
    private string $text;

    /**
     * ExampleRequest constructor.
     * @param int $num
     * @param string $text
     */
    public function __construct(int $num, string $text)
    {
        $this->num = $num;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
