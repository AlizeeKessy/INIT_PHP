<?php
function getBillets()
{
    $bdd = new PDO(
        "mysql:
    host=localhost;
    dbname=boggy;charset=utf8",
        'root',
        ''
    );
    $billets = $bdd->query(
        'SELECT BIL_ID as id, 
        BIL_DATE as date, 
        BIL_TITRE as titre, 
        BIL_CONTENU as contenu 
        FROM T_BILLET order by BIL_ID desc'
    );
    return $billets;
}
