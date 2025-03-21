document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action="../backend/registerComentary.php"]');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      fetch(this.action, {
        method: this.method,
        body: new FormData(this)
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          Swal.fire({
            icon: 'success',
            title: 'Comentario realizado',
            showConfirmButton: false,
            timer: 1000
          });
          this.querySelector('.comentaryField').value = '';
        } else {
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
