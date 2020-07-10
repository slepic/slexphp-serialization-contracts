<?php declare(strict_types=1);

namespace Encoder;

use PHPUnit\Framework\TestCase;
use Slexphp\Serialization\Contracts\Encoder\EncoderInterface;

final class EncoderInterfaceTest extends TestCase
{
    public function testCanImplement(): void
    {
        $encoder = new class () implements EncoderInterface
        {
            public function encode($value): string
            {
                return '';
            }
        };

        self::assertInstanceOf(EncoderInterface::class, $encoder);
    }
}
