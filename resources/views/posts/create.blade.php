<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Aggiungi Data Concerto</h3>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="data" class="form-control" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="luogo">Luogo</label>
                    <input type="string" class="form-control" id="luogo" name="luogo" required>

                </div>
                <br>
                <button class="btn btn-primary" type="submit" class="btn btn-primary">Crea Post</button>
            </form>
        </div>
    </div>
</div>
