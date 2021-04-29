<?php

namespace App\Repositories\Posts;

interface PostRepositoryInterface
{
    public function getList();

    public function store($_data);

    public function show($_id);

    public function update($_id, $_data);

    public function delete($_id);
}
