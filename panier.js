function LignePanier(code, qte, prix) {
    this.codeArticle = code;
    this.qteArticle = qte;
    this.prixArticle = prix;
    this.ajouterQte = qte => {
        this.qteArticle += qte;
        if (this.qteArticle <= 0){
            monPanier.liste.splice(monPanier.liste.findIndex(x => x.codeArticle === this.codeArticle), 1);
        }
    };
    this.getPrixLigne = () => this.prixArticle * this.qteArticle;
    this.getCode = () => this.codeArticle;
}

function Panier() {
    this.liste = [];
    this.ajouterArticle = function (code, qte, prix) {
        var index = this.getArticle(code);
        if (index == -1) this.liste.push(new LignePanier(code, qte, prix));
        else this.liste[index].ajouterQte(qte);
    }
    this.getPrixPanier = function () {
        var total = 0;
        for (var i = 0; i < this.liste.length; i++)
            total += this.liste[i].getPrixLigne();
        return total;
    }
    this.getArticle = function (code) {
        for (var i = 0; i < this.liste.length; i++)
            if (code == this.liste[i].getCode()) return i;
        return -1;
    }
    this.supprimerArticle = function (code) {
        var index = this.getArticle(code);
        if (index > -1) this.liste.splice(index, 1);
    }
}

/** Fonctions utilisées */

function ajouter() {
    var code = parseInt(document.getElementById("id").value);
    var qte = parseInt(document.getElementById("qte").value);
    var prix = parseInt(document.getElementById("prix").value);
    var tableau = document.getElementById("tableau");
    monPanier.ajouterArticle(code, qte, prix);



    for (let i = 0; i < monPanier.liste.length; i++) {
        console.log(monPanier.liste);
        tableau.rows[i].cells[0].innerHTML = monPanier.liste[i].codeArticle;
        tableau.rows[i].cells[1].innerHTML = monPanier.liste[i].qteArticle;
        tableau.rows[i].cells[2].innerHTML = monPanier.liste[i].prixArticle;
    }

    document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier();
}

function supprimer(code) {
    var tableau = document.getElementById("tableau");
    var longueurTab = parseInt(document.getElementById("nbreLignes").innerHTML);
    if (longueurTab > 0) {
        for (var i = longueurTab; i > 0; i--) {
            monPanier.ajouterArticle(parseInt(tableau.rows[i].cells[0].innerHTML), parseInt(tableau.rows[i].cells[1].innerHTML), parseInt(tableau.rows[i].cells[2].innerHTML));
            tableau.deleteRow(i);
        }
    }
    monPanier.supprimerArticle(code);
    var longueur = monPanier.liste.length;
    for (var i = 0; i < longueur; i++) {
        var ligne = monPanier.liste[i];
        var ligneTableau = tableau.insertRow(-1);
        var colonne1 = ligneTableau.insertCell(0);
        colonne1.innerHTML += ligne.getCode();
        var colonne2 = ligneTableau.insertCell(1);
        colonne2.innerHTML += ligne.qteArticle;
        var colonne3 = ligneTableau.insertCell(2);
        colonne3.innerHTML += ligne.prixArticle;
        var colonne4 = ligneTableau.insertCell(3);
        colonne4.innerHTML += ligne.getPrixLigne();
        var colonne5 = ligneTableau.insertCell(4);
        colonne5.innerHTML += "<button class=\"btn btn-primary\" type=\"submit\" onclick=\"supprimer(this.parentNode.parentNode.cells[0].innerHTML)\"><span class=\"glyphicon glyphicon-remove\"></span> Retirer</button>";
    }
    document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier();
    document.getElementById("nbreLignes").innerHTML = longueur;
}