<?php
require_once __DIR__ . "/../../../vendor/autoload.php";

use v\helpers\Helpers;
use v\model\Validation;
use v\model\Database;
use v\model\database\Select;
use v\model\validation\Helpers as ValidationHelpers;

$data = $_GET;

ValidationHelpers::validUpdate($data); 

$db = new Database;
$da = $db->selectOneResult("members", $data["_"]);
if (empty($da)) {
  header("Location: /membres");
}
?>
<h3 class="text-sm-center">Modifier membre</h3>

<form class="container" action="/membre/update" method="post">

  <div class="shadow-lg p-3 mb-5 bg-body rounded">
    <input type="hidden" name="_" value="<?= $data["_"]?>">

    <label class="form-label">Nom</label>
    <input type="text" class="form-control"  name="nom" placeholder="Nom" value="<?= ucfirst($da["m_nom"]) ?>">

    <label class="form-label">Postnom</label>
    <input type="text" class="form-control"  name="post" placeholder="Post-nom" value="<?= ucfirst($da["m_postnom"]) ?>">

    <label class="form-label">Prenom</label>
    <input type="text" class="form-control"  name="pre" placeholder="Prenom" value="<?= ucfirst($da["m_prenom"]) ?>">

    <label class="form-label">Sexe</label>
    <input type="text" id="" value="<?= "Sexe: ".$da["m_sexe"] ?>" disabled class="form-control">
    <select class="form-control" name="sexe" aria-placeholder="Sexe">
  <option value="S" disabled>Sexe</option>
  <option value="M">Masculin</option>
  <option value="F">Feminin</option>
 </select>

    <label class="form-label">Telephone</label>
    <input type="text" class="form-control" placeholder="Telephone" name="tel" value="<?= $da["m_telephone"] ?>">

  <button type="submit" class="btn btn-primary mt-3">Modifier</button>
</div>
</form>