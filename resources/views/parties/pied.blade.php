<!-- PRE LOADER -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{ asset('assets/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }} "></script>
<script src="{{ asset('assets/js/carousel.js') }} "></script>
<script src="{{ asset('assets/js/animation.js') }} "></script>
<script src="{{ asset('assets/js/video-popup.js') }} "></script>
<script src="{{ asset('assets/js/video.js') }} "></script>
<script src="{{ asset('assets/js/back-to-top-button.js') }} "></script>
<script src="{{ asset('assets/js/preloader.js') }} "></script>
<script src="{{ asset('assets/js/popup-image.js') }} "></script>
<script src="{{ asset('assets/js/contact-form.js') }} "></script>
<script src="{{ asset('assets/js/contact-validate.js') }} "></script>
<script src="{{ asset('assets/js/counter.js') }} "></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const buttons = document.querySelectorAll(".filter-buttons button");
        const gridItems = document.querySelectorAll(".grid-item");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const filter = button.getAttribute("data-filter");

                // Remove active class from all buttons
                buttons.forEach(btn => btn.classList.remove("active"));

                // Add active class to clicked button
                button.classList.add("active");

                // Show/hide grid items
                gridItems.forEach(item => {
                    if (filter === "*" || item.getAttribute("data-category") === filter) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>
</body>
</html>
