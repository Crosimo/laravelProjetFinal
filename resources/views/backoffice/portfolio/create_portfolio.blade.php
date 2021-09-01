@extends('pages/welcomebackoffice')


@section('backoffice')

<form action="{{route('store_portfolio')}}" method="post" class="container d-flex flex-column">
    @csrf
    @if ($errors->any())

    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
         @endforeach
        </ul>
    </div>
    @endif

    photo1: <input type="text" value="" name="photo1">
    photo2: <input type="text" value="" name="photo2">
    photo3: <input type="text" value="" name="photo3">
    photo4: <input type="text" value="" name="photo4">
    photo5: <input type="text" value="" name="photo5">
    photo6: <input type="text" value="" name="photo6">
    photo7: <input type="text" value="" name="photo7">
    photo8: <input type="text" value="" name="photo8">
    photo9: <input type="text" value="" name="photo9">
    description: <input type="text" value="" name="description">

    <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection
