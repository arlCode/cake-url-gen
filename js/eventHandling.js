var urlString = "https://example.com/?aff=&src=&c=&utm_medium=${CAMPAIGN_ID}"; //window.location.href
var url = new URL(urlString);
// var c = url.searchParams.get("c");

$(".campaign").on("click", function(){ // Changes the parameter values per click.


    if($(this).text() == " VA Benefits - VeteranLending.com "){

        console.log(replaceUrlParam(urlString, "aff", 250));

    } else {

        console.log(replaceUrlParam(urlString, "aff", 3));

    }

    return $("#url-output").val(urlString);
});


$(".traffic-source").on("click", function(){ // Changes the parameter values per click.


    if($(this).text() == " VA Benefits - VeteranLending.com "){

        console.log(replaceUrlParam(urlString, "src", 250));

    } else {

        console.log(replaceUrlParam(urlString, "src", 3));

    }

    return $("#url-output").val(urlString);
});



