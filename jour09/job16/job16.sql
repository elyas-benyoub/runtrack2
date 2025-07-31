 select etage.nom, salles.nom as BiggestRoom, salles.capacite
 from salles inner join etage
 where salles.capacite = (select max(capacite) from salles)
    and etage.id = salles.id_etage;