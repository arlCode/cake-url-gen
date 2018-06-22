$(".campaign").on("click", function(){ // Changes the parameter values per click.

    if($(this).text() == " VA Benefits - VeteranLending.com "){

        urlString.updateUrl = replaceUrlParam(urlString.currentString, "aff", 250);

    } else {

        urlString.updateUrl = replaceUrlParam(urlString.currentString, "aff", 3);

    }

    $("#url-output").val(urlString.currentString); // URL Output
});


$(".traffic-source").on("click", function(){ // Changes the parameter values per click.

    urlString.updateUrl = replaceUrlParam(urlString.currentString, "src", urlString.getFirstCharacter($(this)) + "-" + 101);


    $("#url-output").val(urlString.currentString); // URL Output
});



