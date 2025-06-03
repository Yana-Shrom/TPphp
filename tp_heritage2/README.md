# Gestion d'un Parc de Véhicules

## Description

Projet PHP orienté objet pour modéliser différents types de véhicules avec suivi de l'entretien et gestion de charge (camion).

## Structure

- `Vehicule` (classe de base)
- `Voiture`, `Moto`, `Camion` (héritage + spécialisation)
- Méthodes : `afficherInfos`, `programmerEntretien`, `afficherProchainEntretien`, `charger`

## Exécution

```bash
composer install
php tests/testParcVehicules.php
```
