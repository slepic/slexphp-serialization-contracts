<?php declare(strict_types=1);

namespace Slexphp\Tests\Serialization\Contracts\Decoder;

use PHPUnit\Framework\TestCase;
use Slexphp\Serialization\Contracts\Decoder\DecodeException;
use Slexphp\Serialization\Contracts\Decoder\DecodeExceptionInterface;

final class DecodeExceptionTest extends TestCase
{
    public function testImplements(): void
    {
        $exception = new DecodeException();
        self::assertInstanceOf(DecodeExceptionInterface::class, $exception);
    }
}
