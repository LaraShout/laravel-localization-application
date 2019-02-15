@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('app.title') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container text-center">
                        <h1>@lang("Hi there!")</h1>
                        <div class="col-md-offset-2">
                            <p>{{ __("How are you doing?")}}</p>
                            <p>{{ __("This is basic example of how you use Laravel Localizations")}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
