<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Task</title>
  </head>
  <body>

    <br><br>
    <div class="card col-md-6 offset-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                  <form action="{{ url('formstore') }}" method="POST">
                    @csrf
                      <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" required name="name" placeholder="Enter your name">
                      </div>

                      <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" required name="email" placeholder="Enter your email">
                      </div>

                      <div class="mb-3">
                          <button class="btn btn-success" type="submit">Submit</button>
                          <a href="{{ url('generatereport') }}" class="btn btn-success">Generate Report</a>

                      </div>
                  </form>
                </div>
              </div>
        </div>
    </div>



    <div class="col-md-5 text-center offset-3 mt-2">
        @if ($message = Session::get('danger'))
          <div class="alert alert-danger alert-block text-center">
            <strong>{{ $message }}</strong>
          </div>
        @endif

        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block text-center">
            <strong>{{ $message }}</strong>
          </div>
        @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
