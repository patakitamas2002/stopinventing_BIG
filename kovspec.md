# Illegible Illegal Writing (IIW) - kézírás-felismerő webalkalmazás

A név Illegible Illegal Writing (IIW)

## Bevezető, jelenlegi helyzet

Már eddig is léteztek korábbi próbálkozások kézírást felismerő szoftverekre, de ezen implementációknak
vagy a használata volt körülményes, vagy nem voltak kiforrottak és nem voltak pontosak (vagy mindkettő).
Ezen probléma orvosolására kértük fel a fejlesztőket a projekt megvalósítására.

## Vágyálomrendszer

Célunk az, hogy a szoftver multiplatform elérhetőséggel hatékony módon ismerje fel
gépi tanuló algoritmusok segítségével az emberek változatos és egyedi kézírását, majd azt a képernyőre kiírva
vágólapra másolható szöveggé alakítsa át. A projektet PHP és SQL alapokon szeretnénk megvalósíttatni,
reszponzív weboldalként. A weboldal követné a mai letisztult dizájntrendeket: lapos és nagy méretű gombok és pop-upok
(hogy mobilon is könnyen kezelhető legyen), talpatlan betűtípus és ízléses felső sáv (mobilon hamburger menübe rejtve).
Samsung mobilokon és iPad-eken tervezett az S Pen és az Apple Pencil támogatása is.

## Jogi szabályok

A webalkalmazás a felhasználó saját kézírását fogja tárolni egy adatbázisban/felkerül az oldalra.
Magyarán a vonatkozikrá az a jogszabáj ami az olyan képekre is amit a rajtaszereplő ember engedéje nélkül raknak ki az internetre.
Amikor regisztrál a felhasználó akkor bele egyezik abba, hogy a kézírását felhasználjuk.
Így reméljük hogy a Személység jogok sértését elkerüljük.

## Funkciók



## Követelménylista

+ K1 (Bejelentkezési felület): 
    > A felhasználó a regisztráció során megadott felhasználónévvel és jelszóval tud belépni.
+ K2 (Regisztráció): 
    > A felhasználó kötelezően meg kell adja a felhasználónevét, email címet, és jelszavát. A profilkép feltöltése opcionális. A jelszó kódolva                      kerül fel az adatbázisra. A regisztráció hiányos vagy nem megfelelő kitöltése esetén figyelmezteti az oldal.
+ K3 (Felhasználó modifikáció): 
    > A felhasználó tudja változtatni felhasználónevét és tud feltölteni vagy változtatni profilképet is.
+ K4 (Jelszó módosítása): 
    > A jelszó módosításához szükséges megadni a régi jelszavát, majd az új jelszót kétszer is.
