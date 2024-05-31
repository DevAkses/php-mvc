// Ambil Element

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container1 = document.getElementById('video_bg');


keyword.addEventListener('keyup', function() {
    // var keywordValue = encodeURIComponent(keyword.value);
    var xhr = new XMLHttpRequest();

    //Cek kesiapan AJAX
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // container.innerHTML = xhr.responseText;
                container1.innerHTML = 'Tidak ada file yang anda cari!' ;
            } else {
                console.error('AJAX request failed with status:', xhr.status);
            }
        }
    }

    //eksekusi ajax 
    xhr.open('GET', 'coba', true);
    xhr.send();

}) ;

// xhr.responseText

