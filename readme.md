Name: LCTRNC

Description: LCTRNC is a website with all electronic music parties and events in The Netherlands. On our website, a user can add (like) the events that he is interested in on a calendar. The website will also contain pages users and artists profiles together with information pages about the venues. Additionally, there will be a map that shows the upcoming events near the user's location.

Please run 'php artisan migrate:refresh --seed' to get our DB tables and dummies.

Extra packages we used:
- Dingo/api (We had to comment out the handle() method in /vendor/dingo/api/src/Console/Command/Routes.php to make it work)
- Maatwebsite/Excel
- laravelcollective/HTML
- intervention/image

Extras:
- map on user's homepage
- calendar on user's homepage
- each categories' images react different on hover
