// create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "+" + cvalue + ";" + expires + ";path=/";
}

// delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++ ) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// set cookie consent
function acceptCookieConsent() {
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 30)
    document.getElementById("cookie-notice").style.display = "none";
}

// set visibility of the cookie consent popup
let cookie_consent = getCookie("user_cookie_consent");
if (cookie_consent != "") {
    document.getElementById("cookie-notice").style.display = "none";
} else {
    document.getElementById("cookie-notice").style.display = "block";
}