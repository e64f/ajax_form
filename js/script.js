$("#form").submit(function(e) {
    e.preventDefault();

    if (
        $("input[Name='name']").val().length < 4 &&
        $("input[Name='phone']").val().length < 4 &&
        $("input[Name='email']").val().length < 4
    ) {
        alert("All inputs must inserted more than 4 symbols");
    } else {
        var formData = $('#form').get(0);

        $.ajax({
            url: "feedback.php",
            type: 'POST',
            data: new FormData(formData),
            success: function() {
                $('input[type="text"]').val('');
                $('#filelist').html('');
                alert("Submited");
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
});



$('.btn-plus').on('click', function() {
    $('#filelist').append('<div class="filelist-item"><input type="file" name="files[]" multiple=""></div>');
    return false;
});

$('.btn-minus').on('click', function() {
    let div = $('.filelist-item:last');
    div.remove();
    return false;
});