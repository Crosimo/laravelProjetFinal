@extends('pages/welcomebackoffice')


@section('backoffice')

<form action="{{route('update_about', $data->id)}}" method="post" class="container d-flex flex-column">
    @csrf

    description: <input type="text" value="{{$data->description}}" name="description">
    @error('description')
    <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    qualification: <input type="text" value="{{$data->qualification}}" name="qualification">
    @error('description')
    <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    description2: <input type="text" value="{{$data->description2}}" name="description2">
    @error('description2')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    birthday: <input type="text" value="{{$data->birthday}}" name="birthday">
    @error('birthday')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    siteweb: <input type="text" value="{{$data->siteweb}}" name="siteweb">
    @error('siteweb')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    phone: <input type="text" value="{{$data->phone}}" name="phone">
    @error('phone')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    city: <input type="text" value="{{$data->city}}" name="city">
    @error('city')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    age: <input type="text" value="{{$data->age}}" name="age">
    @error('age')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    degree: <input type="text" value="{{$data->degree}}" name="degree">
    @error('degree')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    email: <input type="text" value="{{$data->email}}" name="email">
    @error('email')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    status: <input type="text" value="{{$data->status}}" name="status">
    @error('status')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror
    description3: <input type="text" value="{{$data->description3}}" name="description3">
    @error('description3')
     <div class="alert alert-danger">
        <p>{{$message}}</p>
    </div>
    @enderror


    @method("PUT")
    <button class="btn btn-primary mt-2 w-25" type="submit">Submit</button>
    </form>

@endsection
