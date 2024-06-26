<?=

$this->extend('layout_hf');

$this->section('content');

?>

<?php

foreach ($listeModifierMessage as $modfier) {
}

?>

<div class="my-5 text-center">
    <h1>Modifier le message</h1>
</div>


<div class="container border rounded">
    <form method="post" action="<?= route_to('modifier.message') . '?id=' . $_GET['id'] ?>">
        <div class="text-center">
            <div class="input-group ">
                <span class="mt-5 input-group-text" id="basic-addon1">Titre</span>
                <input type="text" class="mt-5 form-control" placeholder="Titre du message" aria-label="Username" aria-describedby="basic-addon1" name="titre" value="<?= $modfier['TITREMESSAGE']; ?>">
            </div>
        </div>
        <div class="text-center">
            <div class="input-group">
                <span class="mt-4 input-group-text">Contenu ( 160 caractères max )</span>
                <textarea class="mt-4 form-control" aria-label="With textarea" name="contenu" value=""><?= $modfier['TEXTEMESSAGE']; ?></textarea>
            </div>
        </div>
        <li class="row input-group">
            <div class="col-md-8">
                <select name="police" class="form-select mt-3" aria-label="Default select example">
                    <option value="<?= $modfier['POLICEMESSAGE'] ?>" selected><?= $modfier['POLICEMESSAGE'] ?></option>
                    <option value="">Police d'écriture</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Courier">Courier</option>
                    <option value="Lucida Sans">Lucida Sans</option>
                </select>
            </div>
            <div class="col-md-4 mt-3 btn h-100">
                <input class="w-100" type="color" id="colortext" name="couleur" value="<?= $modfier['COULEURMESSAGE'] ?>" />
            </div>
        </li>
        <div class="form-check  form-switch">
            <input class="mt-5 form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="statut" <?= ($modfier['STATUTMESSAGE'] == 1 ? 'checked' : ''); ?>> <label class="mt-5 form-check-label " for="flexSwitchCheckChecked">Afficher ?</label>
            <!-- On ajoute la date de fin -->
            <input class="btn btn-primary me-5" type="datetime-local" id="meeting" name="meeting" />
            <!-- On ajoute le nom du clent -->
            <input type="text" placeholder="Nom du client" aria-label="Username" aria-describedby="basic-addon1" name="client">
        </div>
        <input class="mt-3 mb-4 w-100 btn btn-primary " type="submit" value="Modifier">

    </form>
</div>


<?= $this->endSection(); ?>