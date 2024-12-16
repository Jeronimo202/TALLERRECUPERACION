<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Author Edit</h1>
                    <form action="{{route('authors.update', $author->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name">nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $author->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="name">Nacionalidad</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" value="{{ $author->nationality }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="birth_date"><strong>Fecha de nacimiento:</strong></label> 
                            <input type="date" class="form-control" id="birth_date" name="birth_date" id="birth_date" value="{{ $author->birth_date }}" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-info" id="botonEditar">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>