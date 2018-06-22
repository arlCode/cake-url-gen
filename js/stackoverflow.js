// StackOverflow solutions

function replaceUrlParam(url, paramName, paramValue)  // Credit: https://stackoverflow.com/questions/7171099/how-to-replace-url-parameter-with-javascript-jquery
{
    if (paramValue == null) {
        paramValue = '';
    }
    var pattern = new RegExp('\\b('+paramName+'=).*?(&|$)');
    if (url.search(pattern)>=0) {
        return url.replace(pattern,'$1' + paramValue + '$2');
    }
    url = url.replace(/\?$/,'');
    return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
}