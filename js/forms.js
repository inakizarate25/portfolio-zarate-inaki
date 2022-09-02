const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Enviando...';

   const serviceID = 'default_service';
   const templateID = 'template_0iv74ij';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Enviar';
      alert('Enviado!!');
     setTimeout(function() {
        window.location.replace("contacto.html");
     },2000);
    }, (err) => {
      btn.value = 'Enviar';
      alert(JSON.stringify(err));
    });
});