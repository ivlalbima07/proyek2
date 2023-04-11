@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results of your test</div>

                <div class="card-body">
                    <p class="mt-5">Total points: {{ $result->total_points }} points</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>Points1</th>
                                <th>Points2</th>
                                <th>Points3</th>
                                <th>Points4</th>
                                <th>Points5</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                                <tr>
                                    <td>{{ $question->question_text }}</td>
                                    <td>{{ $question->pivot->points1 }}</td>
                                    <td>{{ $question->pivot->points2 }}</td>
                                    <td>{{ $question->pivot->points3 }}</td>
                                    <td>{{ $question->pivot->points4 }}</td>
                                    <td>{{ $question->pivot->points5}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection