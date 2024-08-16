<?php

namespace App\Repositories\Candidate;

interface CandidateInterface
{
    public function datatable();

    public function delete($id);
}