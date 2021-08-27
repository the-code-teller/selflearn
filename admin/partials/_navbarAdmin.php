<?php

if ($adminLoggedin) {
    echo"<nav class='navbar navbar-expand-lg navbar-dark bg-success p-0'>
        <div class='container-fluid'>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarTogglerDemo01'
                aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
                <!-- <a class='navbar-brand' href='/selfLearn/'>selfLearn</a> -->
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='/selflearn/admin/home/'><h3>selfLearn Admin Area</h3></a>
                    </li>
                </ul>
                <ul class='navbar-nav d-flex'>
                    <li class='nav-item'>
                        <a data-bs-toggle='modal' data-bs-target='#updateAdminModal' class='btn nav-link' role='button'>$adminName</a>
                    </li>
                    <li class='nav-item mx-1'>
                        <a href='/selflearn/admin/logout.php' class='btn nav-link' role='button'>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
    
    include "_updateAdminModal.php";
}

?>