function performSearch() {
    // Get the input value
    var searchInputValue = document.getElementById("searchInput").value;

    // Perform any action with the input value (e.g., validate, process, etc.)
    // For simplicity, let's assume you want to redirect to another page with the search query as a parameter

    // Replace "targetPage.html" with the actual URL of your target page
    window.location.href = 'search.php?search=' + encodeURIComponent(searchInputValue);

    // Return false to prevent the form from actually submitting
    return false;
}
