@extends('layouts.app')


@section('content')


<h1 class="mb-10 text-2xl">create a review </h1>

<form method="POST" action="{{route('books.reviews.store',$book)}}"   >



    @csrf
<div>
    <label for="review">review</label>
    <textarea name="review" id="review" required class="input mb-4"></textarea>
</div>

<div>
    <label for="rating">rating</label>
    <select id="rating" name="rating" class="input mb-4" required>>
    </div>
<option>select rating </option>

@for($i=0;$i<=5;$i++)

<option value ={{$i}} > {{$i}}</option>

@endfor


    </select>
    <button type="submit" class="btn">Add Review</button>

</form>

@endsection
