# mod-quimsonde

[![Version](https://img.shields.io/badge/version-1.8.8-blue.svg)](version.txt)

**QuiMSonde** (Qui Me Sonde) est un module pour [OGSpy](https://ogsteam.fr) qui enregistre les rapports d'espionnage reçus et offre des analyses avancées sur les espionnages que vous subissez.

Ce module est fondé sur la création de **Santory** : *QuiMObserve*.

---

## Fonctionnalités

- Enregistrement automatique des rapports d'espionnage reçus via le mod Xtense 2.
- Analyse statistique des espionnages subis (joueurs, alliances, fréquences, distances, etc.).
- Affichage paginé et configurable de l'historique des rapports.
- Gestion des configurations par utilisateur et par administrateur.
- Import de données depuis QuiMObserve (table `qmo`).
- Liens de recherche personnalisables (recherche d'alliance, de joueur, etc.).
- Compatible avec le mod Xtense 2 pour la détection automatique des espionnages ennemis.

---

## Prérequis

- OGSpy ≥ 3.3.2
- Mod Xtense 2 (recommandé pour l'import automatique des rapports)

---

## Installation

1. Copiez le dossier `QuiMSonde` dans le répertoire `mod/` de votre installation OGSpy.
2. Connectez-vous en tant qu'administrateur sur OGSpy.
3. Accédez à la gestion des modules et installez **QuiMSonde** via le fichier `install.php`.
4. Si le mod Xtense 2 est installé, la compatibilité sera configurée automatiquement.

---

## Mise à jour

1. Remplacez les fichiers existants par les nouveaux fichiers du module.
2. Exécutez le script `update.php` via l'interface d'administration OGSpy pour appliquer les migrations de base de données éventuelles.

---

## Désinstallation

1. Accédez à la gestion des modules dans OGSpy.
2. Exécutez le script `uninstall.php` pour supprimer les tables et données associées.

---

## Liens utiles

- [Forum OGSteam – Discussion QuiMSonde](https://ogsteam.fr/viewtopic.php?id=4816)
- [Voir les tickets ouverts](https://trac.ogsteam.fr/query?status=new&status=assigned&status=reopened&order=priority&component=QuiMSonde)
- [Créer un ticket](https://trac.ogsteam.fr/newticket?component=QuiMSonde)

---

## Auteur

Module développé par **Sylar** – [sylar.web@free.fr](mailto:sylar.web@free.fr)  
Inspiré du mod *QuiMObserve* de **Santory**.
