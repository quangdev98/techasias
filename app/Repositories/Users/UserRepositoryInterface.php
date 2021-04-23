<?php

namespace App\Repositories\Users;

interface UserRepositoryInterface
{
    public function getList();

    public function store($_data);
}
