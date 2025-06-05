<?php if (isset($_SESSION['error'])): ?>
    <div style="color: red;">
        <?= htmlspecialchars($_SESSION['error']) ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<h2>Ajouter un Chien</h2>
<form method='POST' action='?action=store' enctype="multipart/form-data">
    <input name='nom' placeholder='Nom'><br>
    <input name='age' type='number' placeholder='Âge'><br>
    <input name='race' placeholder='Race'><br>
    <input name='couleur' placeholder='Couleur'><br>
    <input name='sexe' placeholder='Sexe'><br>
    <input name='poids' type='number' step='0.1' placeholder='Poids'><br>
    <label for="photo">Photo :</label>
    <input type="file" name="photo" accept="image/*">
    <label for="type">Type de chien :</label>
    <select name="type" id="type">
        <option value="chien">Chien</option>
        <option value="chien_de_chasse">Chien de chasse</option>
    </select>
    <button type='submit'>Ajouter</button>
</form>
