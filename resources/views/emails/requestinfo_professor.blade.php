<html>
  <head>
    <meta charset="utf-8">
    <title>Request Info Mailer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    {{-- @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif --}}
     <p>Hello Professor, <br>
        you have an appointnent with {{ $newinterest->user->name }} <br>
        on  {{ $newinterest->date }} at  {{ $newinterest->time }} </p><br/>
      {{-- <form method="post" action="{{url('newsletter')}}">
        @csrf
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form> --}}
    </div>
  </body>
</html>


