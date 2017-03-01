include_once 'web/apply/param/merchantRequestParameter.php';
include_once 'web/apply/response/responseProcessor.php';
include_once 'web/buy/request/generator/generatorUtility.php';

// Start the session
session_start();

// Grab the two POST variables
if(isset($_REQUEST['eapps_merchantData']) && isset($_REQUEST['eapps_hopData'])){
	$encrypted_merchantData_param = $_REQUEST['eapps_merchantData'];
	$encrypted_hopData_param = $_REQUEST['eapps_hopData'];
} else {
	// No proper POST variables - handle in a graceful way...
	exit("No post vars");
}

// Store the hopData paramater in a session variable to use later
$_SESSION['hopData_param'] = $encrypted_hopData_param;

// Decrypt the eapps_merchantData parameter
// Specify the location of the AES key file
$keyFilePath = "/path/to/file/keyfile.key";
try {
	// Decrypt with the generateResponse method
	$outputDecrypted = ResponseProcessor.generateResponse($encrypted_param, $keyFile); 
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
