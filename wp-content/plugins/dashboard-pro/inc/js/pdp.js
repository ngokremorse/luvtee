function pdpUpdateUTM(){
    const urlString = window.location.search;
    const urlParams = new URLSearchParams(urlString);

    // get utm params
    const utm_source = urlParams.get("utm_source") || 'n/a';
    const utm_medium = urlParams.get("utm_medium") || 'n/a';
    const utm_campaign = urlParams.get("utm_campaign") || 'n/a';


    // local storage cache utm params
    if(utm_source != undefined && utm_source.length > 0) {
        document.cookie = `utm_source=${utm_source}; path=/`;
        document.cookie = `utm_medium=${utm_medium}; path=/`;
        document.cookie = `utm_campaign=${utm_campaign}; path=/`;
    }
}
pdpUpdateUTM();