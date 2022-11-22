
let installEvent = null;
let installButton = document.getElementById("install");
let enableButton = document.getElementById("enable");

enableButton.addEventListener("click", function()
{
    this.disabled = true;
    startPwa(true);
});

if(localStorage["pwa-enabled"])
{
    startPwa()
}

function startPwa(firstStart)
{
    localStorage["pwa-enabled"] = true;

    if(firstStart)
    {
        location.reload()
    }

    window.addEventListener("load", () =>
    {
        navigator.serviceWorker.register("/worker.js")
        .then(registration =>
        {
            console.log("Új munkás regisztrálva.", registration);
            enableButton.parentNode.remove();
        })
        .catch(err =>
        {
            console.error("A regisztráció nem sikerült:", err);
        })
    });

    window.addEventListener("beforeinstallprompt", (e) =>
    {
        e.preventDefault();
        console.log("Telepítés...");
        installEvent = e;
        document.getElementById("telepit").style.display = "initial";
    });

    setTimeout(cacheLinks, 500);

    function cacheLinks()
    {
        caches.open("pwa").then(function(cache)
        {
            let linksFound = [];
            document.querySelectorAll("a").forEach(function(a)
            {
                linksFound.push(a.href);
            });

            cache.addAll(linksFound);
        })
    }

    if(installButton)
    {
        installButton.addEventListener("click", function()
        {
            installEvent.prompt();
        })
    }
}