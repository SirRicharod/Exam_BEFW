# deel 1 — theorie
### vraag 1
Leg uit aan een "normie" wie waar verantwoordelijk voor is:
- een Model: *Het Model is verantwoordelijk voor alle informatie. Het haalt gegevens uit de database, slaat nieuwe dingen op en weet precies hoe de data eruitziet (bv. welke velden een "User" heeft).*

- een Controller: *De Controller  stuurt alles aan. Als je op een knop klikt, ontvangt de Controller dat verzoek. Hij vraagt het Model om de juiste gegevens en stuurt die daarna door naar de juiste pagina.*

- een View: *De View is wat de gebruiker uiteindelijk ziet op zijn scherm. Het is de layout van de website (HTML/CSS). De View krijgt informatie van de Controller en zet die op de juiste plek op de pagina.*

---
### vraag 2
Wat is Eloquent (...) en waarom gebruiken we het?
Geef 2 voordelen en 1 nadeel.

**Eloquent is een ORM (Object-Relational Mapper) dat het mogelijk maakt om met je database te interageren op een simpele, leesbare, en veilige manier.**

**Voordelen:** 
 1. *De syntax van Eloquent is intuïtiever dan raw SQL, zelfs iemand die niets van SQL afweet zou Eloquent kunnen lezen en begrijpen.*
 2. *Eloquent is een abstractielaag die database agnostisch is, dit wil zeggen dat het niet uitmaakt of je database MySQL, SQLite of PostgreSQL gebruikt. Als je later besluit te wisselen van databasetype, hoef je je code niet aan te passen.*

**Nadelen:**
 1. *Voor extreem grote datasets of zeer complexe queries is Eloquent langzamer dan raw SQL. Omdat Eloquent op de achtergrond de database-gegevens omzet naar PHP objecten, is het trager dan direct SQL gebruiken.*
 
---
### vraag 3
Wat gebeurt er wanneer een gebruiker een formulier verstuurt in Laravel?
En welk onderdeel mogen we zeker niet vergeten? (verplicht in laravel)
Beschrijf de flow:

**Wanneer een gebruiker een formulier verstuurt, volgt Laravel de volgende stappen:**

 1. **route:** *De browser stuurt de data naar een specifieke URL (vaak een POST route). De web.php route bepaalt welke Controller deze data verwerkt.*
 2. **controller:** *De Controller ontvangt de data via een Request object, die beslist dan wat er met de ingevulde velden gebeurd.*
 3. **validatie:** *Voordat de data wordt opgeslagen, controleert Laravel of de input wel klopt (bv. is het e-mailadres wel een e-mailadres? Zijn de verplichte velden ingevuld?). Als dit niet klopt, wordt de gebruiker teruggestuurd met een foutmelding.*
 4. **response/action:** *Als alles klopt, voert de Controller de actie uit (zoals de data opslaan in de database) en stuurt hij een antwoord terug, bv. een redirect naar het dashboard met een "succes".*

**Wat we zeker niet mogen vergeten is het @csrf token (Cross-Site Request Forgery). Zonder dit token zal Laravel de aanvraag weigeren met een "419 Page Expired" foutmelding. Het is een beveiliging die controleert of het formulier wel echt van jouw eigen website komt en niet van een andere partij.**

---
### vraag 4
Wat doet de volgende code?
```php
Course::where('active', 1)->orderBy('title')->get();
Leg  stap  voor  stap  uit  EN  maak  hier  ook  een  raw  MYSQL  query  van!
```

**Stap voor stap uitleg:**
1. ```Course::```:  *Roept het model aan dat verbonden is met de 'courses' tabel.*
2. ```where('active', 1)```:  *Filtert de resultaten zodat je alleen rijen krijgt waar de kolom 'active' op 1 staat.*
3. ```orderBy('title')```:  *Sorteert de resultaten alfabetisch op 'title'.*
4. ```get()```: *Voert de query uit en haalt de gegevens op uit de database.*

**In het kort: *Deze code haalt ALLE actieve cursussen op uit de database en zet ze op alfabetische volgorde volgens titel.***

**In MySQL zou het er zo uitzien:**
```sql
SELECT * FROM courses WHERE active = 1 ORDER BY title ASC;
```
---
*Riccardo Giannecchini 18/03/2026*