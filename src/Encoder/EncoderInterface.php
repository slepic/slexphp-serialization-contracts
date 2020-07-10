<?php declare(strict_types=1);

namespace Slexphp\Serialization\Contracts\Encoder;

/**
 * @template T of string|bool|int|float|array|object|null
 */
interface EncoderInterface
{
    /**
     * @param string|bool|int|float|array|object|null $value
     * @return string
     * @throws EncodeExceptionInterface
     *
     * @template-param T $value
     */
    public function encode($value): string;
}
