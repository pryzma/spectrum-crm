@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($targets as $target)
                        <li class="list-group-item list-group-item-action">
                            <div id="target{{ $target->id }}" class="btn btn-danger btn-sm delete mr-3">
                                <i class="fas fa-times"></i>
                            </div>{{ $target->name }}<span style="display: inline-block; position: absolute; right: 20px;">{{ $target->subject }}</span>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
