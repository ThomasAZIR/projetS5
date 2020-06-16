<?php session_start();
include "connexion.php";
$error = "";


//Les légumes
//=================================================================================================================
if (isset($_POST["haricotsVert"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 81, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["haricotsVertBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 6, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["poireau"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 76, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["carotte"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 70, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["salade"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 68, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["saladeBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 67, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["choufleur"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 66, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["choufleurBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 65, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["betterave"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 62, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["betteraveBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 61, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["radis"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 64, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["radisBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 63, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["poivron"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 60, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["poivronBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 59, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
//Les fruits
//=================================================================================================================
if (isset($_POST["pomme"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 7, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["pommeBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 23, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["poire"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 24, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["poireBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 8, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["banane"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 10, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["bananeBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 9, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mirabelle"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 12, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mirabelleBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 11, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fraise"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 14, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fraiseBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 15, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["framboise"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 16, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["framboiseBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 15, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["peche"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 18, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["pecheBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 17, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["abricot"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 20, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["abricotBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 19, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mure"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 22, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mureBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 21, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}

//Les viandes
//=================================================================================================================
if (isset($_POST["poulet"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 48, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["pouletBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 2, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["veau"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 72, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["veauBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 77, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["agneau"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 52, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["agneauBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 51, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["porc"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 54, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["porcBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 53, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["boeuf"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 50, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["boeufBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 49, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["canard"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 58, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["canardBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 57, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mouton"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 56, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["moutonBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 55, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}

//Les cereales
//=================================================================================================================
if (isset($_POST["ble"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 29, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["bleBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 1, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["soja"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 30, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["sojaBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 3, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["mais"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 4, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["maisBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 31, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["orge"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 34, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["orgeBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 36, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["avoine"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 35, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["avoineBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 37, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}

//Les produits laitiers
//=================================================================================================================
if (isset($_POST["lait"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 5, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["laitBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 39, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fromage"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 42, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fromageBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 43, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["creme"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 44, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["cremeBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 45, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fb"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 46, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["fbBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 47, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["yaourt"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 40, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}
if (isset($_POST["yaourtBio"])) {
    if ($_POST['qte'] != NULL AND $_POST['prix'] != NULL){
        $ajoutbdd = $objPdo->query('INSERT INTO Propose (id_prod, id_pdt, prix_pdt, qte_pdt) VALUES (' . $_SESSION['id_prod'] . ', 41, '. $_POST['prix'] .','. $_POST['qte'] . ')');
        $error = "";
    }
    else {
        $error = "Vous devez remplir les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> AGREEN</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="./shop-grid.php">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.php">Shop Details</a></li>
                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                    <li><a href="./blog-details.php">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i> <!-- class="fa fa-envelope"> --> Université de lorraine, IUT de metz </i></li>
                                <li>
                                    <div class="header__top__right__auth">
                                        <?php
                                        if (!isset($_SESSION['email'])) {
                                            echo "qui êtes vous ? :  <input type=\"submit\" value=\"Client\" onclick=\"window . location . href = 'login.php?statut=Client'; \"  />  
                           <input type=\"submit\" value=\"Producteur\" onclick=\"window . location . href = 'login.php?statut=Producteur';\"/>";
                                        } else {
                                            echo "Bienvenue " . "<input type=\"submit\" value=\"Deconnexion\" onclick=\"window . location . href = 'logout.php';\"/>";
                                        }
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://fr-fr.facebook.com/IUT.metz.officiel/"><i
                                            class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/univ_lorraine?lang=fr"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/iutmetz/"><i class="fa fa-instagram"></i></a>

                            </div>
                            <div class="header__top__right__language">
                                <img src="img/drapeaufr.png" alt="">
                                <div>Français</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Accueil</a></li>
                            <li class="active"><a href="./shop-prod.php">Magasin</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                echo "
                             <li><a href=\"#\">S'identifier</a>
                                <ul class=\"header__menu__dropdown\">
                                    <li><a href=\"./login.php?statut=Client\">Client</a></li>
                                    <li><a href=\"./login.php?statut=Producteur\">Producteur</a></li>
                                </ul>
                            </li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Tous les produits</span>
                    </div>
                    <ul>
                        <li><a href="#">Céréales</a></li>
                        <li><a href="#">Produits laitiers</a></li>
                        <li><a href="#">Viandes</a></li>
                        <li><a href="#">Fruits</a></li>
                        <li><a href="#">Légumes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Toutes les catégories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="De quoi avez vous besoin ?">
                            <button type="submit" class="site-btn">RECHERCHER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Magasin</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Accueil </a>
                        <span>Magasin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Catégories</h4>
                        <ul>
                            <li><a href="#">céréales</a></li>
                            <li><a href="#">Produits laitiers</a></li>
                            <li><a href="#">viandes</a></li>
                            <li><a href="#">fruits</a></li>
                            <li><a href="#">légumes</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Prix</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section principale -->
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Rajoutez un article</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-7">
                            <form method="post">
                                <input class="site-btn" type="submit" value="Légumes" name="legumes"/>
                                <input class="site-btn" type="submit" value="Fruits" name="fruits"/>
                                <input class="site-btn" type="submit" value="Viande" name="viande"/>
                                <input class="site-btn" type="submit" value="Céréales" name="cereales"/>
                                <input class="site-btn" type="submit" value="Laitages" name="prodLait"/>
                                <!--                         <input type="submit" value="Ajoutez cet article" name="posterSujet"/>-->
                        </div>
                        <br>
                        <div class="col-lg-9 col-md-7">
                            <?php
                            echo "<br><br>";
                            if (isset($_POST['viande']) OR isset($_POST['cereales']) OR isset($_POST['prodLait']) OR isset($_POST['fruits']) OR isset($_POST['legumes'])) {
                                echo "<table>
                                          <tr>
                                              <td>Quantité : </td>
                                              <td><input type=\"text\" name=\"qte\" placeholder=\"Quantitée mise en vente\" value=\"0\"></td>
                                          </tr>
                                          <tr>
                                              <td> Prix : </td>
                                              <td><input type=\"text\" name=\"prix\" placeholder=\"prix à l'unité\" value=\"0\"></td>
                                          </tr>
                                      </table>";
                            }

                            echo "<div> ". $error ."</div><br><br>";
                            if (isset($_POST["legumes"])) {
                                echo "<input type=\"submit\" value=\"Haricots Vert\" name=\"haricotsVert\"/><br>
                                      <input type=\"submit\" value=\"Haricots Vert bio\" name=\"haricotVertBio\"/><br>
                                      <input type=\"submit\" value=\"Poireau\" name=\"poireau\"/><br>
                                      <input type=\"submit\" value=\"Carotte\" name=\"carotte\"/><br>
                                      <input type=\"submit\" value=\"Salade\" name=\"salade\"/><br>
                                      <input type=\"submit\" value=\"Chou-Fleur\" name=\"choufleur\"/><br>
                                      <input type=\"submit\" value=\"Chou-Fleur bio\" name=\"choufleurBio\"/><br>
                                      <input type=\"submit\" value=\"Betterave\" name=\"betterave\"/><br>
                                      <input type=\"submit\" value=\"Betterave bio\" name=\"betteraveBio\"/><br>
                                      <input type=\"submit\" value=\"Radis\" name=\"radis\"/><br>
                                      <input type=\"submit\" value=\"Radis bio\" name=\"radisBio\"/><br>
                                      <input type=\"submit\" value=\"Poivron\" name=\"poivron\"/><br>
                                      <input type=\"submit\" value=\"Poivron bio\" name=\"poivronBio\"/><br>
                                      <input type=\"submit\" value=\"Salade\" name=\"salade\"/><br>" .
                                    "";
                            } elseif (isset($_POST['fruits'])) {
                                echo "<input type=\"submit\" value=\"Pomme\" name=\"pomme\"/><br>
                                      <input type=\"submit\" value=\"Pomme bio\" name=\"pommeBio\"/><br>
                                      <input type=\"submit\" value=\"Poire\" name=\"poire\"/><br>
                                      <input type=\"submit\" value=\"Poire bio\" name=\"poireBio\"/><br>
                                      <input type=\"submit\" value=\"Banane\" name=\"banane\"/><br>
                                      <input type=\"submit\" value=\"Banane bio\" name=\"bananeBio\"/><br>
                                      <input type=\"submit\" value=\"Mirabelle\" name=\"mirabelle\"/><br>
                                      <input type=\"submit\" value=\"Mirabelle bio\" name=\"mirabelleBio\"/><br>
                                      <input type=\"submit\" value=\"Fraise\" name=\"fraise\"/><br>
                                      <input type=\"submit\" value=\"Fraise bio\" name=\"fraiseBio\"/><br>
                                      <input type=\"submit\" value=\"Framboise\" name=\"framboise\"/><br>
                                      <input type=\"submit\" value=\"Framboise bio\" name=\"framboiseBio\"/><br>
                                      <input type=\"submit\" value=\"Pêche\" name=\"peche\"/><br>
                                      <input type=\"submit\" value=\"Pêche bio\" name=\"pecheBio\"/><br>
                                      <input type=\"submit\" value=\"Abricot\" name=\"abricot\"/><br>
                                      <input type=\"submit\" value=\"Abricot bio\" name=\"abricotBio\"/><br>
                                      <input type=\"submit\" value=\"Mûre\" name=\"mure\"/><br>
                                      <input type=\"submit\" value=\"Mûre bio\" name=\"mureBio\"/><br>";
                            } elseif (isset($_POST['viande'])) {
                                echo "<input type=\"submit\" value=\"Poulet\" name=\"poulet\"/><br>
                                      <input type=\"submit\" value=\"Poulet bio\" name=\"pouletBio\"/><br>
                                      <input type=\"submit\" value=\"Veau\" name=\"veau\"/><br>
                                      <input type=\"submit\" value=\"Veau bio\" name=\"veauBio\"/><br>
                                      <input type=\"submit\" value=\"Agneau\" name=\"agneau\"/><br>
                                      <input type=\"submit\" value=\"Agneau bio\" name=\"agneauBio\"/><br>
                                      <input type=\"submit\" value=\"Porc\" name=\"porc\"/><br>
                                      <input type=\"submit\" value=\"Porc bio\" name=\"porcBio\"/><br>
                                      <input type=\"submit\" value=\"Boeuf\" name=\"boeuf\"/><br>
                                      <input type=\"submit\" value=\"Boeuf bio\" name=\"boeufBio\"/><br>
                                      <input type=\"submit\" value=\"Canard\" name=\"canard\"/><br>
                                      <input type=\"submit\" value=\"Canard bio\" name=\"canardBio\"/><br>
                                      <input type=\"submit\" value=\"Mouton\" name=\"moutonBio\"/><br>
                                      <input type=\"submit\" value=\"Mouton bio\" name=\"moutonBio\"/><br>" .
                                    "";
                            } elseif (isset($_POST['cereales'])) {
                                echo "<input type=\"submit\" value=\"Blé\" name=\"ble\"/><br>
                                      <input type=\"submit\" value=\"Blé bio\" name=\"bleBio\"/><br>
                                      <input type=\"submit\" value=\"Soja\" name=\"soja\"/><br>
                                      <input type=\"submit\" value=\"Soja bio\" name=\"sojaBio\"/><br>
                                      <input type=\"submit\" value=\"Maïs\" name=\"mais\"/><br>
                                      <input type=\"submit\" value=\"Maïs bio\" name=\"maisBio\"/><br>
                                      <input type=\"submit\" value=\"Orge\" name=\"orge\"/><br>
                                      <input type=\"submit\" value=\"Orge bio\" name=\"orgeBio\"/><br>
                                      <input type=\"submit\" value=\"Avoine\" name=\"avoine\"/><br>
                                      <input type=\"submit\" value=\"Avoine bio\" name=\"avoineBio\"/><br>";
                            } elseif (isset($_POST['prodLait'])) {
                                echo "<input type=\"submit\" value=\"Lait\" name=\"lait\"/><br>
                                      <input type=\"submit\" value=\"Lait bio\" name=\"laitBio\"/><br>
                                      <input type=\"submit\" value=\"Fromage\" name=\"fromage\"/><br>
                                      <input type=\"submit\" value=\"Fromage bio\" name=\"fromageBio\"/><br>
                                      <input type=\"submit\" value=\"Crème\" name=\"bleBio\"/><br>
                                      <input type=\"submit\" value=\"Crème bio\" name=\"cremeBio\"/><br>
                                      <input type=\"submit\" value=\"Fromage Blanc\" name=\"fb\"/><br>
                                      <input type=\"submit\" value=\"Fromage Blanc bio\" name=\"fbBio\"/><br>
                                      <input type=\"submit\" value=\"Yaourt\" name=\"yaourt\"/><br>
                                      <input type=\"submit\" value=\"Yaourt bio\" name=\"yaourtBio\"/><br>";
                            };

                            ?></div>
                        </form>
                    </div>
                </div>
                <!-- end section principale -->

                <!-- Les catégories -->
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Vos produits</h2>
                        </div>
                        <div>
                            <?php
                            //                                var_dump($_SESSION['email']);
                            $produit = $objPdo->prepare('SELECT * FROM Propose o, Produit p, Producteur pro WHERE p.id_pdt = o.id_pdt AND pro.id_prod = o.id_prod AND mail_prod = ?');
                            $produit->bindValue(1, $_SESSION['email']);
                            $produit->execute();
                            while ($row = $produit->fetch()) {
                                echo "<div>" . $row['lib_pdt'] . "</div>";
                            }
                            $produit->closeCursor();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>

                        <li>Numéro: 03 72 74 84 00</li>
                        <li>Adresse : Ile du Saulcy. 57045 Metz</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Liens utiles</h6>
                    <ul>
                        <li><a href="#">A propos de nous</a></li>
                        <li><a href="#">A propos de notre site</a></li>
                        <li><a href="#">Site Sécurisé</a></li>
                        <li><a href="#">Information de livraison</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>

                    </ul>
                    <ul>
                        <li><a href="#">Qui sommes nous</a></li>
                        <li><a href="#">Nos Services</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Si vous voulez nous contacter</h6>
                    <p>Rejoignez nous sur la page <a href="contact.php">Contact</a></p>

                    <div class="footer__widget__social">
                        <a href="https://fr-fr.facebook.com/IUT.metz.officiel/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/iutmetz/"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/univ_lorraine?lang=fr"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>