$(document).ready(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#form-contatct').submit(function (e){
            e.preventDefault()

            let url = '/email'

            let data = {
                'name': $(this).find('input[name="name"]').val(),
                'email': $(this).find('input[name="email"]').val(),
                'subject': $(this).find('input[name="subject"]').val(),
                'message': $(this).find('textarea[name="message"]').val()
            }


            $.ajax({
                url: url,
                type: 'post',
                data: data,
                //dataType: 'json',
                success: function (response) {
                    console.log(response)

                },
                error: function (error) {

                },
                beforeSend: function () {

                },
            })


        })

})
