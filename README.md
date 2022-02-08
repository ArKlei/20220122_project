2022-01-22 Laravel užduotis
Due January 23, 2022 11:59 PM
Instructions
1. Susikurti naują Laravel projektą.
2. Nueiti per terminalą į projekto aplanką. Komanda:
cd projekto_pavadinimas
3. Sukurti modelį Student. Rašyti būtinai vienaskaita. Struktūra:
ID
name(string)
surname(string)
group_id(bigInt)
image_url(string)
4. Sukurti modelį AttendanceGroup. Rašyti būtinai vienaskaita. Struktūra:
ID
name(string)
description(longText)
difficulty(string)
school_id(bigInt)
5. Sukurti modelį School. Rašyti būtinai vienaskaita. Struktūra:
ID
name(string)
description(longText)
place(string)
phone(bigInt)
6. Kiekvienam modeliui sukurtį Factory ir Seeder. Panaudoti kuo įvairesnius Faker kintamuosius. Nuoroda: https://fakerphp.github.io/formatters/
7. Tiek Student, tiek AttendanceGroup, tiek School, sukurti kelius, per kuriuos galima atlikti visas CRUD operacijas.
8. Student index.blade.php lentelėjė vietoje group_id, turi atvaizduoti grupės pavadinimą(AttendanceGroup.name)
9. AttendanceGroup index.blade.php lentelėje vietoje school_id turi atvaizduoti School.name
10. AttendanceGroup index.blade.php lentelėje reikia sukurti stulpelį, kuriame matytųsi, kiek grupė turi studentų.
11. School index.blade.php reikia sukurti stulpelį, kuriame matytųsi, kiek mokykloje yra grupių.

Used CRUD, relations in DB, later added autorization and changed views to connect with app.blade.php
