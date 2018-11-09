$(function () {

        $('contactform').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'mail/contact.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });