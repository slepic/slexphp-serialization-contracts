<?php declare(strict_types=1);

namespace Decoder;

use PHPUnit\Framework\TestCase;
use Slexphp\Serialization\Contracts\Decoder\DecoderInterface;

final class DecoderInterfaceTest extends TestCase
{
    public function testCanImplement(): void
    {
        $decoder = new class () implements DecoderInterface
        {
            public function decode(string $value)
            {
                return null;
            }
        };

        self::assertInstanceOf(DecoderInterface::class, $decoder);
    }
}
