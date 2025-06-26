// Example JavaScript for interactivity
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
});

document.addEventListener("DOMContentLoaded", function() {
    const serviceLinks = document.querySelectorAll(".service-item");

    serviceLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            window.location.href = this.getAttribute("href");
        });
    });
});

// Smooth scroll to top when the button is clicked
document.querySelector('.floating-button').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default link behavior
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const servicesSection = document.querySelector(".services");
    const serviceItems = document.querySelectorAll(".service-item");
    const viewServicesBtn = document.querySelector(".btn[href='#services']");

    // Function to check if services section is in view
    function isServicesInView() {
        const rect = servicesSection.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }

    // Function to show services with fade-in animation
    function showServices() {
        serviceItems.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add("visible");
            }, index * 200); // Delay each item by 200ms
        });
    }

    // Trigger animation on scroll
    window.addEventListener("scroll", function () {
        if (isServicesInView()) {
            showServices();
        }
    });

    // Trigger animation on "View Services" button click
    viewServicesBtn.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default anchor behavior
        servicesSection.scrollIntoView({ behavior: "smooth" });
        showServices();
    });
});





