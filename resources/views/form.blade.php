<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Validation in Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif

        <form  method="post" action="{{ route('validate.form') }}" novalidate>

            @csrf

            <div class="form-group mb-2">
                <label>Nombre</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Descripción</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject">
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</body>

</html>
