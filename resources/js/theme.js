// Функція для встановлення теми в localStorage
window.setTheme = () => {
    const isDark = document.getElementById("toggle").checked;
    localStorage.setItem('theme', isDark ? 'dark' : 'light'); // Зберігаємо вибір теми
};

// Функція для отримання збереженої теми
window.getTheme = () => {
    return localStorage.getItem('theme') || getDeviceTheme(); // За замовчуванням тема пристрою
};

// Функція для перевірки теми пристрою
window.getDeviceTheme = () => {
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
};
