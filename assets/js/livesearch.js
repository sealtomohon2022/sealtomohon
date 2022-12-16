var key = document.getElementById('key');
var container = document.getElementById('forsearch');

key.addEventListener('keyup', function(){
   
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function (){
        if ( ajax.readyState == 4 && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', 'ajax/pangan.php?key=' + key.value, true);
    ajax.send();


});


