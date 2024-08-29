document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const suggestionsList = document.getElementById('suggestionsList');

    const items = [
        { name: "Home", url: "index.html" },
        { name: "Yes Program", url: "yesprogram.html" },
        { name: "Introduction", url: "introduction.html" },
        { name: "Eligibility Criteria", url: "eligibilitycriteria.html" },
        { name: "Age Calculator", url: "agecalculator.html" },
        { name: "Application Selection Process", url: "application&selectionprocess.html" },
        { name: "Parent Student Agreement", url: "patentstudentagreement" },
        { name: "Faqs", url: "faqs.html" },
        { name: "Media", url: "media.html" },
        { name: "About Us", url: "about.html" },
        { name: "Contact Us", url: "contact.html"}
    ];

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.toLowerCase();
        suggestionsList.innerHTML = '';

        if (query) {
            const filteredItems = items.filter(item => item.name.toLowerCase().includes(query));
            suggestionsList.style.display = 'block';

            filteredItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = item.name;
                listItem.addEventListener('click', function() {
                    searchInput.value = item.name;
                    window.location.href = item.url;
                });
                suggestionsList.appendChild(listItem);
            });
        } else {
            suggestionsList.style.display = 'none';
        }
    });

    document.addEventListener('click', function(event) {
        if (!searchInput.contains(event.target) && !suggestionsList.contains(event.target)) {
            suggestionsList.style.display = 'none';
        }
    });
});
