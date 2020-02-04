function clickSubmit()
{
    let link = $('.search').val();
    if (!link) return false;
    sendLink(link)
}

function sendLink(data)
{
    $.ajax({
        url: 'main/index',
        dataType: 'json',
        data: 'link=' + data,
        success: function(response) {
            console.log(response.link);
            $('a').attr('href', location.host + '/main/link/' + response.link);
            $('a').html(location.host + '/main/link/' + response.link);
        }
    });
}
