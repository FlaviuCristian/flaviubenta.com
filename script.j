document.addEventListener("DOMContentLoaded", function() {
    console.log("Traveler Blog Loaded Successfully!");
});



document.addEventListener("DOMContentLoaded", function() {
    const filterBtn = document.getElementById("filter-btn");
    filterBtn.addEventListener("click", function() {
        const selectedCategories = Array.from(document.getElementById("food-category").selectedOptions).map(opt => opt.value);
        const selectedTypes = Array.from(document.getElementById("meal-type").selectedOptions).map(opt => opt.value);

        document.querySelectorAll(".recipe").forEach(recipe => {
            const category = recipe.getAttribute("data-category");
            const type = recipe.getAttribute("data-type");

            if ((selectedCategories.includes(category) || selectedCategories.length === 0) &&
                (selectedTypes.includes(type) || selectedTypes.length === 0)) {
                recipe.style.display = "block";
            } else {
                recipe.style.display = "none";
            }
        });
    });
});