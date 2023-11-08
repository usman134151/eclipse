document.addEventListener('DOMContentLoaded', function () {
    let themeCookie;
    let getTheme = document.querySelectorAll(".fontawesome-i2svg-complete, .floating-nav, .menu-fixed");
    let svg = document.querySelectorAll("use");

        const toggleThemeElement = document.getElementById("toggleTheme");
        
        // Check the theme setting in the cookie
        themeCookie = getCookie("theme");
        if (themeCookie) {
            if (themeCookie === "dark") {
                setDarkTheme();

            } else {
                setLightTheme();
            }
        }
        
        // Add a click event listener to toggle the theme and update the cookie
        toggleThemeElement.addEventListener('click', function() {
            if (themeCookie === "light") {
               
                setDarkTheme();
                themeCookie = "dark"; // Update the theme cookie
                setCookie("theme", "dark", 365); // Set the theme in a cookie for 1 year
          
            } else {
                
               
                setLightTheme();
                themeCookie = "light"; // Update the theme cookie
                setCookie("theme", "light", 365); // Set the theme in a cookie for 1 year
             
            }
        });
        
        // Function to set dark theme
        function setDarkTheme() {
            
                if (getTheme[0].classList.contains('light-layout')) {
                getTheme[0].classList.remove('light-layout');
                getTheme[0].classList.add('dark-layout');
            }
            else{
                getTheme[0].classList.add('dark-layout');
            }
            for (let i = 0; i < svg.length; i++) {
                if (svg[i].href.baseVal.includes('home')) {
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('home', 'dark-home');
                }
                if (svg[i].href.baseVal.includes('blueplus')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('blueplus', 'dark-blueplus');
                } 
                if (svg[i].href.baseVal.includes('right-color-arrow')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('right-color-arrow', 'dark-right-color-arrow');
                } 
                if (svg[i].href.baseVal.includes('bookings')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('bookings', 'dark-bookings');
                } 
                if (svg[i].href.baseVal.includes('input-calender')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('input-calender', 'dark-input-calender');
                } 
                if (svg[i].href.baseVal.includes('datefield-icon')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('datefield-icon', 'dark-datefield-icon');
                } 
                
            }
            
        }
        
        // Function to set light theme
        function setLightTheme() {
            
                if (getTheme[0].classList.contains('dark-layout')) {
                getTheme[0].classList.remove('dark-layout');
                getTheme[0].classList.add('light-layout');
                getTheme[1].classList.remove('navbar-dark');
                getTheme[1].classList.add('navbar-light');
                getTheme[2].classList.remove('menu-dark');
                getTheme[2].classList.add('menu-light');
                

            }
            else{
                getTheme[0].classList.add('light-layout');
            }
            for (let i = 0; i < svg.length; i++) {
                if (svg[i].href.baseVal.includes('dark-home')) {
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-home', 'home');
                }
                if (svg[i].href.baseVal.includes('dark-blueplus')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-blueplus', 'blueplus');
                } 
                if (svg[i].href.baseVal.includes('dark-right-color-arrow')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-right-color-arrow', 'right-color-arrow');
                } 
                if (svg[i].href.baseVal.includes('dark-bookings')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-bookings', 'bookings');
                } 
                if (svg[i].href.baseVal.includes('dark-input-calender')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-input-calender', 'input-calender');
                } 
                if (svg[i].href.baseVal.includes('dark-datefield-icon')){
                    svg[i].href.baseVal = svg[i].href.baseVal.replace('dark-datefield-icon', 'datefield-icon');
                } 
                
            }

    }
        
        // Function to get a cookie by name
        function getCookie(name) {
            const cookieName = name + "=";
            const cookieArray = document.cookie.split(';');
            for (let i = 0; i < cookieArray.length; i++) {
                let cookie = cookieArray[i];
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(cookieName) === 0) {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
            return null;
        }
        
        // Function to set a cookie
        function setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + "=" + value + "; expires=" + expires.toUTCString();
        }
    });
