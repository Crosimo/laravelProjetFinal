@extends('pages/welcomebackoffice')


@section('backoffice')
<form action="{{route('update_skills', $data->id)}}" method="post" class="container d-flex flex-column">
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
    skill1: <input type="text" value="{{$data->skill1}}" name="skill1">
    pourcent_skill1: <input type="text" value="{{$data->pourcent_skill1}}" name="pourcent_skill1">
    skill2: <input type="text" value="{{$data->skill2}}" name="skill2">
    pourcent_skill2: <input type="text" value="{{$data->pourcent_skill2}}" name="pourcent_skill2">
    skill3: <input type="text" value="{{$data->skill3}}" name="skill3">
    pourcent_skill3: <input type="text" value="{{$data->pourcent_skill3}}" name="pourcent_skill3">
    skill4: <input type="text" value="{{$data->skill4}}" name="skill4">
    pourcent_skill4: <input type="text" value="{{$data->pourcent_skill4}}" name="pourcent_skill4">
    skill5: <input type="text" value="{{$data->skill5}}" name="skill5">
    pourcent_skill5: <input type="text" value="{{$data->pourcent_skill5}}" name="pourcent_skill5">
    skill6: <input type="text" value="{{$data->skill6}}" name="skill6">
    pourcent_skill6: <input type="text" value="{{$data->pourcent_skill6}}" name="pourcent_skill6">
    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>
@endsection
