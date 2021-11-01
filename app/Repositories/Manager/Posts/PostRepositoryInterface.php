<?php

namespace App\Repositories\Manager\Posts;

interface PostRepositoryInterface
{
    public function getList($_data, $_per_page);

    public function store($_data);

    public function show($_id);

    public function update($_id, $_dataUpdate);

    public function delete($_id);

    public function search($_query);

    public function detail($_id);
}
