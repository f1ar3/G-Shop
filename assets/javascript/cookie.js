window.addEventListener('DOMContentLoaded', () => {

    const cookieStorage = {
        getItem: (key) => {
            const cookies = document.cookie
                                .split(';')
                                .map(cookie => cookie.split('='))
                                .reduce((acc, [key, value]) => ({...acc, 
                                                    [key.trim()] : value}), {});

            return cookies[key];
        },
        setItem: (key, value) => {
            document.cookie = `${key}=${value};expires=Sun, 7 Jul 2025 06:23:41 GMT`;
        }
    };
    
   

    const storageType = cookieStorage;
    const consentPropertyType = 'site_consent';

    const hasConsented = () => storageType.getItem(consentPropertyType) === "true" ? true : false;
    const toggleStorage = (prop) => storageType.setItem(consentPropertyType, prop);

    const popup = document.querySelector('.popup'),
          btnConfirm = document.querySelector('.btn__cookie__allow'),
          btnCancel = document.querySelector('.btn__cookie__decline');

    if (hasConsented()) {
        console.log('Loading...');
    } else {
        popup.classList.add('popup__active');
    }
    
    btnConfirm.addEventListener('click', () => {
        toggleStorage(true);
        popup.classList.remove('popup__active');
        console.log('Cookies is active.');
    });

    btnCancel.addEventListener('click', () => {
        toggleStorage(false);
        popup.classList.remove('popup__active');
    });

    const window = document.querySelector(".window");
     window.addEventListener('click', ()=> {   
     popup.classList.add('popup__active');
    });

    // (function() {

    //     var but = document.getElementById("visit");
    //     var p = document.getElementById("last");
    //             if (getCookieName("lastVisit") !== undefined) {
    //                 p.innerHTML = getCookieName("lastVisit");
    //             }
        
    //         but.addEventListener("click", function(){
    //             setParameters();
    //         });
        
    //         function setParameters() {
    //             var date = new Date().toLocaleDateString();
    //             document.cookie = "lastVisit=" + encodeURIComponent(date) + ";max-age=2592000";
    //             // console.log("lastVisit=" + encodeURIComponent(date));
    //         }
        
    //         function getCookieName(name) {
    //             var str = document.cookie;
    //             var pos = str.indexOf(name + "=");
    //             if (pos !== -1) {
    //                 var start = pos + name.length + 1;
    //                 var end = str.indexOf(";", start);
    //                 if (end == -1) {
    //                     end = str.length;
    //                 }
    //                 return decodeURIComponent(str.slice(start, end));
    //             }
        
    //         }
        
    //     }());
});