@extends('pages/welcomebackoffice')


@section('backoffice')

<form action="{{route('update_contact', $data->id)}}" method="post" class="container d-flex flex-column">
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
    location: <input type="text" value="{{$data->location}}" name="location">
    email: <input type="text" value="{{$data->email}}" name="email">
    phone: <input type="text" value="{{$data->phone}}" name="phone">
    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>

@endsection
