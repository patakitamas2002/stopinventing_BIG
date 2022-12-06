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
# Fizikai környezet
# Adatbázisterv

![image](https://user-images.githubusercontent.com/113434354/205898315-8654ae5f-10cf-4c5f-81b0-49957bdbdd34.png)

# Implementációs terv

A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni. Külön fájlokra tervezzük osztani amennyire csak lehet, a könnyebb változtatások, fejlesztések érdekében. Adatbázis kapcsolat segítségével kérdezzük le az MNIST képeket és annak válaszait, a quiz befejezése után, ha a felhasználó be van jelentkezve, feltöltjük a helyes pontszámok számát és a felhasználónevet egy ranglistára. A kliens letudja a ranglistát kérdezni és megjeleníteni rendezve.

# Teszt terv
# Telepítési terv
