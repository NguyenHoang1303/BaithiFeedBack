$(document).ready(function () {

    const name = $('input[name=name]');
    const email = $('input[name=email]');
    const phone = $('input[name=phone]');
    const feedback = $('textarea[name=feedback]');

    $('form[name=form-create]').submit(function (event) {
        event.preventDefault();

        const data = {
            name: name.val(),
            email: email.val(),
            phone: phone.val(),
            feedback: feedback.val(),
        }
        $.ajax({
            url: 'http://localhost:5000/ManagerFeedBack/api/processForm.php',
            method: 'POST',
            data: JSON.stringify(data),
            success: function (response) {
                alert('Creat new road success!');
                console.log(response.message);

            },
            error: function (response) {
                alert("Creat new fail!");
                console.log(response.message);
            }
        });

    });

});