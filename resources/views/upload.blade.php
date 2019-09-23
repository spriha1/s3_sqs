<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/post_upload" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="form-group">
                <input type="file" class="form-control" id="cv" name="cv">
                <input type="submit" class="form-control btn btn-success">
            </div>
        </form>
    </body>
</html>
