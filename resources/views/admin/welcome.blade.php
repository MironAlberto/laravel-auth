@extends('layouts.app')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card bg-dark">
                <div class="card-body text-center">
                    <h1 class="text-white mb-5">
                        Welcome to the site!
                    </h1>
                    <h3 class="text-white">
                        {{-- You have logged in as <span class="text-danger">
                            {{ $welcomeUser }}
                        </span> --}}
                        You now have access to your <span class="text-danger">Projects</span>!
                    </h3>
                    {{-- @if ($welcomeUser != null)
                        <h3 class="text-white">
                            You have logged in as <span class="text-danger">
                                {{ $welcomeUser }}
                            </span>
                        </h3>
                    @endif --}}
                    {{-- <p>
                        Welcome {{ $welcomeUser }}
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection