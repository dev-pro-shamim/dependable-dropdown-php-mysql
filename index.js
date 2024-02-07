$("#country").change(function(){
    var country_id = $(this).val();
    // console.log(country_id);
    $.ajax({
        method:"POST",
        url:"subdroup.php",
        data:{country_id:country_id},
        success:function(data){
            $(".sub-div").html(data)

        }
    });


});