// AJAX calls for the DB.




// Controls the parsing for Campaign parameters.


var urlString = {

    currentString: "https://example.com/?aff=&src=&c=&utm_medium=${CAMPAIGN_ID}",

    get currentUrl() {

        return

    },

    set updateUrl(updatedString) {

        this.urlString = updatedString;
    },

    getFirstCharacter(trafficSource) {


        console.log(trafficSource.text().charAt(0));

        return trafficSource.text().charAt(0);
    }
}