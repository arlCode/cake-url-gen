$(".campaign").on("click", function(){ // Changes the parameter values per click.


    // Uncomment the if statement if you need the secondary change.
    // if($(this).text() == " VA Benefits - VeteranLending.com "){

    //     urlString.updateUrl = replaceUrlParam(urlString.currentString, "aff", 250);

    // } else {

        urlString.updateUrl = replaceUrlParam(urlString.currentString, "aff", 3);
        
        // Number 3 affiliate ID is Jordans, this will be pulled in
        // a different method once moved into server.

    // }

    $("#url-output").val(urlString.currentString); // URL Output
});


$(".traffic-source").on("click", function(){ // Changes the parameter values per click.


    urlString.updateUrl = replaceUrlParam(urlString.currentString, "src", urlString.getFirstCharacter($(this)) + "-" + 101);


    $("#url-output").val(urlString.currentString); // URL Output
});


$(".lander").on("click", function() {


    console.log("Display lander screenshot stored in DB.");

    console.log("Update the URL.");
})



