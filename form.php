<?php
include 'assets/data/form_data.php'; // Assurez-vous que le chemin vers votre fichier form_data.php est correct

echo '<div class="row mt-4">';

foreach ($name as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}

foreach ($coord as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}
?>