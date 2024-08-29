
function showContent(event, sectionId) {
    event.preventDefault();
    
    // Remove 'active' class from all list items
    var listItems = document.querySelectorAll('ul li');
    listItems.forEach(function(item) {
        item.classList.remove('active');
    });

    // Add 'active' class to the clicked list item
    event.target.closest('li').classList.add('active');

    // Remove 'active' class from all sections
    var sections = document.querySelectorAll('.content-change');
    sections.forEach(function(section) {
        section.classList.remove('active');
    });

    // Add 'active' class to the target section
    var targetSection = document.getElementById(sectionId);
    if (targetSection) {
        targetSection.classList.add('active');
    }
}
function showContent2(event, contentId) {
    // Hide the slider and mobile content sections
    document.getElementById('mobilecaluclator').classList.add('hidden');
    document.getElementById('mobileapplication').classList.add('hidden');
    document.getElementById('parentstudentagreements').classList.add('hidden');
    document.getElementById('FAQ,S').classList.add('hidden');
    document.getElementById('introductions').classList.add('hidden');
    document.getElementById('eligibilitymobile').classList.add('hidden');

    // Hide the sidebar and overlay
    document.getElementById('sidebar').classList.remove('active');
    document.getElementById('overlay').classList.remove('active');

    // Show the selected content
    if (contentId) {
        document.getElementById(contentId).classList.remove('hidden');
    }
}








