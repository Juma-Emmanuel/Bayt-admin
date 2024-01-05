function showSection(sectionId) {
        
    var sections = document.getElementsByClassName('section-display');
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove('active');
    }

    
    var selectedSection = document.getElementById(sectionId);
    selectedSection.classList.add('active');
}