<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Requests\CreateFeedbackRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /*
     * Get all Feedback Items and return as json
     * MySQL QUERY
     *  SELECT *
     *  FROM feedbacks;
     */
    public function index()
    {
        $feedbacks = Feedback::all();

        return $feedbacks;
    }
    /*
     * Get single Feedback Item
     * SELECT *
     * FROM feedbacks
     * WHERE id = ?
     */
    public function show($id)
    {
        return Feedback::findOrFail($id);
    }

    /*
     * Save Feedback Item
     * Save SQL:
     * Insert into `feedbacks` (`name`, `email`, `comment`) values (?, ?, ?, ?)
     */
    public function store(CreateFeedbackRequest $request)
    {
        return Feedback::create($request->all());
    }
}
