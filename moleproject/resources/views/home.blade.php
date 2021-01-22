@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<form style="text-align: center;">
                    {{ __('Welcom to our website!') }}
                    <br>
                    <br>
                   <button > <a href="/mole/create"> Add Child  </a> </button><br> <br>
                   <button > <a href="/mole"> Show the list </a> </button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
