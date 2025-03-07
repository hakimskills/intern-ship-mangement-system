
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
    on: {
    slideChangeTransitionStart: function () {
    // Apply animation and style changes when slide transition starts
    var activeSlide = this.slides[this.activeIndex];
    activeSlide.style.opacity = 0;
    activeSlide.style.transition = "opacity 0.3s";
},
    slideChangeTransitionEnd: function () {
    // Reset animation and style changes when slide transition ends
    var activeSlide = this.slides[this.activeIndex];
    activeSlide.style.opacity = 1;
    activeSlide.style.transition = "";
},
},
});

        function validateDates() {
        var startDateInput = document.getElementById("dateS");
        var endDateInput = document.getElementById("dateE");
        var collegeYearInput = document.getElementById("College_year");

        var startDate = new Date(startDateInput.value);
        var endDate = new Date(endDateInput.value);

        var timeDifference = endDate.getTime() - startDate.getTime();
        var dayDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));

        if (dayDifference < 0 || dayDifference < 15) {
        // Invalid dates, clear the input fields and show an error message
        endDateInput.value = "";
        alert("Start date must be within 15 days from the end date.");
    } else {
        // Set the college year based on the year of the start date
        var startYear = startDate.getFullYear();
        var collegeYear = startYear + "/" + (startYear + 1);
        collegeYearInput.value = collegeYear;
    }
    }
