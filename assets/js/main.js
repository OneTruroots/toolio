
$(document).ready(function() {
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    // Removes a column
    $('#plus-flap').click(function() {
        $('#plus-flap').fadeOut();
        $('#category-form').slideToggle();
    });

    $(document).on('click', '.remove-btn', function(e) {
        var id = this.id.replace('remove_','');
        if ($('#delete-form-' + id + '.hide-cell').hasClass("hide-cell")) {
            $('#' + id).fadeOut("slow");
            $('#delete-form-' + id + '.hide-cell').fadeIn("slow");
        } 
        $('#close-btn-' + id).click( function(){
            $('#delete-form-' + id + '.hide-cell').fadeOut("slow");  
            $('#' + id).fadeIn("slow");
        });
    });

    // Chevron Functionality
    $(document).on('click', '.chevron-btn', function(e) {
        var id = this.id.replace('chevron_','');
        if ($(this).hasClass("fa-chevron-down")) {
            $('#cell_' + id + '.hide-cell').fadeIn("slow");
            $(this).removeClass("fa-chevron-down");
            $(this).addClass("fa-chevron-up");
        } else if ($(this).hasClass("fa-chevron-up")) {
            $('#cell_' + id + '.hide-cell').fadeOut("slow");
            $(this).removeClass("fa-chevron-up");
            $(this).addClass("fa-chevron-down");
        }  
    });

    $('.plus-btn').click(function() {
        $('.info-data').val('');
    });

    // AJAX Call to create a column
    $(document).on('click', '.create-btn', function(e) {

        $('form.ajax').submit(function(event) {
                var text = $('textarea').val();
                $('#ajaxSpinnerImage').show();
                var that = $(this),
                    url = that.attr('action'), 
                    type = that.attr('method'),
                    data = {
                        'text' : text
                    };
                that.find('[name]').each(function(index, value) {
                    var that = $(this),
                        name = that.attr('name'),
                        value = that.val();
                    data[name] = value
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success:function(data) {
                        $('#ajaxSpinnerImage').hide();
                        $("#success-message").show();
                        $('#content').load('data.php');
                        $('#modal-content').load('modal-data.php');
                    }
                });
            event.preventDefault();
        });
    });

    $(document).on('click', '.update-btn', function(e) {

        $('form.ajax').submit(function(event) {
                var text = $('textarea').val();
                $('#ajaxSpinnerImage').show();
                var that = $(this),
                    url = that.attr('action'), 
                    type = that.attr('method'),
                    data = {
                        'text' : text
                    };
                that.find('[name]').each(function(index, value) {
                    var that = $(this),
                        name = that.attr('name'),
                        value = that.val();
                    data[name] = value
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success:function(data) {
                        $('#ajaxSpinnerImage').hide();
                        $("#success-message").show();
                        $('#content').load('data.php');
                        $('#modal-content').load('modal-data.php');
                    }
                });
            event.preventDefault();
        });
    });

    $(document).on('click', '#delete-btn', function(e) {

        $('form.ajax').submit(function(event) {
                var text = $('textarea').val();
                $('#ajaxSpinnerImage').show();
                var that = $(this),
                    url = that.attr('action'), 
                    type = that.attr('method'),
                    data = {
                        'text' : text
                    };
                that.find('[name]').each(function(index, value) {
                    var that = $(this),
                        name = that.attr('name'),
                        value = that.val();
                    data[name] = value
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success:function(data) {
                        $('#ajaxSpinnerImage').hide();
                        $("#success-message").show();
                        $('#content').load('data.php');
                        $('#modal-content').load('modal-data.php');
                    }
                });
            event.preventDefault();
        });
    });
});