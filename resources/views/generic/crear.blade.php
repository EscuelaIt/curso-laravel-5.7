<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form action="{{ route('cursos.create') }}" method="POST" role="form">
                    @csrf
                    <legend>Crear un curso</legend>

                    <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" placeholder="Input field" required>
                    </div>

                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" rows="5" required>{{ old('descripcion') }}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="">Profesor</label>
                        <select name="profesor_id" class="form-control" required>
                            <option>Elige algo</option>
                            @foreach ($profesores as $profesor)
                                <option value="{{$profesor->id}}" {{ old('profesor_id') == $profesor->id ? "selected" : ''}}>{{$profesor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
