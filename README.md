Second project based on LARAVEL

********************************************* CRUD kūrimas: *********************************************

1.Sukurti projektą: New Terminal>composer create-project laravel/laravel 20220122_project.
2.Patikrinti ar viskas susikūrė, ar atsirado projektas + įkelti į github
3.Įeiti į projektą per cd 20220122_project
4.Per PhPMyAdmin sukurti duomenų bazę "20220122_project" ir nustatyti šriftą utf8mb4_unicode_ci + "create"
5.Faile ".env" 14 eilutėje pakeisti "laravel" į "20220122_project"
6.Direktorijos "Config" faile "Database.php" 60 eilutėje pakeisti "null" į "'InnoDB'", su viengubomis kabutėmis!
7.Paleisti projekto vykdymą/serverį per "php artisan serve"
8.Terminalo viršutiniame dešiniajame kampe įsitikinti, kad paleistas tik vienas projektas. Esant dviems, geriau išvis visus uždaryti, iškviesti naujai terminalą "New Terminal", įeiti į direktoriją cd "projekto_pavadinimas" ir paleisti "php artisan serve".
9.Naršyklėje "public" direktorijoje paleisti "index.php" ir įsitikinti ar pasileido projektas - nebūtinas, už-tenka php artisan serve ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
10.Sukurti modelį/-ius terminale panaudojus "php artisan make:model pavadinimas --all" (vienaskaita!). Būtinai prirašyti "--all", kitaip nesukurs visko.
11.Turi būti viskas žaliai terminale
12.Pasitikrinti ar "App>Http>Controllers" aplanke susikūrė PavadinimasController.php ir App>Models atsirado modelis Pavadinimas.php?
13.Patikriname ar "App>Database>migrations" aplanke atsirado Metai_menuo_diena_numeris_create_pavadinimas(daugiskaita)__table.php failas? Kiekvienam modeliui! 
14.ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
15.Paruošiau iš ankstesnio projekto welcome.blade.php su meniu į 3 modelius
