<?php

namespace Devaing\RestAPI\Tests\Controllers;

use Devaing\RestAPI\ApiController;
use Devaing\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}