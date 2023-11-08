<div>
    <a class="nav-link nav-link-style" id="toggleTheme">
        <svg aria-label="Change light Mode" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-moon ficon">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
    </a>

    <script>
        document.addEventListener("livewire:load", function () {
        document.querySelector('#toggleTheme').addEventListener('click', function () {
            const themeCookie = document.cookie.split('; ').find(cookie => cookie.startsWith('theme='));
            if (themeCookie){
                const themeValue = themeCookie.split('=')[1];
                Livewire.emit('themeToggled', themeValue); 
            }
            });
        });
    </script>
</div>