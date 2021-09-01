<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Per Page Pagination
    |--------------------------------------------------------------------------
    |
    | Number of displayed Articles on blog per page
    |
    */

    'perPage' => env('FIBDESIGN_BLOG_ARTICLE_PER_PAGE', 15),

    'popularLimit' => env('FIBDESIGN_BLOG_ARTICLES_POPULAR_NUM', 5),
];
