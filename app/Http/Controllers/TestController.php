<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::with(['categoryQuestions' => function ($query) {
                $query->inRandomOrder()
                    ->with(['questionOptions' => function ($query) {
                        $query->inRandomOrder();
                    }]);
            }])
            ->whereHas('categoryQuestions')
            ->get();

        return view('client.test', compact('categories'));
    }

    public function store(StoreTestRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        echo $options;

        die();
        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points1'),
            'total_points' => $options->sum('points2'),
            'total_points' => $options->sum('points3'),
            'total_points' => $options->sum('points4'),
            'total_points' => $options->sum('points5'),
        ]);

        // dd($options);
        
        $questions = $options->mapWithKeys(function ($option) {
            // if($option)
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points1' => $option->points1,
                        'points2' => $option->points2,
                        'points3' => $option->points3,
                        'points4' => $option->points4,
                        'points5' => $option->points5,
                    ]
                ];
            })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }
}