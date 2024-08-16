<?php

namespace App\Repositories\Blog;

interface BlogInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}