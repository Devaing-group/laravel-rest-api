<?php

namespace Devaing\RestAPI\Tests\Controllers;

use Devaing\RestAPI\ApiController;
use Devaing\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}