<?php

namespace Devaing\RestAPI\Tests\Controllers;

use Devaing\RestAPI\ApiController;
use Devaing\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}