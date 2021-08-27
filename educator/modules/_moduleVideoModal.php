<?php

echo "<!-- Modal -->
    <div class='modal fade' id='moduleVideoModal$moduleID' tabindex='-1' aria-labelledby='updateChapterModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='updateChapterModalLabel'>$moduleTitle</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";

                echo "<iframe width='900' height='550' src='/selflearn/educator/video/$moduleFileName' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

                echo "</div>
            </div>
        </div>
    </div>";

?>