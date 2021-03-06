<?php

declare(strict_types=1);

namespace Regis\Application\Model\Github;

class Repository
{
    private $cloneUrl;
    private $owner;
    private $name;

    public function __construct(string $owner, string $name, string $cloneUrl)
    {
        $this->cloneUrl = $cloneUrl;
        $this->owner = $owner;
        $this->name = $name;
    }

    public function getCloneUrl(): string
    {
        return $this->cloneUrl;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return sprintf('%s/%s', $this->owner, $this->name);
    }
}