
function searchMovie() {
    $('#movie-list').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '91ca7574',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                let movies = result.Search;
                
                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="` + data.Poster + `" class="card-img-top" alt="..." style="height: 500px">
                            <div class="card-body">
                            <h5 class="card-title">` + data.Title + `</h5>
                            <h6 class="card-subtitle mb-2 text-muted">` + data.Year + `</h6>
                            <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
                            </div>
                        </div>
                        </div>
                    `);
                });

                $('#search-input').val('');

            } else {
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center">` + result.Error + 
                    `</h1>
                `)
            }
        }
    });
}

$('#search-button').on('click', function () {
    searchMovie();
});

$('#search-input').on('keyup', function (e) {
    if(e.which == 13) {
        searchMovie();
    }
})






// function searchMovie() {
//     $('#movie-list').html('');

//     $.ajax({
//         url: 'https://api.themoviedb.org/3/search/movie?api_key=e16d258d1afabddf12de0aed79f245bf',
//         type: 'get',
//         dataType: 'json',
//         data: {
//             // 'api_key':'a6bdab674a4fed24b86fb4512d468a79',
//             'query': $('#search-input').val()
//         },
//         success: function (result) {
//             if (result.Response == "True") {
//                 let movies = result.Search;
                
//                 $.each(movies, function (i, data) {
//                     $('#movie-list').append(`
//                         <div class="col-md-4">
//                         <div class="card mb-3">
//                             <img src="` + data.Poster + `" class="card-img-top" alt="...">
//                             <div class="card-body">
//                             <h5 class="card-title">` + data.Title + `</h5>
//                             <h6 class="card-subtitle mb-2 text-muted">` + data.Year + `</h6>
//                             <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
//                             </div>
//                         </div>
//                         </div>
//                     `);
//                 });

//                 $('#search-input').val('');

//             } else {
//                 $('#movie-list').html(`
//                     <div class="col">
//                         <h1 class="text-center">` + result.Error + 
//                     `</h1>
//                 `)
//             }
//         }
//     });
// }

// $('#search-button').on('click', function () {
//     searchMovie();
// });

// $('#search-input').on('keyup', function (e) {
//     if(e.which == 13) {
//         searchMovie();
//     }
// })