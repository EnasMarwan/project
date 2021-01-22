@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <div  class="row justify-content-center">
        <div  class="col-md-8">
            <div style="background: rgb(234, 236, 232)" class="card">
                <div  class="card-header">{{ __('Dashboard') }}</div>

                <div   class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<form style="text-align: center;">
                  <h2 style="color: rgb(67, 157, 236)" >  Welcom to our website! </h2>
                    <br>
                   <button > <a href="/mole/create"> Add New Child  </a> </button><br> <br>
                   <button > <a href="/mole"> Show The List </a> </button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
