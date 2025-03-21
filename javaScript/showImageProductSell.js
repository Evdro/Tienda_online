document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al input file y al elemento donde se mostrará la imagen
    const fileInput = document.getElementById('fileInput');
    const showUploadedImage = document.getElementById('showUploadedImage');

    // Escuchar el evento change del input file
    fileInput.addEventListener('change', function() {
        // Verificar si se ha seleccionado un archivo
        if (fileInput.files && fileInput.files[0]) {
            // Crear un objeto FileReader
            const reader = new FileReader();

            // Escuchar el evento load, que se dispara cuando se completa la lectura del archivo
            reader.onload = function(e) {
                // Actualizar la imagen mostrada con el contenido del archivo seleccionado
                showUploadedImage.src = e.target.result;
            }

            // Leer el contenido del archivo como una URL de datos
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    // Asignar un evento click al botón de upload
    const btnUploadImage = document.getElementById('btnUploadImage');
    btnUploadImage.addEventListener('click', function() {
        // Aquí puedes agregar la lógica para subir la imagen al servidor si es necesario
    });
});