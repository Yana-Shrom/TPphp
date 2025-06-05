<h2>Détails du Chien</h2>
<?php if ($chien->getPhoto()): ?>
    <img src="/images/<?= htmlspecialchars($chien->getPhoto()) ?>" alt="Photo de <?= htmlspecialchars($chien->nom) ?>" width="200">
<?php endif; ?>
<p><?= $chien->afficherDetails() ?></p>
<p>Âge humain : <?= $chien->ageHumain() ?> ans</p>
<p>Aboiement : <?= $chien->crier() ?></p>
<p><?= $chien->estSurpoids() ? 'Surpoids' : 'Poids normal' ?></p>
<a href='?action=list'>Retour à la liste</a>
