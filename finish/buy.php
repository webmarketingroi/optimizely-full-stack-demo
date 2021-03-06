<?php 
include __DIR__ . '/vendor/autoload.php';
use Optimizely\Optimizely;
use Optimizely\Notification\NotificationType;

session_start();

$userId = $_COOKIE['FullStackEndUserId'];

$datafile = file_get_contents('https://cdn.optimizely.com/json/7981220167.json');

$optimizely = new Optimizely($datafile);

$optimizely->notificationCenter->addNotificationListener(NotificationType::TRACK, function($trackObject){
    file_put_contents('/tmp/optimizely-fullstack-events.log',  date('Y-m-d H:i:s') . " Track event: ". json_encode($trackObject) . "\n", FILE_APPEND);
});

$variationKey = $optimizely->activate('headline_test', $userId);

$eventTags = [
	'productName' => $_GET['title'],
	'purchasePrice' => (float)$_GET['price'],
	'revenue' => (int)(100 * $_GET['price']),
];
$optimizely->track('Purchase', $userId, null, $eventTags);

header('Location: thank-you.php');
?>

