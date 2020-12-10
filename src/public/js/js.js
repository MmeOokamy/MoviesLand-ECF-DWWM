window.onload = function() {
    console.log('hello')
    let search = document.querySelector('#search');
    if (search) {
        search.addEventListener('click', searchInAPI);
    }
    console.log('hello2')
    function searchInAPI() {

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "https://api.themoviedb.org/3/movie/550?api_key=c3568fa2093e83bc9999ba366802f9c7&=query${#search}");
        xhttp.send();

        xhttp.onreadystatechange = function () {

            if (this.readyState === 4 && this.status === 200) {

                let dataApi = JSON.parse(this.responseText);

                let contentMovie = document.querySelector('#list_movie');

                let html = '';

                for ( movie of dataApi ) {
                    html += '   <div class="column card">' +
                        '       <div class="card-image"><img src="https://image.tmdb.org/t/p/w500/'+ movie.poster_path +' " alt="'+ movie.original_title +'"></div>' +
                        '       <div class="card_content"><h3>'+ movie.movies_name +'</h3></div>' +
                        '       </div>';
                }

                contentMovie.innerHTML = html;



            }

        }
    }

}