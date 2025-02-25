import "@fortawesome/fontawesome-free/js/solid.js";
import "@fortawesome/fontawesome-free/js/fontawesome.js";
import "./tailwind.css";

// Mobile Menu Functionality
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuIcon = document.getElementById("menu-icon");

  if (menuToggle && mobileMenu && menuIcon) {
    menuToggle.addEventListener("click", function (event) {
      event.stopPropagation();

      if (mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.remove("hidden");
        menuIcon.classList.remove("fa-bars");
        menuIcon.classList.add("fa-times");
      } else {
        mobileMenu.classList.add("hidden");
        menuIcon.classList.remove("fa-times");
        menuIcon.classList.add("fa-bars");
      }
    });

    document.addEventListener("click", function (event) {
      if (
        mobileMenu &&
        !mobileMenu.contains(event.target as Node) &&
        menuToggle &&
        !menuToggle.contains(event.target as Node)
      ) {
        mobileMenu.classList.add("hidden");
        menuIcon.classList.remove("fa-times");
        menuIcon.classList.add("fa-bars");
      }
    });
  }
});

// Dropdown Menu Functionality
document.addEventListener("DOMContentLoaded", function () {
  const dropdownButton = document.getElementById("dropdown-button");
  const dropdownItems = document.getElementById("dropdown-items");

  if (dropdownButton && dropdownItems) {
    dropdownButton.addEventListener("click", function (event) {
      event.stopPropagation();

      if (dropdownItems.classList.contains("hidden")) {
        dropdownItems.classList.remove("hidden");
      } else {
        dropdownItems.classList.add("hidden");
      }
    });

    document.addEventListener("click", function (event) {
      if (
        dropdownItems &&
        !dropdownItems.contains(event.target as Node) &&
        dropdownButton &&
        !dropdownButton.contains(event.target as Node)
      ) {
        dropdownItems.classList.add("hidden");
      }
    });
  }
});

// Mobile Dropdown Functionality
document.addEventListener("DOMContentLoaded", function () {
  const mobileDropdownButton = document.getElementById(
    "mobile-dropdown-button"
  );
  const mobileDropdownItems = document.getElementById("mobile-dropdown-items");

  if (mobileDropdownButton && mobileDropdownItems) {
    mobileDropdownButton.addEventListener("click", function (event) {
      event.stopPropagation();

      if (mobileDropdownItems.classList.contains("hidden")) {
        mobileDropdownItems.classList.remove("hidden");
      } else {
        mobileDropdownItems.classList.add("hidden");
      }
    });

    document.addEventListener("click", function (event) {
      if (
        mobileDropdownItems &&
        !mobileDropdownItems.contains(event.target as Node) &&
        mobileDropdownButton &&
        !mobileDropdownButton.contains(event.target as Node)
      ) {
        mobileDropdownItems.classList.add("hidden");
      }
    });
  }
});

// Filter Posts by Category
document.addEventListener("DOMContentLoaded", function () {
  const filterContainer = document.getElementById("category-filter");
  const posts = document.querySelectorAll<HTMLElement>(".post-item");

  if (!filterContainer || !posts.length) return;

  filterContainer.addEventListener("change", function (event) {
    const target = event.target as HTMLInputElement;
    const selectedCategory = target.value;

    posts.forEach(function (post) {
      const postCategory = post.getAttribute("data-category");

      if (
        selectedCategory === "all" ||
        (postCategory && postCategory.includes(selectedCategory))
      ) {
        post.style.display = "block";
      } else {
        post.style.display = "none";
      }
    });
  });
});

// Search Redirect
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById(
    "search-input"
  ) as HTMLInputElement;

  if (searchInput) {
    searchInput.addEventListener("focus", function () {
      window.location.href = window.location.origin + "/search";
    });
  }
});
