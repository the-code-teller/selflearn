<nav class="navbar navbar-expand-lg navbar-dark bg-success p-0 sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="/selfLearn/">selfLearn</a> -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/selflearn/"><h3>selfLearn</h3></a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex">
                <?php

                    if ($loggedin) {
                        echo"
                        <li class='nav-item'>
                            <a href='/selflearn/profile' class='btn nav-link' role='button'>$studentFirstName</a>
                         </li>
                        <li class='nav-item mx-1'>
                            <a href='/selflearn/logout.php' class='btn nav-link' role='button'>Logout</a>
                        </li>
                        ";
                    } else {

                        echo '
                            <li class="nav-item mx-1">
                            <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#signinModal">Sign In</button>
                            </li>
                            <li class="nav-item mx-1">
                                <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
                            </li>
                        ';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>

<?php

include "_signupModal.php";
include "_signinModal.php";

?>