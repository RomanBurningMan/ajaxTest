/**
 * Created by romankyshnir on 2/26/18.
 */

$(function($, undefind){
    $('#file').change(function(){
        var formData = new FormData(),
            fileAttr = $(this).prop('files')[0];

        formData.append('file', fileAttr);

        $.ajax({
            url: './ajax.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                $('#result').html('<img src="'+data+'">');
            }
        });
    });
});