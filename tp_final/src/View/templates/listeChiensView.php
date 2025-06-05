
<h1>Liste des Chiens</h1>
<a href='?action=create'>Ajouter un Chien</a>
<form method='POST' action='?action=search'>
    <input type='text' name='search' placeholder='Rechercher par nom'>
    <input type='submit' value='Rechercher'>
</form>
<ul>
<?php foreach ($chiens as $id => $chien): ?>
    <li>
        <?php if ($chien->getPhoto()): ?>
            <img src="/images/<?= htmlspecialchars($chien->getPhoto()) ?>" alt="Photo" style="width: 50px; height: auto;">
        <?php endif; ?>
        <?= $chien->afficherDetails() ?> -
        <a href='?action=show&id=<?= $id ?>'>Voir</a> -
        <a href='?action=edit&id=<?= $id ?>'>Modifier</a> -
        <a href='?action=delete&id=<?= $id ?>'>Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
