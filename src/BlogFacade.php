<?php

namespace Fibdesign\Blog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fibdesign\Blog\Skeleton\SkeletonClass
 */
class BlogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blog';
    }
}
