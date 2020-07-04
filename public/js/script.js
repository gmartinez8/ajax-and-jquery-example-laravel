$(document).ready(function(){
    $('#alert').hide();

    $('.btn-delete').click(function(e){
        e.preventDefault();
        if(! confirm("Are you sure you want to delete this product?") ){
            return false;
        }else{
            var row = $(this).parents('tr');
            var form = $(this).parents('form');
            var url = form.attr('action');

            console.log(url);

            $('#alert').show();

            $.post(url, form.serialize(), function (result) {
                row.fadeOut();
                $('#productsTotal').html(result.total);
                $('#alert').html(result.message);
                return false;
            }).fail(function () {
                $('#alert').html('Something went wrong');
            });
        }
    });
});