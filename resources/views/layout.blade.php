<!DOCTYPE html>
<html lang="en" x-data="{
    isDark: getTheme('theme') === 'dark'
}" :class="{ 'dark': isDark, 'light': !isDark }">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mazyar">
    <title>Movie Database</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900">
<div
    class="flex min-h-screen 2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700">
    <livewire:left-sidebar/>
    <main class="flex-1 py-10 px-5 sm:px-10">
        <livewire:header/>
        @yield('content')
    </main>
    <livewire:right-sidebar/>
</div>
@livewireScripts
@vite(['resources/js/app.js'])
<script>
    // Функція для встановлення куки
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
    }

    // Функція для отримання куки за ім'ям
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Функція для оновлення теми
    function setTheme() {
        console.log(123)
        if (document.getElementById("toggle").checked) {
            setCookie('theme', 'dark', 365); // Зберігаємо в куки вибір теми
        } else {
            setCookie('theme', 'light', 365); // Зберігаємо в куки вибір теми
        }
    }
</script>
</body>
</html>
