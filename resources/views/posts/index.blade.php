<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Date</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('posts.index') }}>Alfredo Pumilia</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Aggiungi date</a>
                </div>
            </div>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Date</th>
                <th scope="col">Luogo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->data }}</td>
                    <td>{{ $post->luogo }}</td>
                    <td class="d-flex">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Modifica</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="container">
        {{ $posts->links() }}
    </div>
</body>

</html>
