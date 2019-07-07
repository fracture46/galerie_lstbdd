# galerie_lstbdd
Extension Typo3 de gestion d'une galerie photo

## Installation depuis TYPO3

Depuis le dossier de votre projet :

```bash
cd web/typo3conf/ext/
git clone git@github.com:fracture46/galerie_lstbdd.git
```

Retourner dans le dossier de votre projet TYPO3 puis ajoutez à la fin de votre composer.json :

```json
"autoload": {
  "psr-4": {
    "Galerielstbdd\\GalerieLstbdd\\": "web/typo3conf/ext/galerie_lstbdd/Classes"
  }
}
```

Et enfin :

```bash
composer install
```

(Re) démarrer votre serveur et profitez !
