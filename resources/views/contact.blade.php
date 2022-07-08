@extends('layouts.main')

@section('title', 'Dados de ' . $user->name)

@section('content')
        @if($user == $userauth)
            <h1>Meus dados</h1>
        @else
            <h1>Dados de {{ $user->name }}</h1>
        @endif
        <p> <strong>Telefone:</strong> {{ $user->celphone }} </p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <h3>Eventos que possui</h3>
        @foreach($user->events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->startdate)) }}</p>
                    <h5 class="card-title">{{ $event->title }} </h5>
                    <p>{{ $event->description }}</p>
                    @if(count($event->users) <= 1)
                        <p class="card-participants">{{ count($event->users) }} participante</p>
                    @else
                        <p class="card-participants">{{ count($event->users) }} participantes</p>
                    @endif
                    <a href="/events/{{$event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
    @endforeach
@endsection
