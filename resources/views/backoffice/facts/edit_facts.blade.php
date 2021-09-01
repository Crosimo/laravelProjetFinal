@extends('pages/welcomebackoffice')


@section('backoffice')

<form action="{{route('update_facts', $data->id)}}" method="post" class="container d-flex flex-column">
    @csrf

    description: <input type="text" value="{{$data->description}}" name="description">
    qualification: <input type="text" value="{{$data->qualification}}" name="qualification">
    description2: <input type="text" value="{{$data->description2}}" name="description2">
    birthday: <input type="text" value="{{$data->birthday}}" name="birthday">
    siteweb: <input type="text" value="{{$data->siteweb}}" name="siteweb">
    phone: <input type="text" value="{{$data->phone}}" name="phone">
    city: <input type="text" value="{{$data->city}}" name="city">
    age: <input type="text" value="{{$data->age}}" name="age">
    degree: <input type="text" value="{{$data->degree}}" name="degree">
    email: <input type="text" value="{{$data->email}}" name="email">
    status: <input type="text" value="{{$data->status}}" name="status">
    description3: <input type="text" value="{{$data->description3}}" name="description3">


    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>

@endsection
