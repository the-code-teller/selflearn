<?php

echo "<!-- Modal -->
    <div class='modal fade' id='studentDPModal$studentID' tabindex='-1' aria-labelledby='studentDPModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='studentDPModalLabel'>$studentFirstName $studentLastName</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <img src='../../$studentDP' alt='Student Profile Picture'>
                <div class='modal-body'>$studentDP</div>
            </div>
        </div>
    </div>";

?>