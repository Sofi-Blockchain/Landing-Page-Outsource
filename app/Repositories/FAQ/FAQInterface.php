<?php

namespace App\Repositories\FAQ;

interface FAQInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}