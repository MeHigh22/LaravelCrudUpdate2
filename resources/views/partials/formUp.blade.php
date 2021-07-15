<section class="container mt-5">
    <form action="/update-membre/{{$edit->id}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="Nom">Nom : </label>
          <input type="text" name="nom" value="{{$edit->nom}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="Age">Age : </label>
            <input type="number" name="age" value="{{$edit->age}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="Genre">Genre : </label>
          <select class="form-control" value={{$edit->genre}} name="genre" id="exampleFormControlSelect1">
            @if ($edit->genre == "Homme")
                <option>Homme</option>
                <option>Femme</option>
            @else
                <option>Femme</option>
                <option>Homme</option>
            @endif
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>
