var urlString = "https://example.com/?aff=&src=&c=213&utm_medium=${CAMPAIGN_ID}"; //window.location.href
var url = new URL(urlString);
// var c = url.searchParams.get("c");

$(".campaign").on("click", function(){ // Changes the parameter values per click.


    if($(this).text() == " VA Benefits - VeteranLending.com "){

        replaceUrlParam(urlString, "aff", 250);

    } else {



        replaceUrlParam(url, "aff", 3);

    }

    return $("#url-output").val(url);
});


$(".traffic-source").on("click", function() { // Changes the parameter values per click.



    $("#url-output").val("?aff=3&src=&c=&utm_medium=${CAMPAIGN_ID}");
})



