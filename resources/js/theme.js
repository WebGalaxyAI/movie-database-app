window.setTheme = () => {
    const isDark = document.getElementById("toggle").checked;
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
};

window.getTheme = () => {
    return localStorage.getItem('theme') || getDeviceTheme();
};

window.getDeviceTheme = () => {
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
};
