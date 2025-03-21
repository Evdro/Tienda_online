document.addEventListener('DOMContentLoaded', function() {
    // Selecciona el formulario
    const form = document.querySelector('form[action="../backend/registerComentary.php"]');

    // Agrega un event listener para el evento submit
    form.addEventListener('submit', function(event) {
      // Previene el envío del formulario
      event.preventDefault();

      // Realiza una solicitud AJAX para enviar los datos del formulario
      fetch(this.action, {
        method: this.method,
        body: new FormData(this)
      })
      .then(response => response.json())
      .then(data => {
        // Verifica si la respuesta fue exitosa
        if (data.success) {
          // Muestra el SweetAlert de éxito
          Swal.fire({
            icon: 'success',
            title: 'Comentario realizado',
            showConfirmButton: false,
            timer: 1000
          });
          // Limpia el campo de comentario después de enviarlo con éxito
          this.querySelector('.comentaryField').value = '';
        } else {
          // Muestra el SweetAlert de error si la respuesta no fue exitosa
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: data.message
          });
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
    });
  });