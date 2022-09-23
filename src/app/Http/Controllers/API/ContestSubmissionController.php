<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContestSubmissionRequest;
use App\Models\ContestSubmission;

class ContestSubmissionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ContestSubmissionRequest $request
     * @return string
     */
    public function store(ContestSubmissionRequest $request): string
    {
        $input = $request->all();
        ContestSubmission::create($input);
        return 'Esi veiksmīgi pieteicies konkursam!';
    }
}
