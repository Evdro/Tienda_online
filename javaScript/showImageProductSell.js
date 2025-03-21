document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById('fileInput');
    const showUploadedImage = document.getElementById('showUploadedImage');

    fileInput.addEventListener('change', function() {
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                showUploadedImage.src = e.target.result;
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    // Asignar un evento click al botón de upload
    const btnUploadImage = document.getElementById('btnUploadImage');
    btnUploadImage.addEventListener('click', function() {
    });
});
