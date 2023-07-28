<h3 class="text-sm-center">Custom print</h3>

<form class="container" action="" method="post">
    <a href="/print" class="btn btn-secondary mb-3">Go back</a>
    <div class="shadow-lg p-2 mx-5 bg-body rounded">

    <select name="display" aria-placeholder="display" class="form-control mb-3">
      <option value="display" disabled>Orientation</option>
      <option value="portrait">Portrait</option>
      <option value="landscape">Paysage</option>
    </select>

    <textarea name="text" id="" cols="30" rows="10" class="form-control" placeholder="Write here"></textarea>

        <button type="submit" class="btn btn-sm btn-primary mt-3">Imprimer</button>
    </div>
</form>