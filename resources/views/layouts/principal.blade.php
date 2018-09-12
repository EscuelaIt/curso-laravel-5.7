<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Misitio {{$title ?? ''}}</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
              <h2>Simplemente<small>Probando</small></h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('contenido')
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="btn btn-info" href="{{ route('principal') }}" role="button">Inicio</a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="btn btn-info" href="{{ route('acerca') }}" role="button">Acerca</a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a class="btn btn-info" href="{{ route('precios') }}" role="button">Precios</a>
                </div>
            </div>
        </div>
    </body>
</html>
