<?php

namespace Regis\Application\Repository;

use Regis\Application\Model;

interface Repositories
{
    public function find(string $identifier): Model\Repository;
}
