<section class="container mt-5">
    <form action="/store-membre" method="POST">
        @csrf
        <div class="form-group">
          <label for="Nom">Nom : </label>
          <input type="text" name="nom" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="Age">Age : </label>
            <input type="number" name="age" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="Genre">Genre : </label>
          <select class="form-control" name="genre" id="exampleFormControlSelect1">
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
