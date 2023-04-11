@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create option') }}</h1>
                    <a href="{{ route('admin.options.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.options.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question">{{ __('question') }}</label>
                        <select class="form-control" name="question_id" id="question">
                            @foreach($questions as $id => $question)
                                <option value="{{ $id }}">{{ $question }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="option_text1">{{ __('option text1') }}</label>
                        <input type="text" class="form-control" id="option_text1" placeholder="{{ __('option text 1') }}" name="option_text1" value="{{ old('option_text1') }}" />
                    </div>
                    <div class="form-group">
                        <label for="option_text2">{{ __('option text2') }}</label>
                        <input type="text" class="form-control" id="option_text2" placeholder="{{ __('option text 2') }}" name="option_text2" value="{{ old('option_text2') }}" />
                    </div>
                    <div class="form-group">
                        <label for="option_text3">{{ __('option text3') }}</label>
                        <input type="text" class="form-control" id="option_text3" placeholder="{{ __('option text 3') }}" name="option_text3" value="{{ old('option_text3') }}" />
                    </div>
                    <div class="form-group">
                        <label for="option_text4">{{ __('option text4') }}</label>
                        <input type="text" class="form-control" id="option_text4" placeholder="{{ __('option text 4') }}" name="option_text4" value="{{ old('option_text4') }}" />
                    </div>
                    <div class="form-group">
                        <label for="option_text5">{{ __('option text5') }}</label>
                        <input type="text" class="form-control" id="option_text5" placeholder="{{ __('option text 5') }}" name="option_text5" value="{{ old('option_text5') }}" />
                    </div>
                    <div class="form-group">
                        <label for="points">{{ __('points1') }}</label>
                        <input type="number" class="form-control" id="points1" placeholder="{{ __('option text 1') }}" name="points1" value="{{ old('points1') }}" />
                    </div>
                    <div class="form-group">
                        <label for="points">{{ __('points2') }}</label>
                        <input type="number" class="form-control" id="points2" placeholder="{{ __('option text 2') }}" name="points2" value="{{ old('points2') }}" />
                    </div>
                    <div class="form-group">
                        <label for="points">{{ __('points3') }}</label>
                        <input type="number" class="form-control" id="points3" placeholder="{{ __('option text 3') }}" name="points3" value="{{ old('points3') }}" />
                    </div>
                    <div class="form-group">
                        <label for="points">{{ __('points4') }}</label>
                        <input type="number" class="form-control" id="points4" placeholder="{{ __('option text 4') }}" name="points4" value="{{ old('points4') }}" />
                    </div>
                    <div class="form-group">
                        <label for="points">{{ __('points5') }}</label>
                        <input type="number" class="form-control" id="points5" placeholder="{{ __('option text 5') }}" name="points5" value="{{ old('points5') }}" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection