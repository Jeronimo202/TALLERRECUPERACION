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
                    <h1>BOOKS Edit</h1>
                    <form action="{{route('books.update', $book->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name">title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="name">published_at</label>
                            <input type="date" name="published_at" id="published_at" class="form-control" value="{{ $book->published_at}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="genre"><strong>genre:</strong></label> 
                            <input type="text" class="form-control" id="genre" name="genre" id="genre" value="{{ $book->genre }}" required>
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