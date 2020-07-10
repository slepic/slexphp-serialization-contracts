<?php declare(strict_types=1);

namespace Slexphp\Tests\Serialization\Contracts\Encoder;

use PHPUnit\Framework\TestCase;
use Slexphp\Serialization\Contracts\Encoder\EncodeException;
use Slexphp\Serialization\Contracts\Encoder\EncodeExceptionInterface;

final class EncodeExceptionTest extends TestCase
{
    public function testImplements(): void
    {
        $exception = new EncodeException();
        self::assertInstanceOf(EncodeExceptionInterface::class, $exception);
    }
}
