$('#crawlerSubmit').click(function(){   
    $('#crawlerSubmit').html('<i class="fa fa-spinner fa-spin"></i>');   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var link = $('input[name=link]').val();
    $.ajax({
        url: "/admin/crawler/getlist",
        type:"POST",
        dataType: 'JSON',
        data: {link:link},
        success:function(res){
            display_html(res);
            $('#crawlerSubmit').remove();
            send_ajax(res, 1);
        }
    });
});

function send_ajax(res, index)
{
    if (index > (res.num)){
        return false;
    }
    $('#waitting'+index).removeClass('label-warning').addClass('label-info').html('Sending...');
    $.ajax({
        url : '/admin/crawler/getCruises',
        type : 'post',
        data : {
            link : res.link[index - 1]
        },
        success : function(mes)
        {
            $('#crawling').append(mes.data+'\n');
            $('#waitting'+index).removeClass('label-info').addClass('label-success');
            $('#waitting'+index).html('Finished');
        },
        error : function()
        {
            $('#waitting'+index).removeClass('label-info').addClass('label-danger');
            $('#waitting'+index).html('Blacklist');
        }
    })
    .always(function(){
        setTimeout(function(){ send_ajax(res, ++index); }, 1000);
    });
}

function display_html(res)
{
    var html = '';
    html += '<table class="table table-striped">';
        html += '<tr>';
            html += '<th class="col-md-2">#</th>';
            html += '<th class="col-md-6">Cruises link</th>';
            html += '<th class="col-md-4">Status</th>';
        html += '</tr>';
    for (var i = 0; i < res.num; i++){
        html += '<tr>';
            html += '<td>'+(i+1)+'</td>';
            html += '<td>'+(res.link[i])+'</td>';
            html += '<td><a id="waitting'+(i+1)+'" class="label label-warning" href="#">Waitting...</a></td>';
        html += '</tr>';
    }
    html += '</table>'
    $('#results').html(html);
}

