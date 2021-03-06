@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard for {{ 'X' }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($projects as $p)
                                <li class="list-group-item">
                                    <a href="#">{{ $p->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @include('tanant._create')
        </div>
    </div>
@endsection
