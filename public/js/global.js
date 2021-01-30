var app = $(document);



app.on('click', '#toggle_sidebar', () => {
    $('#sidebar, #toggle_sidebar').toggleClass('collapsed');
});