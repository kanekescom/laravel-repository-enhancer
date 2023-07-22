<?php

namespace Kanekescom\RepositoryEnhancer;

use Kanekescom\RepositoryEnhancer\Traits\RepositoryTrait;
use Prettus\Repository\Eloquent\BaseRepository as PrettusBaseRepository;

abstract class BaseRepository extends PrettusBaseRepository
{
    use RepositoryTrait;
}
