$(document).ready(function(){

function getFilmByName()
{
    let filmName = document.getElementById("filmName").value;
    console.log(filmName);
    $.ajax({
        url: 'controllers/Film.php',
        type: 'post',
        dataType: 'json',
        data: {filmName:filmName},
    })
    .done(function(xx) {
        //let url = window.location.href+Film+"?"+"name="+filmName;
        //console.log(url);
        //window.location()
        console.log(xx); 
    })
    .fail(function(resp) {
        let url = window.location.href+"Film"+"?"+"name="+filmName;
        window.location=url;
        console.log(resp);
    })
}


$("#btnSend").click(function()
{
    getFilmByName();
});


});