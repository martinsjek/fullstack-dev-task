<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContestSubmissionRequest;
use App\Models\ContestSubmission;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class ContestSubmissionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ContestSubmissionRequest $request
     * @return JsonResponse
     */
    public function store(ContestSubmissionRequest $request): JsonResponse
    {
        $input = $request->all();
        $returnMessage = 'Esi veiksmīgi pieteicies konkursam!';
        $statusCode = 200;
        try {
            ContestSubmission::create($input);
        } catch (QueryException $exception) {
            $returnMessage = 'Kaut kas nogāja greizi, mēģini vēlreiz vēlāk';
            $statusCode = 500;
        }

        return response()->json([
            'message' => $returnMessage
        ], $statusCode);
    }
}
