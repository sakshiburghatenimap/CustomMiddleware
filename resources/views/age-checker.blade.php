<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>DemoApp Custom middleware</title>

    <meta name="description" content="Wikicode check age using custom middleware in Laravel 8">
    <meta name="author" content="Wikicodes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
<div class="container align-items-start">
    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
    <div class="container-fluid d-flex justify-content-center" style="max-width: 30em">
        <form id="signin" class="form-horizontal validate-form" method="POST" action="{{ route('check.age') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="age" class="control-label">Enter your Age</label>
                <input id="age" type="text" class="form-control @error('email') is-invalid @enderror" name="age" value="{{ old('age') }}">
                @error('age')
                <div class="error-txt">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary">
                    checkage
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>