@extends('layout')

@section('title', 'About')

@section('content')
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">
    @if (session('status'))
    <div class="content">
        <h3>Thank you for you booking!</h3>
        <p>{{ session('status') }}</p>
    </div>
    @else
    <h1 class="heading-title">book your trip!</h1>
    <form action="{{ route('book.store') }}" method="post" class="book-form">
        @csrf
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" id="name" placeholder="enter your name" value="{{ old('name') }}" name="name">
                @error('name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" id="email" placeholder="enter your email" value="{{ old('email') }}"  name="email">
                @error('email')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" id="phone" placeholder="enter your number" value="{{ old('phone') }}" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" id="address" placeholder="enter your address" value="{{ old('address') }}" name="address">
                @error('address')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" id="location" placeholder="place you want to visit" value="{{ old('location') }}" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" id="guests" placeholder="number of guests" value="{{ old('guests') }}" name="guests">
                @error('guests')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" id="arrivals" value="{{ old('arrivals') }}" name="arrivals">
                @error('arrivals')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" id="leaving" value="{{ old('leaving') }}" name="leaving">
                @error('leaving')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">

    </form>
    @endif

</section>

<!-- booking section ends -->

@endsection
