<?php

namespace Kanekescom\RepositoryPill;

use Kanekescom\RepositoryPill\Traits\RepositoryTrait;
use Prettus\Repository\Eloquent\BaseRepository as PrettusBaseRepository;

abstract class BaseRepository extends PrettusBaseRepository
{
    use RepositoryTrait;
}
