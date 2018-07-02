// TODO: Create Lander JS calls.

$('#new-lander').submit(function() {

    var $form = $(this),
    serializedData = $form.serialize();

    $.post('app_data/ajax/lander.php', serializedData, function(response) {
        // Log the response to the console

        var parsedResponse = $.parseJSON(response); // Parses responses for SQL insert


        console.log("Response: " + parsedResponse.lander_title);
        console.log("Serialized Data: " + serializedData);
    });

})
