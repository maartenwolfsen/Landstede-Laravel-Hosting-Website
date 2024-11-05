## Wie is hier nou de hosting!?
## Installeren

<ol>
    <li><code>git@github.com:maartenwolfsen/Landstede-Laravel-Hosting-Website.git</code> clone de repository</li>
    <li><code>cd mapnaam</code> Ga de cloned map in</li>
    <li><code>sudo apt install php-xml</code> Installeer de XML package voor PHP</li>
    <li><code>composer update</code> Update de Composer packages</li>
    <li><code>composer install</code> Installeer de Composer packages</li>
    <li><code>npm install</code> Installeer de NPM packages</li>
    <li><code>cp .env.example .env</code> Kopieer de .env file naar een eigen file</li>
    <li><code>php artisan key:generate</code> Genereer een applicatie sleutel</li>
    <li>Maak een database aan met een eigen naam</li>
    <li>Zet de gegevens (naam, username, wachtwoord e.d.) in het nieuwe .env bestand</li>
    <li><code>php artisan migrate</code> Maak de database tables / fields aan</li>
    <li><code>php artisan db:seed</code> Vul de database met testgegevens</li>
</ol>

## Notities
- Let op, deze installatie vraagt om PHP versie 8 
