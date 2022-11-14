## StopInventing_BIG - Funcionális specifikáció

## A szoftver célja

Célunk az, hogy egy szofisztikált és pontos, kézírást felismerő gépi tanuló algoritmust
csomagoljunk be egy ízléses, mai dizájnelveket követő, progresszív webalkalmazásként is
használható weboldalba. A felhasználó meglátogatja a weboldalt, majd képernyőmérete alapján
az oldal változtatja az elrendezését. A weboldal középső részén megjelenik egy speciális
szövegdoboz, amelybe csak egérrel vagy digitális tollal (S Pen vagy Apple Pencil) lehet
írni. A felhasználó szövegbevitele közben a gépi tanuló algoritmus megpróbálja kitalálni
kézírása alapján a megfelelő betűket, majd valós időben megjeleníti a felismert szöveget alul.

## Használati esetek

A rendzser a következő funkciókat látja el:

- Ízléses főoldal
- Fejlett kézírásfelismerő algoritmus PHP-ban
- Kézírási minták lementése MySQL adatbázisba
- OPCIONÁLIS: Apple Pencil és S Pen támogatása

![Handw_MNIST](https://github.com/patakitamas2002/stopinventing_BIG/blob/main/Handw_MNIST.png)

## Követelménylista

+ K1 (Jogosultság): Bejelentkezési felület: 
  > A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap.
+ K2 (Jogosultság): Regisztráció:
  > A felhasználó a felhasználói nevének, email címének, jelszavának megadásával és a jogiszabályok elfogadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót.
+ K3 (Modifikáció): Felhasználó kezelés:
  > A felhasználó módosítani tudja saját elhasználónevét. Ehhez szükséges a régi és az új elhasználók megadása, az új megerősítése, alamint a felhasználó elszavának megadása. A felhasználó módosítani tudja saját jelszavát. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése. Ha a felhasználó elfelejtette a felhasználónevét, vagy jelszavát akkor ezzel az opcióval a supporthoz tud fordulni.
+ K4 (Funkció): Kézírás feltöltése:
  > A felhasználónak a főoldalon lesz lehetősége feltölteni/Beszkennelni a kézírást.
+ K5 (Funkció): Végeredmény megtekintés:
  > A felhasználónak ugyan úgy a főoldalon lesz lehetősége az eredmény megtekintésére és annak a kezelésére mint pl, Másolás, Letöltés,...
+ K6 (Felület): Fordító:
  > A webalkalmazásnak a főoldalán van a kézírás fordító. Nincsenek egyébb funkciók, csak a felhasználói felület.

## Képernyőterv



## Forgatókönyv


