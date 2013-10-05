$(function(){
    $('#body').dialog({
        autoOpen: false
    })
    $('h1').click(function(){
        $('#body').dialog("open");
    })
    
    $('.btn_view').click(function(){
        /*$.get('http://localhost/study/ci_mongo/index.php/welcome/ajax_get_id', function(id){
            alert(id);
        })*/
        alert($(this).data('id'));
    })
})