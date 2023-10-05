<?php

namespace App\Annotations;

use Exception;

/**
 * @Annotation
 */
class AuthorizationRequirements
{
    /** @var string|null */
    private $value = null;

    /** @var string|null */
    private $permission = null;

    /** @var bool */
    private $open = false;

    public function __construct(array $values)
    {
        $this->value = $values['value'] ?? null;
        $this->permission = $values['permission'] ?? null;
        $this->open = $values['open'] ?? false;
        if (!$this->isValid()) {
            throw new Exception(sprintf("Invalid %s annotation", self::class));
        }
    }

    public function getPermission(): ?string
    {
        return $this->value ?? $this->permission;
    }

    private function isValid(): bool
    {
        if ($this->value !== null && $this->permission !== null) {
            return false;
        }
        if ($this->open) {
            return ($this->getPermission() === null) ? true : false;
        } else {
            return ($this->getPermission() !== null) ? true : false;
        }
    }
}
