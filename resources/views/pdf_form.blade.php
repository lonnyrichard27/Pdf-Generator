<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF Generator</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
       <nav class="navbar navbar-expand-sm navbar-light bg-light">
           <a class="navbar-brand ml-5" href="#">PDF Generator</a>
       </nav>
       <div class="container contact mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <form action="{{  route('pdf_download@PdfController') }}" method="POST" accept-charset="Utf-8">

                        @csrf

                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

                        <span class="text-danger">{{ $errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                          <label for="email">Email</label>

                          <input name="email" type="email" class="form-control" id="email">

                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="comment">Comment</label>

                            <textarea name="message" class="form-control" id="message" rows="3"></textarea>

                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>

                            <span>{{ $errors->first('message') }}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
       </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
