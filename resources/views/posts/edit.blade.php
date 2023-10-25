<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Aggiorna</h3>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" id="data" name="data" value="{{ $post->data }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="luogo">Luogo</label>
                    <input type="string" class="form-control" id="luogo" name="luogo" value="{{ $post->luogo }}"
                        required>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Aggiorna data</button>
            </form>
        </div>
    </div>
</div>
