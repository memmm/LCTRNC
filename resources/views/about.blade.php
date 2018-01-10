@extends('master')

@section('content')

<h2>This is the about section</h2>

Name: LCTRNC

Description: LCTRNC is a website with all electronic music parties and events in The Netherlands. On our website, a user can add (like) the events that he is interested in on a calendar. The website will also contain pages users and artists profiles together with information pages about the venues. Additionally, there will be a map that shows the upcoming events near the user's location.

Please run 'php artisan migrate:refresh --seed' to get our DB tables and dummy data.
<br>
Moderator credentials: mod@example.com/secret (You need moderator or admin rights to modify venues/events/artists)
<br>
<ul> Extra packages we used:<br>
<li> Dingo/api (We had to comment out the handle() method in /vendor/dingo/api/src/Console/Command/Routes.php to make it work)</li>
<li> Maatwebsite/Excel</li>
<li> laravelcollective/HTML </li>
<li> intervention/image </li></ul>

 <ul>
  Extras:

<li> map on user's homepage</li>
<li> calendar on user's homepage</li>
<li> each categories' images react different on hover</li>
<li> users and events can be downloaded in an excel file or be checked in JSON format by a moderator or admin</li>
<li> events can be assigned to one venue</li>
<li> user can add events to his/her list</li>
</ul>
@stop
