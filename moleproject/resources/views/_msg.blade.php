
    @if(Session::has('errors'))
    <div style="text-align: center" class="card alert-danger">
        <div class="card-body">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
        </div>
    </div>
        @endif


         @if(Session::has('message'))
         <div style="text-align: center" class="card alert-success">
            <div class="card-body">
         {{Session::get('message')}}
        </div>
    </div>
                @endif
   
      

