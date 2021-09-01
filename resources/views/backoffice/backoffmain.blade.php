@extends('pages/welcomebackoffice')


@section('backoffice')


<div class="container ">
<div class="row">
    <div class="col-4 mb-2 mt-2">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">About</h5>
          <h6 class="card-subtitle  mt-2 text-muted">You are insane</h6>
          <p class="card-text">{{$about[0]->description}}</p>
          <a href="#" class="card-link"><a href="{{route('edit_about', $about[0]->id)}}">Edit</a></a>
        </div>
        </div>
    </div>

    <div class="col-4 mb-2 mt-2">
        <div class="card " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Contact</h5>
          <h6 class="card-subtitle mb-2 text-muted">You are insane</h6>
          <p class="card-text">{{$contact[0]->description}}.</p>
          <a href="#" class="card-link"><a href="{{route('edit_contact', $contact[0]->id)}}">Edit</a></a>
        </div>
        </div>
    </div>


    <div class="col-4 mb-2 mt-2">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Portfolio</h5>
          <h6 class="card-subtitle mb-2 text-muted">You are insane</h6>
          <p class="card-text">{{$portfolio[0]->description}}</p>
          <a href="#" class="card-link"><a href="{{route('edit_portfolio', $portfolio[0]->id)}}">Edit</a></a>
          <a href="#" class="card-link"><a href="{{route('create_portfolio')}}">Create</a></a>
        </div>
        </div>
    </div>


    <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Service</h5>
          <h6 class="card-subtitle mb-2 text-muted">You are insane</h6>
          <p class="card-text">{{$service[0]->description}}</p>
          <a href="#" class="card-link"><a href="{{route('edit_service', $service[0]->id)}}">Edit</a></a>
        </div>
        </div>
    </div>


    <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Skill</h5>
          <h6 class="card-subtitle mb-2 text-muted">You are insane</h6>
          <p class="card-text">{{$skill[0]->description}}</p>
          <a href="#" class="card-link"><a href="{{route('edit_skill', $skill[0]->id)}}">Edit</a></a>
        </div>
        </div>
    </div>


    {{-- <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link"><a href="{{route('edit_about', $about[0]->id)}}">Edit</a></a>
        </div>
        </div>
    </div> --}}

</div>
</div>
@endsection
