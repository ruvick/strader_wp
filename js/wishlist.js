function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options = {}) {

    options = {
      path: '/',
      
      ...options
    };
  
    if (options.expires instanceof Date) {
      options.expires = options.expires.toUTCString();
    }
  
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  
    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }
  
    document.cookie = updatedCookie;
  }

function addToWishList(productId) {
    console.log('add')
    let wl = getCookie('wish')
    
    let wlarray = []

    if (wl == undefined)
    {
        wl = []
        wl.push(productId)
        setCookie('wish', JSON.stringify(wl))
        return;
    } else {
        wlarray = JSON.parse(wl)
    }

    if (!wlarray.includes(productId)){
        wlarray.push(productId)
        setCookie('wish', JSON.stringify(wlarray))
    }
     
    console.log(getCookie('wish'))

}

function removeToWishList(productId) {
    console.log('del')
    let wl = getCookie('wish')

    if (wl == undefined) return;

    wlarray = JSON.parse(wl)

    var myIndex = wlarray.indexOf(productId);
    if (myIndex !== -1) {
        wlarray.splice(myIndex, 1);
        setCookie('wish', JSON.stringify(wlarray))
    }

    console.log(getCookie('wish'))

}

document.addEventListener("DOMContentLoaded", () => { 
    let elements = document.querySelectorAll('.towish');
	
    let wl = getCookie('wish')
    if (wl != undefined) 
        {
            wlarray = JSON.parse(wl) 
            document.querySelector('.wish_counter').innerHTML = wlarray.length
        }
    else wlarray = []

    for (let elem of elements) {
        
        if (wlarray.includes(elem.dataset.productid))
            elem.classList.add('inlist')
        

		elem.onclick = () => {
            let productId = elem.dataset.productid
            if (elem.classList.contains('inlist')) {
                
                elem.classList.remove('inlist')
                removeToWishList(productId)
            }  else {
                
                elem.classList.add('inlist')
                addToWishList(productId)
            }
        }
	}

})