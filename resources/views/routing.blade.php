<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/sass/app.scss')
</head>
  <body>
    <div class="container m-5 r">
        <h1 class="justify-content-center">Belajar Laravel Routing</h1>
        <br>
        <br>
        <div class=" d-flex justify-content-center">
            <a href="{{ url('/cloning') }}" class="btn btn-primary "role="button" aria-disabled="true">Cloning Website</a>
        </div>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing Its GOOD</a>
        </div>
        <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
            View Route
        </a>
        <hr>
        <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
            Redirect Route
        </a>
        <hr>
        <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
            Route Parameter (Required Parameter) - 1
        </a>

        <hr>
        <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
            Route Parameter (Required Parameter) - 2
        </a>
        <hr>
        <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
            Route Parameter (Optional Parameter)
        </a>
        <hr>
        <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
            Route With Regular Expression Constraints
        </a>
        <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
            Route With Regular Expression Constraints
        </a>
        <hr>
        <a href="{{ route('profileRouteName', ['profileId' => '123']) }}"
            class="list-group-item list-group-item-action">
            Named Route
        </a>
        <hr>
        <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
            Route Priority
        </a>
        <hr>
        <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
            Fallback Routes
        </a>

        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>
            <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                Admin Users
            </a>
            <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                Admin Items
            </a>
        </div>
    </div>

    {{-- <div>
        <button type="button" class="btn btn-sucess btn-lg" ><a href="{{ url('/cloning') }}">Hasil Cloning Pertemuan 1</a></button>
    </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
  </body>
</html>




