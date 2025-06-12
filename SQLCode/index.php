SELECT evenementen.event_id, evenementen.naam, evenementen.datum, zalen.zaalnaam
FROM evenementen
INNER JOIN zalen ON evenementen.zaal_id = zalen.zaal_id;


SELECT bezoekers.bezoeker_id, bezoekers.voornaam, bezoekers.achternaam, bezoekers.emailadres
FROM bezoekers
INNER JOIN inschrijvingen ON bezoekers.bezoeker_id = inschrijvingen.bezoeker_id
INNER JOIN evenementen ON inschrijvingen.event_id = evenementen.event_id
WHERE evenementen.naam = 'Tech Conference 2025';


SELECT evenementen.naam, COUNT(inschrijvingen.inschrijving_id) AS aantal_inschrijvingen
FROM evenementen
LEFT JOIN inschrijvingen ON evenementen.event_id = inschrijvingen.event_id
GROUP BY evenementen.event_id;


