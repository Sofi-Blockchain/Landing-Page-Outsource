<?php

namespace App\Repositories\User;

interface UserInterface
{
    public function loginVerify($data);

    public function datatable();

    public function storeProcess($data);

    public function create($data);

    public function update($data);

    public function delete($id);
}
