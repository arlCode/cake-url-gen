var urlString = "https://example.com/?aff=&src=&c=&utm_medium=${CAMPAIGN_ID}",
parse = new Parser();
// var c = url.searchParams.get("c");

$(".campaign").on("click", function(){ // Changes the parameter values per click.


    if($(this).text() == " VA Benefits - VeteranLending.com "){

        var urlChange = replaceUrlParam(urlString, "aff", 250);

    } else {

        var urlChange = replaceUrlParam(urlString, "aff", 3);

    }

    return $("#url-output").val(urlChange);
});


$(".traffic-source").on("click", function(){ // Changes the parameter values per click.

    let urlChange = replaceUrlParam(urlString, "src", parse.getFirstCharacter($(this)) + "-");


    return $("#url-output").val(urlChange);
});



