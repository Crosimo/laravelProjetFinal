@extends('pages/welcomebackoffice')


@section('backoffice')

<form action="{{route('update_portfolio', $data->id)}}" method="post" class="container d-flex flex-column">
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
    description: <input type="text" value="{{$data->description}}" name="description">
    photo1: <input type="text" value="{{$data->photo1}}" name="photo1">
    photo2: <input type="text" value="{{$data->photo2}}" name="photo2">
    photo3: <input type="text" value="{{$data->photo3}}" name="photo3">
    photo4: <input type="text" value="{{$data->photo4}}" name="photo4">
    photo5: <input type="text" value="{{$data->photo5}}" name="photo5">
    photo6: <input type="text" value="{{$data->photo6}}" name="photo6">
    photo7: <input type="text" value="{{$data->photo7}}" name="photo7">
    photo8: <input type="text" value="{{$data->photo8}}" name="photo8">
    photo9: <input type="text" value="{{$data->photo9}}" name="photo9">



    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>

@endsection
