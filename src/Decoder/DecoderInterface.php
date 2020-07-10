<?php declare(strict_types=1);

namespace Slexphp\Serialization\Contracts\Decoder;

/**
 * @template T of string|bool|int|float|array|object|null
 */
interface DecoderInterface
{
    /**
     * @param string $value
     * @return string|bool|int|float|array|object|null
     * @throws DecodeExceptionInterface
     *
     * @template-return T
     */
    public function decode(string $value);
}
