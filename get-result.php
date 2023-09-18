<?php
$pageTitle = "Get Result";
include "view-header";
?>
<h1>Get Result</h1>
<?php
  if(isset($_GET['my-name'])) {
?>
    <p>The value sent is:</p>
<?php
    echo $_GET['my-name'];
  } else {
?>
   <p>Nothing sent to the page.</p> 
<?php
}
include "view-footer";
?>
