<!-- PRE LOADER -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/carousel.js') }}"></script>
<script src="{{ asset('assets/js/animation.js') }}"></script>
<script src="{{ asset('assets/js/video-popup.js') }}"></script>
<script src="{{ asset('assets/js/video.js') }}"></script>
<script src="{{ asset('assets/js/back-to-top-button.js') }}"></script>
<script src="{{ asset('assets/js/preloader.js') }}"></script>
<script src="{{ asset('assets/js/popup-image.js') }}"></script>
<script src="{{ asset('assets/js/contact-form.js') }}"></script>
<script src="{{ asset('assets/js/contact-validate.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
@yield('script')
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
                    if (filter === "*" || item.getAttribute("data-category") ===
                        filter) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });

    function downloadCV(button) {
        const fileUrl = button.getAttribute('data-file');
        const link = document.createElement('a');
        link.href = fileUrl;
        link.download = fileUrl.split('/').pop(); // Extraire le nom du fichier
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
    document.addEventListener('DOMContentLoaded', () => {

 // 1. Récupérer le bouton “Book Appointment”
  const bookBtn = document.getElementById('book-appointment-btn');
  // 2. Récupérer le conteneur du pop-up
  const contactPopup = document.getElementById('fixed-form-container');
   if (bookBtn && contactPopup) {
    bookBtn.addEventListener('click', function(e) {
      e.preventDefault();

      // 3.1. Faire défiler la page jusqu’en bas (scroll fluide vers le bas)
      window.scrollTo({
        top: document.documentElement.scrollHeight,
        behavior: 'smooth'
      });

      // 3.2. Dès que le scroll est terminé (ou un petit délai pour laisser le scroll se terminer),
      //        on ajoute la classe .popup-visible pour faire apparaître le pop-up.
      //        On peut laisser un délai de 500 ms, mais vous pouvez ajuster.

      setTimeout(function() {
        contactPopup.classList.add('popup-visible');
        contactPopup.classList.remove('popup-hidden');
      }, 500); // 0.5 seconde : à ajuster si nécessaire
    });
  }



        const boxes = document.querySelectorAll('.practice-con .box');

        boxes.forEach(box => {
            const backgroundUrl = box.getAttribute('data-background');

            box.addEventListener('mouseenter', () => {
                const beforeElement = document.createElement('style');
                beforeElement.innerHTML = `
                .practice-con .box:hover::before {
                    background-image: url("${backgroundUrl}");
                    display: block;
                }
            `;
                document.head.appendChild(beforeElement);
            });
        });

        // 1. Sélection des éléments
        const form = document.getElementById('newsletter-form');
        const emailInput = document.getElementById('newsletter-email');
        const button = document.getElementById('newsletter-button');
        const feedback = document.getElementById('newsletter-feedback');

        // 2. Fonction utilitaire : validation basique du format d’email
        function isValidEmail(email) {
            // Expression régulière simple pour format d'email
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
        // 3. Récupérer le token CSRF depuis la balise meta
        function getCsrfToken() {
            const tokenMeta = document.querySelector('meta[name="csrf-token"]');
            return tokenMeta ? tokenMeta.getAttribute('content') : '';
        }
        // 4. Gestionnaire d’envoi du formulaire
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // On empêche l’envoi normal du formulaire

            // Réinitialiser les messages précédents
            feedback.textContent = '';
            feedback.style.color = '';

            const email = emailInput.value.trim();

            // 4.1. Validation : champ non vide et format valide
            if (email === '') {
                feedback.textContent = '@lang('info.footer.msgErrEmail')';
                feedback.style.color = 'red';
                emailInput.focus();
                return;
            }
            if (!isValidEmail(email)) {
                feedback.textContent = '@lang('info.footer.msgErrFormatEmail')';
                feedback.style.color = 'red';
                emailInput.focus();
                return;
            }

            // 4.2. Préparer l’envoi (désactiver le bouton et indiquer le chargement)
            button.disabled = true;
            button.innerHTML = 'Envoi en cours… <i class="fa-solid fa-spinner fa-spin"></i>';

            // 4.3. Construction de la requête AJAX (avec fetch)
            fetch('add.newsletter', { // ← Adaptez cette URL à votre route Laravel
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': getCsrfToken()
                    },
                    body: JSON.stringify({
                        email: email
                    })
                }).then(async (response) => {
                    // On attend la réponse JSON
                    const data = await response.json();

                    if (response.ok) {
                        // 4.4.1. En cas de succès (HTTP 200-299)
                        feedback.textContent = data.message ||
                            '@lang("info.footer.msgSuccessEmail")';
                        feedback.style.color = 'green';
                        emailInput.value = ''; // Vider le champ
                    } else {
                        // 4.4.2. En cas d’erreur côté serveur (HTTP 4xx / 5xx)
                        // data.errors peut contenir les messages d’erreur venant de Laravel
                        if (data.errors && data.errors.email) {
                            feedback.textContent = data.errors.email[0];
                        } else if (data.message) {
                            feedback.textContent = data.message;
                        } else {
                            feedback.textContent =
                                '@lang("info.footer.msgExceptionEmail")';
                        }
                        feedback.style.color = 'red';
                    }
                }).catch((error) => {
                    // 4.4.3. En cas de problème réseau ou exception
                    console.error('Erreur AJAX newsletter :', error);
                    feedback.textContent ='@lang("info.footer.msgErr")';
                    feedback.style.color = 'red';
                })
                .finally(() => {
                    // 4.5. Réactiver le bouton et remettre le libellé d’origine
                    button.disabled = false;
                    button.innerHTML = "@lang('info.footer.btnNewsletter') <i class='fa-solid fa-arrow-right'></i>";
                });
        });
    });
</script>
</body>

</html>
