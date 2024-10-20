$(function() {
    $('.destination').change(function() {
        var videostatus = $(this).prop('checked') == true ? 1 : 0;
        var video_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/video-status',
            data: {'videostatus': videostatus, 'video_id': video_id},
            success: function(data){
             window.location.reload();
            }
        });
    })
  })