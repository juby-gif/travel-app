@extends('layout')

@section('title', 'Book')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Book</h1>
    </div>

    @if (count($books) > 0)

    @foreach ($books as $book)
    <div>
        <h1>{{ $book['name'] }}</h1>
        <ul>
            <li>
                <a href="{{ route('book.show', ['book' => $book['id']]) }}">{{ $book['name'] }}</a>
            </li>
        </ul>
    </div>
    @endforeach

    @else
    <div>
        <h1>There are no bookings made</h1>
    </div>
    @endif

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <p>{{ $userInput }}</p>
    </div>
</div>
@endsection
