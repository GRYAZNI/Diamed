document.addEventListener('DOMContentLoaded', function() {
    // Инициализация EmailJS
    emailjs.init("I_lGKBppHpDGbFu9s");

    // Обработчик события отправки формы
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Собираем данные формы
            var formData = {
                from_name: this.user_name.value,  // соответствует {{from_name}}
                phone: this.user_phone.value       // соответствует {{phone}}
            };

            // Отправка данных через EmailJS
            emailjs.send("service_b8qzfbk", "template_g6z3h7a", formData)
                .then(function(response) {
                    console.log('Успех!', response.status, response.text);
                    alert('Ваше сообщение было отправлено успешно!');
                }, function(error) {
                    console.log('Ошибка...', error);
                    alert('Произошла ошибка при отправке сообщения.');
                });
        });
    } else {
        console.error("Element with id 'contact-form' not found.");
    }
});
