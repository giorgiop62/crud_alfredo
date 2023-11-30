<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Modifica data</title>
</head>

<body>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Modifica</h3>
                <form action="{{ route('posts.update', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" id="data" name="data"
                            value="{{ $post->data }}" required>
                    </div>
                    <div class="form-group">
                        <label for="luogo">Luogo</label>
                        <input type="string" class="form-control" id="luogo" name="luogo"
                            value="{{ $post->luogo }}" required>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Modifica data</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
