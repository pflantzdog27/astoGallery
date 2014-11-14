$(function() {
    var jsonRequest = $.getJSON('albumChunk.json', function(data) {
        console.log( "success" );
        var templateData = [];
        $.each(data.slides, function (i, item) {
            templateData.push({
                slideIndex: item.index,
                slideCaption: item.caption,
                slideThumb: item.thumb,
                slideDisplay: item.display,
                slideFull: item.full
            });
        });
        var galleryTemplate = $('#galleryView').html();
        $('#test').prepend(Mustache.render(galleryTemplate, templateData));
    })
        .done(function() {
            console.log( "second success" );
        })
        .fail(function() {
            console.log( "error" );
        })
        .always(function() {
            console.log( "complete" );
        });
});

// FRIDAY MORNING
// #test div || galleryTemplate || mustache.js || app.js
// update the local json source to http://qaastoweb.wip.gsa.gov:9080/portal/albumchunk/653998