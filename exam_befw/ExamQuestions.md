# examen laravel basis

## context
Je werkt voor een opleidingscentrum dat cursussen aanbiedt.  
Ze willen een eenvoudige webapplicatie om cursussen te beheren.

---

## deel 1 — theorie

### vraag 1
Leg uit aan een "normie" wie waar verantwoordelijk voor is:
- een Model
- een Controller
- een View

---

### vraag 2
Wat is Eloquent (...) en waarom gebruiken we het?
Geef 2 voordelen en 1 nadeel.

---

### vraag 3
Wat gebeurt er wanneer een gebruiker een formulier verstuurt in Laravel?
En welk onderdeel mogen we zeker niet vergeten? (verplicht in laravel)
Beschrijf de flow:
- route
- controller
- validatie
- response/action

---

### vraag 4
Wat doet de volgende code?

```php
Course::where('active', 1)->orderBy('title')->get();
Leg stap voor stap uit EN maak hier ook een raw MYSQL query van!
```

------------------------------------------------------------------------

## deel 2 --- praktijk

### opdracht
Bouw een mini cursusbeheer systeem.
Je maakt een applicatie waarin cursussen beheerd worden.

---

### 1. model

Maak een model voor `Course` met volgende velden:
-   title (string)
-   description (text)
-   active (boolean)
-   created_at

---

### 2. eloquent queries

Schrijf de code in de controller:
-   Haal alle actieve cursussen op
-   Sorteer alfabetisch op titel
-   Toon ze in de view

---

### 3. controller

Maak een `CourseController` met:

-   index()
-   store()

In `store()`: - sla een nieuwe course op; `index` -> laat alles courses zien!

---

### 4. formulier + validatie

Maak een formulier om een cursus toe te voegen:
Velden: - title - description - active (checkbox)
Validatie: - title verplicht, min 3 karakters - description verplicht
**check the laravel documentation - validation**
---

### 5. views + layout (no external)

Maak een basis layout: (gebruik @extend, @include, @yield en @section)
-   header
-   navigatie
-   content

Pagina's: - overzicht cursussen - formulier toevoegen

---

### 6. navigatie

Maak een navigatie met:
-   Home
-   Nieuwe cursus

---

Voeg een knop toe om een cursus actief/inactief te zetten op de home pagina...(dit zal een dashboard worden)
(selecteer, update, save model)

------------------------------------------------------------------------
Push naar een PUBLIC repo en deel de link! De theorie zet je in 
voornaamAchternaam.md en opladen maar!