<?php

namespace App\Repositories\Careers;

interface CareersInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);

    public function CreateCandidate($data);
}