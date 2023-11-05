/*
    Авторизация
 */

$('.wrapper__btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            email: email,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = 'profile.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

/*
    Регистрация
 */

// $('.wrapper__btn__register').click(function (e) {
//     e.preventDefault();

//     $(`input`).removeClass('error');

//     let username = $('input[name="username"]').val(),
//         email = $('input[name="email"]').val(),
//         password = $('input[name="password"]').val();
        

//     let formData = new FormData();
//     formData.append('username', username);
//     formData.append('email', email);
//     formData.append('password', password);


//     $.ajax({
//         url: 'registration.php',
//         type: 'POST',
//         dataType: 'json',
//         processData: false,
//         contentType: false,
//         cache: false,
//         data: formData,
//         success (data) {

//             if (data.status) {
//                 document.location.href = 'index.php';
//             } else {

//                 if (data.type === 1) {
//                     data.fields.forEach(function (field) {
//                         $(`input[name="${field}"]`).addClass('error');
//                     });
//                 }

//                 $('.msg').removeClass('none').text(data.message);

//             }

//         }
//     });

// });
