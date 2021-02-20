<?php

include "../partials/_starterHeadAdmin.php";

include "alerts/_changePassAlert.php";
include "alerts/_addAdminAlert.php";

if ($adminLoggedin) {
    include "../partials/_navtabs.php";
}

include "../partials/_starterTailAdmin.php";

?>