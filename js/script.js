document.addEventListener('DOMContentLoaded', () => {
    const languageSelect = document.getElementById('language-select');

    languageSelect.addEventListener('change', (event) => {
        const selectedLanguage = event.target.value;
        window.location.search = `?lang=${selectedLanguage}`;
    });
});