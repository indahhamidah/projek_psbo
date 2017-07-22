@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <br></br>
    <br></br>
    <br></br>
        <div class="col-md-10 col-md-offset-1">
            <center>
            <img src="{{ asset('img1/rb.png')  }}" />
            </center>
            

                        <div class="section">
                        <form action="{{ url('query') }}" method="GET">
                            <div class="row">
                                  <div class="input-field col-md-12">
                                    <input type="text" class="validate col-md-12" placeholder="Search" name="q">
                                  </div>
                                   
                            </div>
                         </form>
                     </div>

            </div>
      <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    </div>
</div>
@endsection


