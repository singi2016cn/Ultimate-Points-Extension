<?php
/**
 *
 * @package phpBB Extension - Ultimate Points
 * @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_POINTS' => 'Bekijkt Ultimate Points',
	'BANK_ACCOUNT_OPENING' => 'Open een account',
	'BANK_ACCOUNT_OPENED' => 'Opende een bank account op',
	'BANK_ACTIONS' => 'Handelingen',
	'BANK_BACK_TO_BANK' => '%sKlik hier om terug te keren naar de bank%s',
	'BANK_BACK_TO_INDEX' => '%sKlik hier om terug te keren naar de index%s',
	'BANK_BALANCE' => 'Balans',
	'BANK_BUTTON_DEPOSIT' => 'Storten',
	'BANK_BUTTON_WITHDRAW' => 'Afhalen',
	'BANK_COST' => 'Account kosten per periode',
	'BANK_DEPOSIT_SMALL_AMOUNT' => 'Het kleinste bedrag dat je kan storten is %s %s.',
	'BANK_DEPOSIT_WITHDRAW' => 'Storten & Afhalen',
	'BANK_DESCRIPTION' => 'Je bent hier in onze bank. We rekenen lage kosten voor een uitbetaling, maar we betalen ook geld met een vooraf bepaalde rente. Als je een account opent kan je je geld veilig plaatsen voor overvallen. Het is het dus zeker waard om er eens over na te denken<br /><br />',
	'BANK_DISABLED' => 'Bank is uitgeschakeld',
	'BANK_ERROR_DEPOSIT' => 'Je hebt een onjuist of ongeldig storting bedrag opgegeven',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT' => 'Je bezit niet genoeg %1$s om dit bedrag te storten',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW' => 'Je account heeft niet genoeg %1$s om dit bedrag af te halen',
	'BANK_ERROR_PAYOUTTIME_SHORT' => 'Je moet een hogere uitbetaling opgeven dan <em>Nul</em> in de bank configuratie',
	'BANK_ERROR_WITHDRAW' => 'Je hebt een onjuist of ongeldig afhaling bedrag opgegeven',
	'BANK_FROM_ACCOUNT' => 'van je bank account',
	'BANK_HAVE_DEPOSIT' => 'Je stortte',
	'BANK_HAVE_WITHDRAW' => 'Je haalde af:',
	'BANK_HOLDING' => 'Totaal in de bank',
	'BANK_INFO' => 'Bank Informatie',
	'BANK_INTEREST_PERIOD' => 'Periode voor uitbetaling of interesten',
	'BANK_INTEREST_RATE' => 'Interest Rente',
	'BANK_LEAVE_WITH' => 'Laat je achter met',
	'BANK_MAX_HOLD' => 'Max. waarde voor interesten',
	'BANK_MIN_DEPO' => 'Minimum storten',
	'BANK_MIN_WITH' => 'Minimum afhalen',
	'BANK_NEW_BALANCE' => 'Jouw nieuwe balans is',
	'BANK_NOW_HAVE' => 'Je hebt nu',
	'BANK_NO_ACCOUNT' => 'Gebruiker heeft een account bij %1$s',
	'BANK_NOBODY_IN_BANK' => 'Momenteel heeft niemand %1$s gestort in de %2$s',
	'BANK_ON_HAND' => 'cash in de hand',
	'BANK_OPEN_ACCOUNT' => '%sKlik hier om een account te openen%s',
	'BANK_RICHEST_USER' => 'De rijkste bankier',
	'BANK_START_BALANCE' => 'Jouw start balans is 0.',
	'BANK_TITLE_MAIN' => 'Bank',
	'BANK_TOTAL_ACCOUNTS' => 'Totaal geopende accounts',
	'BANK_TO_ACCOUNT' => 'op je %1$s account',
	'BANK_USER_NO_ACCOUNT' => 'Je hebt nog geen account bij %1$s.',
	'BANK_WELCOME_BANK' => 'Welkom bij de',
	'BANK_WITHDRAW_RATE' => 'Opname Rente',
	'BANK_WITHDRAW_SMALL_AMOUNT' => 'Het kleinste bedrag dat je kan afhalen is %s %s.',
	'BANK_YOUR_ACCOUNT' => 'Je kan nu storten en afhalen naar en van je bank account',

	'EDIT_BANK_MODIFY' => 'Bank Administratie',
	'EDIT_NO_ID_SPECIFIED' => 'je hebt geen gebruikersnaam opgegeven',
	'EDIT_POINTS_ADMIN' => 'Punten Beheerder',
	'EDIT_POINTS_MODIFY' => '%s Administratie',
	'EDIT_POINTS_SET' => 'De gebruikers %1$s werden geupdate.<br /><br />',
	'EDIT_P_BANK_TITLE' => 'hier kan je een gebruikers bank %s bewerken.',
	'EDIT_P_POINTS_TITLE' => 'Hier kan je een gebruikers %s bewerken.',
	'EDIT_P_RETURN_INDEX' => '%1$sKlik hier om terug te keren naar de index.%2$s',
	'EDIT_P_RETURN_POST' => '%1$sKlik hier om terug te keren naar de vorige post.%2$s',
	'EDIT_SET_AMOUNT' => 'Nieuw bedrag',
	'EDIT_ADD_AMOUNT' => 'Voeg bedrag toe',
	'EDIT_SUB_AMOUNT' => 'Bedrag aftrekken',
	'EDIT_USER_NOT_EXIST' => 'Deze gebruiker bestaat niet.',

	'INFO_GENERAL_INFORMATIONS' => 'Algemene Informatie',
	'INFO_ATTACH' => 'Punten per bijlage in een nieuwe post',
	'INFO_ADD_ATTACH' => 'Punten voor iedere nieuwe bijlage',
	'INFO_BONUS_CHANCE' => 'Punten Bonus',
	'INFO_BONUS_CHANCE_EXPLAIN' => 'Je hebt momenteel %1$s&#37; kans om een bonus te winnen van %2$s tot %3$s %4$s',
	'INFO_NO_COST' => 'Momenteel moet je geen %1$s betalen voor dit',
	'INFO_NO_POINTS' => 'Momenteel zal je geen %1$s ontvangen voor dit',
	'INFO_POLL' => 'Punten voor nieuwe polls',
	'INFO_POLL_OPTION' => 'Punten per optie in een nieuwe poll',
	'INFO_TOPIC_WORD' => 'Punten per woord in een nieuw onderwerp',
	'INFO_TOPIC_CHARACTER' => 'Punten per karakter in een nieuw onderwerp',
	'INFO_POST_WORD' => 'Punten per woord in een nieuw bericht',
	'INFO_POST_CHARACTER' => 'Punten per karakter in een nieuw bericht',
	'INFO_COST_DL_ATTACH' => 'Kosten per download van een bijlage',
	'INFO_COST_WARNING' => 'Kosten per waarschuwing',
	'INFO_REG_BONUS' => 'Punten bonus bij een registratie',
	'INFO_FORUM_TOPIC' => '%1$s per forum onderwerp',
	'INFO_FORUM_POST' => '%1$s per forum bericht',
	'INFO_FORUM_EDIT' => '%1$s per forum bewerking',
	'INFO_FORUM_ATT_DOWNLOAD' => '%1$s per forum bijlagen download',
	'INFO_FORUM_COST_TOPIC' => '%1$s kosten per onderwerp in forum',
	'INFO_FORUM_COST_POST' => '%1$s kosten per bericht in forum',

	'LOGS_COMMENT' => 'Reactie',
	'LOGS_DATE' => 'Datum',
	'LOGS_DESCRIPTION' => 'Hier zal je jouw logs zien.<br />Je zal een lijst zien van alle overschrijvingen die je hebt verzonden of ontvangen .<br />Indien je zoekt naar een bepaalde overschrijving kan je gebruik maken van de sorteer optie.<br /><br />',
	'LOGS_REASON_NOLOGS' => 'Er zijn geen logs beschikbaar.',
	'LOGS_RECV' => 'Ontvangen',
	'LOGS_ROBBERY_LOST' => 'Overval verloren',
	'LOGS_ROBBERY_WON' => 'Overval gewonnen',
	'LOGS_SENT' => 'Zenden',
	'LOGS_SORT_COMMENT' => 'Reactie',
	'LOGS_SORT_DATE' => 'Datum',
	'LOGS_SORT_FROMNAME' => 'Van',
	'LOGS_SORT_TONAME' => 'Zenden naar',
	'LOGS_SORT_TYPE' => 'Type',
	'LOGS_TITLE' => '%1$s Logs',
	'LOGS_TO' => 'Naar',
	'LOGS_TYPE' => 'Type',
	'LOGS_WHO' => 'Wie',
	'LOTTERY_ACTIONS' => 'handelingen',
	'LOTTERY_BACK' => 'Terug naar de hoofd lotto pagina',
	'LOTTERY_DATE' => 'Datum',
	'LOTTERY_DESCRIPTION' => 'De waarde van je aangekocht ticket gaat naar de jackpot. De jackpot bezit al %1$s %2$s per ronde. Hoe meer spelers per ronde, hoe hoger da jackpot zal zijn natuurlijk. Na de trekking zal automatisch een willekeurige winnaar gekozen worden. Indien er niemand wint, zal dat bedrag toegevoegd worden bij de volgende jackpot. Mogen de kansen in jouw voordeel zijn!<br /><br />',
	'LOTTERY_DISABLED' => 'De loterij is uitgeschakeld.',
	'LOTTERY_HISTORY' => 'Geschiedenis',
	'LOTTERY_INFO' => 'Loterij Informatie',
	'LOTTERY_INVALID_INPUT' => 'Je moet een geldig getal opgeven om tickets te kunnen kopen.',
	'LOTTERY_JACKPOT' => 'Jackpot',
	'LOTTERY_LACK_FUNDS' => 'U heeft gebrek aan middelen om deze aankoop te doen!',
	'LOTTERY_LAST_WINNER' => 'De laatste lotto winnaar was',
	'LOTTERY_MAX_TICKETS' => 'Max. aantal tickets per ronde en speler',
	'LOTTERY_MAX_TICKETS_LEFT' => 'Je hebt nog maar <strong>%1$s</strong> tickets over die kunnen gekocht worden in deze ronde!',
	'LOTTERY_MAX_TICKETS_REACH' => 'Je mag niet meer dan <strong>%1$s</strong> tickets aankopen per ronde.!',
	'LOTTERY_NEGATIVE_TICKETS' => 'Je kan geen 0 of minder tickets aankopen<br />Je moet ten minste 1 ticket aankopen!',
	'LOTTERY_NEVER_WON' => 'Je hebt de lotto nog nooit gewonnen!',
	'LOTTERY_NEXT_DRAWING' => 'De volgende trekking is op',
	'LOTTERY_NO_WINNER' => 'Geen winnaar deze ronde',
	'LOTTERY_NO_WINNERS' => 'Er heeft nog niemand de lotto gewonnen.',
	'LOTTERY_PLAYERS' => 'Aantal spelers tot nu',
	'LOTTERY_PM_BODY' => 'Gefeliciteerd! Je hebt %1$s gewonnen in onze loterij! %2$s',
	'LOTTERY_PM_CASH_ENABLED' => 'Je gewonnen geld werd op je account gestort. Veel plezier ermee! [i]The Lottery Management[/i]',
	'LOTTERY_PM_COMMISION' => 'Het Loterij Beheer',
	'LOTTERY_PM_SUBJECT' => 'Je hebt de lotto gewonnen!!',
	'LOTTERY_PURCHASE_TICKET' => 'Koop Ticket',
	'LOTTERY_PURCHASE_TICKETS' => 'Koop Tickets',
	'LOTTERY_TICKETS' => 'Momenteel aantal verkochte tickets',
	'LOTTERY_TICKET_COST' => 'Ticket Kosten',
	'LOTTERY_TICKET_PURCHASED' => 'Je ticket aankoop is compleet!',
	'LOTTERY_TITLE_DESCRIPTION' => 'Wat zijn de regels op te spelen?',
	'LOTTERY_TITLE_MAIN' => 'Loterij',
	'LOTTERY_TOTAL_WINNERS' => 'Totaal Winnaars',
	'LOTTERY_VIEWER_TICKETS' => 'Tickets in je bezit',
	'LOTTERY_VIEW_HISTORY' => 'Bekijk vorige winnaars',
	'LOTTERY_VIEW_SELF_HISTORY' => 'Bekijk jouw win geschiedenis',
	'LOTTERY_WINNINGS' => 'Gewonnen bedrag',
	'LOTTERY_WON' => 'Gewonnen door',
	'LOTTERY_WINNER_INDEX' => 'De laatste lotto winnaar: %1$s',
	'LOTTERY_MCHAT_PURCHASE' => 'Heeft met succes [b]%2$s %3$s[/b] tickets gekocht :D',
	'LOTTERY_MCHAT_WINNER' => 'Won net [b]%2$s[/b] in de [b]%3$s[/b] :o',

	'MAIN_BANK_HAVE' => 'Op je bank account heb je een extra %1$s %2$s.',
	'MAIN_HELLO_USERNAME' => 'Hallo %1$s !',
	'MAIN_LOTTERIES_NONE' => 'Nog geen winnaar..',
	'MAIN_LOTTERY_TICKETS' => 'Je bezit momenteel %1$s tickets.',
	'MAIN_LOTTERIES_WON' => 'Meest gewonnen loterijen',
	'MAIN_MOST_DONATED' => 'Meest gedoneerd',
	'MAIN_MOST_DONATED_NONE' => 'Nog geen donaties gedaan..',
	'MAIN_ON_HAND' => 'je hebt momenteel %1$s %2$s cash in de hand.',
	'MAIN_RICH_BANK' => 'Rijkste bankier',
	'MAIN_RICH_BANK_NONE' => 'Niemand in de bank..',
	'MAIN_USERNAME_LOCKED' => 'Deze gebruiker is geblokkeerd en kan het punten systeem niet gebruiken.',

	'NOTIFICATION_BANK_PAYOUT' => 'Je bank interesten werden uitbetaald en toegevoegd op je account',
	'NOTIFICATION_RANDOM_BONUS' => 'Je ontving %1$s %2$s als willekeurige bonus!',
	'NOTIFICATION_ROBBERY_FAILED' => 'heeft geprobeerd om je te overvallen, maar was niet succesvol!',
	'NOTIFICATION_ROBBERY_SUCCES' => 'heeft %1$s %2$s gestolen van jou!',
	'NOTIFICATION_POINTS_UCP' => 'Ontvang notificaties van de punten <em>(succesvol/mislukte overval, bonus punten, enz..)</em>',

	'POINTS' => 'Punten',
	'POINTS_ATTACHMENT_MINI_POSTS' => 'Je hebt meer %1$s nodig om deze bijlage te downloaden!',
	'POINTS_BANK' => 'Bank',
	'POINTS_BPOINTS_TOTAL' => 'Totaal op de bank: %1$s %2$s',
	'POINTS_BOT_GUEST' => '<strong>Als je geregistreerd zou zijn bij ons, zou je deze functie kunnen gebruiken!</strong>',
	'POINTS_BUPOINTS_TOTAL' => 'Bank Accounts : %1$s',
	'POINTS_CASH_ON_HAND' => 'Cash in de hand',
	'POINTS_COPYRIGHT' => 'Ultimate Points door <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a> v',
	'POINTS_COPYRIGHTS' => '&copy; 2016 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx &amp; posey</a>',
	'POINTS_DESCRIPTION' => 'Beschrijving',
	'POINTS_DISABLED' => 'Ultimate Points is momenteel uitgeschakeld.',
	'POINTS_DONATE' => '[Doneer]',
	'POINTS_DOWNLOAD_COST' => 'Download Kosten',
	'POINTS_EXPLAIN' => 'Ultimate Points',
	'POINTS_INFO' => 'Informatie',
	'POINTS_INFO_DESCRIPTION' => 'Hier zal je meer informatie vinden over ons %1$s beleid.<br /><br />In aanvulling van deze waarden kunt u extra %1$s ontvangen in bepaalde onderwerpen.<br /><br />Houd u er aub rekening mee dat de forum eigenaar de mogelijkheid heeft om volledige forums uit te sluiten om %1$s te ontvangen!',
	'POINTS_INSUFFICIENT_POST' => 'Je hebt niet voldoende %2$s om een bericht te maken in deze onderwerp. De kosten om een bericht te maken in dit forum zijn <strong>%1$s %2$s</strong>.',
	'POINTS_INSUFFICIENT_TOPIC' => 'Je hebt niet voldoende %2$s om een nieuw onderwerp te maken in dit forum. De kosten om een onderwerp te maken in dit forum zijn <strong>%1$s %2$s</strong>.',
	'POINTS_LOCKED' => 'Gesloten',
	'POINTS_LOGS' => 'Logs',
	'POINTS_LOG_COUNT' => [
		1 => '%d inzending',
		2 => '%d inzendingen',
	],
	'POINTS_LIST_DISABLE' => 'Ultimate Points lijst uitgeschakeld',
	'POINTS_LIST_NO_USER' => 'Geen gebruikers met punten',
	'POINTS_LIST_USER' => '1 gebruiker',
	'POINTS_LIST_USERS' => '%s gebruikers',
	'POINTS_LOG_TOTAL' => 'Totaal',
	'POINTS_LOTTERY' => 'Loterij',
	'POINTS_LOTTERY_TIME' => 'Volgende %1$s trekking: %2$s',
	'POINTS_MODIFY' => '[Bewerk]',
	'POINTS_MOST_RICH_CASH_USERS' => 'Gebruikers met het meeste cash',
	'POINTS_MOST_RICH_USERS' => 'Top %1$s rijkste gebruiker',
	'POINTS_MOST_RICH_USERS_DISABLED' => 'Deze vertoning is uitgeschakeld door de beheerder',
	'POINTS_NO_USER' => 'Deze gebruikersnaam is ongeldig',
	'POINTS_NUMBER_FORMAT_EXPLAIN' => 'Hint: Voer altijd waarden in zonder scheidingsteken voor duizendtallen en decimalen met een punt. Vb. 1000.50',
	'POINTS_OPTIONS' => 'Opties',
	'POINTS_OVERVIEW' => 'Overzicht',
	'POINTS_RECEIVED_EDIT_MESSAGE' => 'Je ontving <strong>%1$s %2$s</strong> voor het bewerken van deze post',
	'POINTS_RECEIVED_POST_MESSAGE' => 'Je ontving <strong>%1$s %2$s</strong> voor je nieuwe onderwerp',
	'POINTS_RECEIVED_REPLY_MESSAGE' => 'Je ontving <strong>%1$s %2$s</strong> voor je nieuwe bericht',
	'POINTS_RETURN_INDEX' => 'Klik hier om terug te keren naar de index',
	'POINTS_ROBBERY' => 'Overval',
	'POINTS_SEPARATOR_DECIMAL' => '.',
	'POINTS_SEPARATOR_THOUSANDS' => ',',
	'POINTS_STATISTICS' => 'Punten statistieken',
	'POINTS_TITLE_MAIN' => '%1$s Controle Paneel',
	'POINTS_TOTAL' => 'Totaal Cash In De hand: %1$s %2$s',
	'POINTS_TRANSFER' => 'Overschrijving',
	'POINTS_VIEWING' => 'Blader door punten console',
	'POINTS_TRANSFER_RECIEVED' => 'Donaties ontvangen',

	'ROBBERY_AMOUNT' => 'Bedrag',
	'ROBBERY_AMOUNTLOSE' => 'Indien u niet succesvol bent zal u een extra <strong> %s procent</strong> verliezen van het bedrag dat je wou stelen!<br /><br />',
	'ROBBERY_BAD' => 'Sorry ... je overval is mislukt!',
	'ROBBERY_DATE' => 'Overvallen op datum',
	'ROBBERY_CHANCE' => 'Hier kan je een andere gebruiker proberen te overvallen. Maar je kan maar <strong>%1$s procent</strong> stelen van de gebruiker zijn/haar cash in de hand bedrag!<br /><br />Zoals in het echte leven is de misdaad niet altijd succesvol. Je kans op een succesvolle overval is <strong> %2$s procent</strong>.',
	'ROBBERY_DISABLED' => 'Het overval systeem is uitgeschakeld',
	'ROBBERY_MAX_ROB' => 'Je kan niet meer stelen dan <strong>%1$s procent</strong> van de gebruiker zijn/haar cash bedrag in 1 keer!',
	'ROBBERY_NO_ID_SPECIFIED' => 'Je hebt geen gebruikersnaam opgegeven',
	'ROBBERY_SELF' => 'Je kan jezelf niet overvallen.',
	'ROBBERY_SET_AMOUNTR' => 'Het bedrag dat je wenst te stelen',
	'ROBBERY_SET_USERNAMES' => 'Namen van de gebruikers die je overvallen hebben!',
	'ROBBERY_SET_USERNAMER' => 'Gebruikersnaam van de gebruiker die je wenst te overvallen',
	'ROBBERY_START' => 'Start Overval',
	'ROBBERY_SUCCESFUL' => 'Je hebt succesvol een grote overval gepleegd!',
	'ROBBERY_TOO_SMALL_AMOUNT' => 'Je moet een beetje meer stelen!<br />Het opgegeven bedrag is te klein ...',
	'ROBBERY_TO_MUCH' => 'Je probeert te weinig punten te stelen. Als je mislukt zal je de schade niet kunnen betalen...',
	'ROBBERY_TO_MUCH_FROM_USER' => 'Je probeert meer te stelen dan dat deze gebruiker heeft.',
	'ROBBERY_USER' => '[Start Overval]',
	'ROBBERY_TO_NAME' => 'Je wil enkele <strong>%2$s</strong> stelen van <strong>%1$s</strong>',
	'ROBBERY_MCHAT_FAIL' => '%1$s wil [b]%2$s %3$s[/b] van mij stelen maar heeft gefaald! :lol:',
	'ROBBERY_MCHAT_GOOD' => '%1$s Heeft me met succes beroofd van [b]%2$s %3$s[/b] :o',

	'TRANSFER_AMOUNTS' => 'Bedrag',
	'TRANSFER_SET_USERNAMES' => 'Namen van de gebruikers die je een donatie gedaan hebben!',
	'TRANSFER_DATE' => 'Overschrijving ontvangen op',
	'TRANSFER_RECEIVED_DISABLED' => 'Het overschrijving systeem is uitgeschakeld',
	'TRANSFER_RECEIVED' => '%1$s ontvangen',
	'TRANSFER_MCHAT_GOOD' => '%1$s heeft me met succes gedoneerd [b]%2$s %3$s[/b] :D',

	'TIME_DAY' => 'dag',
	'TIME_DAYS' => 'dagen',
	'TIME_HOUR' => 'uur',
	'TIME_HOURS' => 'uren',
	'TIME_MINUTE' => 'min',
	'TIME_MINUTES' => 'min',
	'TIME_MONTH' => 'maand',
	'TIME_MONTHS' => 'maanden',
	'TIME_SECOND' => 'sec',
	'TIME_SECONDS' => 'sec',
	'TIME_WEEK' => 'week',
	'TIME_WEEKS' => 'weken',
	'TIME_YEAR' => 'jaar',
	'TIME_YEARS' => 'jaren',
	'TRANSFER_AMOUNT' => 'Over te schrijven bedrag',
	'TRANSFER_COMMENT' => 'Commentaar',
	'TRANSFER_DESCRIPTION' => 'Hier kan je enkele %1$s overschrijven. Voeg de gebruikersnaam van de ontvanger in en het bedrag dat je wenst te doneren. Klik dan op verzenden. De overschrijving zal opgeslagen worden in je log bestanden..',
	'TRANSFER_FEE' => 'Overschrijving vergoeding',
	'TRANSFER_FEE_EXPLAIN' => 'Percentage dat wordt afgehouden van je overschrijving',
	'TRANSFER_NO_USER_RETURN' => '<strong>De geselecteerde gebruikersnaam is ongeldig!</strong>',
	'TRANSFER_PM_BODY' => 'Je hebt een donatie ontvangen van %1$s %2$s met de volgende commentaar: [i]%3$s[/i]',
	'TRANSFER_PM_BODY_USER' => 'Je hebt een donatie ontvangen van %1$s %2$s.',
	'TRANSFER_PM_SUBJECT' => 'Je hebt een donatie ontvangen!',
	'TRANSFER_REASON_MINPOINTS' => 'Je hebt niet genoeg %1$s om over te schrijven.',
	'TRANSFER_REASON_TRANSFER' => 'De beheerder heeft overschrijvingen uitgeschakeld',
	'TRANSFER_REASON_TRANSUCC' => 'Je hebt succesvol <strong>%1$s %2$s</strong> over geschreven naar <strong>%3$s</strong>!',
	'TRANSFER_REASON_UNDERZERO' => 'Je kan niet minder dan 0.00 %1$s overschrijven.',
	'TRANSFER_REASON_YOURSELF' => 'Je kan geen %1$s naar jezelf overschrijven!',
	'TRANSFER_SET_USERNAME' => '<b>Naam van de gebruiker die je wenst te doneren:</b>',
	'TRANSFER_TITLE' => '%1$s Overschrijving',
	'TRANSFER_TO_NAME' => 'Je wil enkele <strong>%2$s</strong> overschrijven naar <strong>%1$s</strong>',

	'UP_INSERT_FIRST_FILL' => 'De tabellen werden succesvol gevuld met enkele fundamentele datas.',
	'UP_REMOVE_CONFIG_ENTRIES' => 'De opgaven in de config tabel werden met succes verwijderd',
	'UP_REMOVE_FORUM_ENTRIES' => 'De opgaven in de forum tabel werden met succes verwijderd',
	'UP_ULTIMATE_POINTS_NAME' => 'Ultimate Points',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN' => 'Met deze extensie zal je gebruikers de mogelijkheid geven om punten te verzamelen en te spenderen. Klik op onderstaande handelingen om aan te geven wat je wenst te doen. Inschakelen van <strong>Toon Volledige Resultaten</strong> is aangeraden.<br /><br />Veel plezier!',
	'UP_UPDATE_SUCCESFUL' => 'De tabellen werden succesvol geupdate',

	'ULTIMATEPOINTS_VERSION' => 'Versie',

	'WARN_USER_POINTS' => 'Daarbij hebben we %1$s %2$s afgetrokken van je account!',
	'WARN_MOD_POINTS' => 'Daarbij werden %1$s %2$s afgetrokken van je %3$s’s account!',
]);
