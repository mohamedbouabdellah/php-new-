
function verifierFormulaire() {
    var vendeur = document.getElementById('vendeur').value;
    var nombre = document.getElementById('nombre').value;
    var produit = document.getElementById('produit').value;
    var message = '';

    if (nombre == '') {
        message += 'Saisir le nombre de produits\n';
    }
    if (vendeur == '') {
        message += 'Saisir le nom du vendeur';
    }
    if (produit==''){
        message += 'Saisir le nom du vendeur';
    }

    if (message !== '') {
        alert(message);
        return false;
    }

    return true;
}
