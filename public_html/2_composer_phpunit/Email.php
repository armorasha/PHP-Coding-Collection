<?php declare(strict_types=1);

// require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

namespace Coding_Exercises;
// namespace is for autoloading classes in project using composer.json autoload

final class Email
{
    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}