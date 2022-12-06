# A rendszer célja

  A Rendszer célja, hogy a felhasználó tudja tesztelni a tudását egy quiz formájában, hogy mennyire tudja felismerni az emberi kézírást. A felhasználó pontokat kap a helyes találatokért. A felhasználó könnyen tud navigálni az oldalon a minimalista megjelenés miatt. A rendszer az adatokat egy Web Service segítségével kapja az adatbázisból. A felhasználónak az eredményei ellesznek mentve az oldalon és azt vissza tudja nézni, ha be van jelentkezve. Reegisztráció nélkül is tud játszani, csak nem lesznek el mentve az eredmények.

# Követelmények

  Funkcionális követelmények:

  + A felhasználók adatainak tárolása
  + A regisztrált felhasználók eredményeinek tárolása
  + A webes környezeten való müködés

  Nem funkcionális követelmények:
  
  + A felhsználók csak a saját eredményüket tudják csak megtekinteni

  Törvényi előírások, szabványok:
  
  + A GDPR-nek való megfelelés

# Funkcionális terv

Az oldal célja egy ízléses, egyszerűen használható kézírásfelismerő szoftver legyen.
Ezt azzal éri el, hogy a beviteli preifériából fogja a jelet, feldolgozza egy komplex MI algoritmussal
és másolható szöveg formájában visszadobja a felhasználónak.
A tanulásért két dolog felelős: a tanuló algoritmus és az operáció agya, az adatbázis, ami a kézírást 
képek formájában eltárolja.
Progresszív webalkalamás mivolta miatt szinte mindenre elérhető, amire telepítve van webböngésző és rendelkezik internetkapcsolattal.
A weboldal képes skálázni magát Bootstrap segítségével, így minden képernyőn jól néz ki.

# Fizikai környezet

-PHP (backend)
-JavaScript (front-end)
-CSS (front-end)
-HTML (front-end)

Eszközök, amiket használtunk:

-Bootstrap (reszponzivitás)
# Adatbázisterv

![image](https://user-images.githubusercontent.com/113434354/205898315-8654ae5f-10cf-4c5f-81b0-49957bdbdd34.png)

# Implementációs terv

A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni. Külön fájlokra tervezzük osztani amennyire csak lehet, a könnyebb változtatások, fejlesztések érdekében. Adatbázis kapcsolat segítségével kérdezzük le az MNIST képeket és annak válaszait, a quiz befejezése után, ha a felhasználó be van jelentkezve, feltöltjük a helyes pontszámok számát és a felhasználónevet egy ranglistára. A kliens letudja a ranglistát kérdezni és megjeleníteni rendezve.

# Teszt terv
A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata, ellenőrzése, a rendszer által megvalósított üzleti szolgáltatások verifikálása.

Alfa teszt:
A login és a regisztráció sikeres. Menüpontok közti váltások esetén nincs véletlen kijelentkeztetés.

Béta teszt:
Bizonyos hibák előléptek a quiz esetén, mert nem csökkentette a hátra maradt kérédsek számát, és nem növelte a helyes válaszok számát helyes válasz esetén.
Adatbázisból lekérdezhető a rangsor, mely pontok szerint rendezi a rangot. Képes egyszerre több klienst is kiszolgálni.

Végleges teszt:
Quiz esetén tökéletesen működnek a gombok, a number input ellenőrzi, hogy az üres-e. Ha igen, figyelmezteti a felhasználót, hogy adjon meg egy számot. A Clr gomb törli a number input tartalmát, a random gomb meg random generál egy számot

# Telepítési terv
Ez egy webes alkalmazás. Csak egy böngésző szükséges hozzá, nem kell külsőleges szoftver a használathoz.
