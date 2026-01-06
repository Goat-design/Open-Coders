# Open Coders

Open Coders on koodaajien ja ideoiden yhdistämiseen tarkoitettu verkkopalvelu.  
Se on muunnelma tapahtumapalvelusta, joka on kehitetty osana koulun opinnäytetyötä.

Palvelussa perinteinen “tapahtuma” on muutettu **projektiksi**, johon käyttäjät voivat ilmoittautua osallistuakseen kehitystyöhön.

---

## Projektin idea

Open Codersin tarkoitus on tarjota alusta, jossa:
- ideat muuttuvat projekteiksi
- projektit kokoavat ympärilleen tekijöitä
- käyttäjät voivat osallistua useisiin projekteihin

Painopiste ei ole yksittäisessä ajankohdassa, vaan projektin sisällössä ja yhteistyössä.

---

## Projektit

Projektit luodaan ylläpitäjän (admin-käyttäjän) toimesta.

Jokaisella projektilla on:
- nimi
- kuvaus
- projektin vetäjä (kirjattuna kuvaukseen)
- tarvittaessa määritellyt roolit (esim. frontend, backend, suunnittelu)

Projektin ajallinen kesto tai tavoitteiden tarkempi määrittely jätetään projektikuvauksen vastuulle.

---

## Käyttäjät ja osallistuminen

- Käyttäjät voivat ilmoittautua mukaan projekteihin
- Sama käyttäjä voi osallistua useaan projektiin
- Projektien osallistujat ovat julkisesti nähtävissä
- Osallistuminen tarkoittaa kiinnostusta osallistua projektin toteutukseen

Projektien onnistumista tai lopputulosta ei tässä vaiheessa määritellä erikseen.

---

## Käyttäjäroolit

Palvelussa on seuraavat roolit:
- **Ylläpitäjä (admin)**  
  - luo ja hallinnoi projekteja
- **Käyttäjä**  
  - voi ilmoittautua projekteihin
  - voi osallistua useisiin projekteihin

---

## Tekninen toteutus

Palvelu on toteutettu PHP:llä ja perustuu MVC-tyyppiseen rakenteeseen.  
Tietokanta on MySQL/MariaDB.

Projektissa hyödynnetään:
- PHP
- PDO tietokantayhteyksissä
- Apache + `.htaccess` reitityksessä
- Composer riippuvuuksien hallintaan

Ympäristökohtaiset asetukset (kuten tietokantatunnukset) on erotettu versionhallinnasta.

---

## Projektin rajaukset

Seuraavat ominaisuudet on rajattu projektin ulkopuolelle tässä vaiheessa:
- reaaliaikainen viestintä (chat)
- projektinhallintatyökalut (kanban, tehtävälistat)
- ulkoiset integraatiot (esim. GitHub)

Rajaukset on tehty, jotta opinnäytetyö pysyy hallittavana ja keskittyy ydintoiminnallisuuteen.

---

## Kehityksen lähtökohta

Open Coders on rakennettu muokkaamalla olemassa olevaa tapahtumapalvelua.  
Muunnos keskittyy:
- terminologian muutokseen (tapahtuma → projekti)
- käyttötarkoituksen uudelleenmäärittelyyn
- käyttäjien roolin laajentamiseen

Tavoitteena on osoittaa kykyä analysoida olemassa olevaa järjestelmää ja kehittää siitä uusi, eri käyttötarkoitukseen soveltuva palvelu.
