function fetchChapterTable(str) {
    var req = new XMLHttpRequest();
    req.open("get", "_chapterTable.php?courseID=" + str, true);
    req.send();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById("")
        }
    }
}