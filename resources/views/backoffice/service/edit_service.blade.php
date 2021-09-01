@extends('pages/welcomebackoffice')


@section('backoffice')
<form action="{{route('update_service', $data->id)}}" method="post" class="container d-flex flex-column">
    @csrf

    description: <input type="text" value="{{$data->description}}" name="description">
    subtitle1: <input type="text" value="{{$data->subtitle1}}" name="subtitle1">
    subtitle2: <input type="text" value="{{$data->subtitle2}}" name="subtitle2">
    sub2description: <input type="text" value="{{$data->sub2description}}" name="sub2description">
    subtitle3: <input type="text" value="{{$data->subtitle3}}" name="subtitle3">
    sub3description: <input type="text" value="{{$data->sub3description}}" name="sub3description">
    subtitle4: <input type="text" value="{{$data->subtitle4}}" name="subtitle4">
    sub4description: <input type="text" value="{{$data->sub4description}}" name="sub4description">
    subtitle5: <input type="text" value="{{$data->subtitle5}}" name="subtitle5">
    sub5description: <input type="text" value="{{$data->sub5description}}" name="sub5description">
    subtitle6: <input type="text" value="{{$data->subtitle6}}" name="subtitle6">
    sub6description: <input type="text" value="{{$data->sub6description}}" name="sub6description">
    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>
@endsection
