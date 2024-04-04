@extends('main')

@section('content')
    
    <div class="container">
        <div class="mx-auto" style="padding: 100px 0 100px 0">
            <h1 class="text-center mb-4" style="font-size: 54px">Sports for All!<br>
                Join Your Favorite Event</h1>
            <p class="text-center text-secondary">Thousands of Sports Events Await You! Get Complete and Latest Information about <br> Sports Events Around You. Register and Join Easily!</p>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-3">

            {{-- $events = Events::limit(6)->get();
            @foreach ($events as $event) --}}
            
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    @include('components.card')
                </div>
            </div>
            

            {{-- @endforeach --}}

        </div>
    </div>

@endsection