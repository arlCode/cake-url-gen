// AJAX calls for the DB.




// Controls the parsing for Campaign parameters.
var urlString = {

    currentString: "https://example.com/?aff=&src=&c=&oid=&cid=&utm_medium=${CAMPAIGN_ID}",

    get currentUrl() {

        return this.currentString;

    },

    set updateUrl(updatedString) {

        this.currentString = updatedString;
    },

    getFirstCharacter(trafficSource) {

        return trafficSource.text().charAt(0).toLowerCase();
    }
}