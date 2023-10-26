<?php
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/*">
    <input type="submit" value="Upload">
</form>
<button onclick="openPopup()">Upload Pictures</button>

<div id="upload-popup" class="popup">
    <div class="popup-content">
        <span class="close-popup" onclick="closePopup()">&times;</span>
        <?php include('upload-pictures.php'); ?>
    </div>
</div>

<script> 
function openPopup() {
    document.getElementById('upload-popup').style.display = 'block';
}

function closePopup() {
    document.getElementById('upload-popup').style.display = 'none';
}

</script>