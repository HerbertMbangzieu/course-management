import './bootstrap';
import './jquery';

$(document).ready(function(){
    let absLinks = $('.absence-status');
    for(let absLink of absLinks){
        absLink.addEventListener('click', function(event){
            event.preventDefault()
            let url = (this).href
            let currentUrl = window.location.href;
            $.ajax({
                type: 'GET',
                url: url,
                success: setInterval(() => {
                    window.location.href = currentUrl
                }, 1000)
            })
        })
    }

    document.querySelector("#save").addEventListener('click', function(event){
        event.preventDefault()
        let url = (this).href
        let nextUrl = window.location.href;
        $.ajax({
            type: 'GET',
            url: url,
            success: setInterval(() => {
                window.location.href = currentUrl
            }, 1000)
        })
    })
});
