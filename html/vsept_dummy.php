<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 4/19/18
 * Time: 3:50 PM
 */

// Receive the contents from the post
// Extract the ID field
// Push something back, so we know it's done...
$postdata = file_get_contents("php://input");
file_put_contents("/tmp/postdata", $postdata);

$results = simplexml_load_string($postdata);
$source_id = $results->Item->SourceProspectId;

$output_id = uniqid("vsept");

header("Content-Type: text/xml");
print <<<HERE
<AddProspectResults>
<Prospect>
<SourceProspectId>$source_id</SourceProspectId>
<PCHId>$output_id</PCHId>
</Prospect>
<Prospect>
</AddProspectResults>
HERE;
