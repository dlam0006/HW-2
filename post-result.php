<?php
$pageTitle = "Post Result";
include "view-header";
?>
<h1>Post Result</h1>
<?php
echo getDisplay();
include "view-footer";

function getDisplay() {
  if(isset($_POST['my-name'])) {
    return "<p>The value sent is:</p>" . $_POST['my-name'];
  } else {
    return "<p>Nothing posted to the page.</p>";
}
}
?>
