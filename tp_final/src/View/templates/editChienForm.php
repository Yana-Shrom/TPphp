<?php if (isset($_SESSION['error'])): ?>
    <div style="color: red;">
        <?= htmlspecialchars($_SESSION['error']) ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<h2>Modifier un Chien</h2>
<form method='POST' action='?action=update' enctype="multipart/form-data">
    <input type='hidden' name='id' value='<?= $id ?>'>
    <input name='nom' value='<?= $chien->nom ?>'><br>
    <input name='age' type='number' value='<?= $chien->age ?>'><br>
    <input name='race' value='<?= $chien->race ?>'><br>
    <input name='couleur' value='<?= $chien->couleur ?>'><br>
    <input name='sexe' value='<?= $chien->sexe ?>'><br>
    <label for="photo">Photo :</label>
    <input type="file" name="photo" accept="image/*">
    <input name='poids' type='number' step='0.1' value='<?= $chien->poids ?>'><br>
    <label for="type">Type de chien :</label>
    <select name="type" id="type">
        <option value="chien">Chien</option>
        <option value="chien_de_chasse">Chien de chasse</option>
    </select>
    <button type='submit'>Mettre à jour</button>
</form>
