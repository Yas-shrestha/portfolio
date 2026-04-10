<footer id="footer" class="footer position-relative light-background">

    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Yas Shrestha</strong> <span>All Rights
                    Reserved</span></p>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://www.linkedin.com/in/yas-shrestha-a69342263/">Yas Shrestha</a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

{{-- ══════════════════════════════════════════════════
     CONTACT FORM JS (preserved exactly)
══════════════════════════════════════════════════ --}}
<script>
    const form = document.getElementById('contactForm');
    const msgBox = document.getElementById('formMessage');

    let hideTimer = null;

    function showMessage(type, message, errors = []) {
        if (hideTimer) clearTimeout(hideTimer);
        const isSuccess = type === 'success';
        msgBox.style.display = 'block';
        msgBox.className = 'mb-4 p-3 rounded ' + (isSuccess ? 'bg-success text-white' : 'bg-danger text-white');
        let html = `<div>${message}</div>`;
        if (errors.length) {
            html += `<ul class="mt-2 mb-0 ps-3">`;
            errors.forEach(err => {
                html += `<li>${err}</li>`;
            });
            html += `</ul>`;
        }
        msgBox.innerHTML = html;
        hideTimer = setTimeout(() => {
            msgBox.style.display = 'none';
            msgBox.innerHTML = '';
        }, 5000);
    }

    function collectErrors(errorObj) {
        if (!errorObj || typeof errorObj !== 'object') return [];
        return Object.values(errorObj).flat().filter(Boolean);
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const oldBtnText = submitBtn ? submitBtn.innerText : '';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerText = 'Sending...';
        }
        msgBox.style.display = 'none';
        msgBox.innerHTML = '';
        try {
            const formData = new FormData(form);
            const response = await fetch('/api/contact/store', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            const rawText = await response.text();
            let data = {};
            try {
                data = JSON.parse(rawText);
            } catch (err) {
                data = {
                    raw: rawText
                };
            }
            if (response.ok) {
                showMessage('success', data.message || 'Message sent successfully!');
                form.reset();
                return;
            }
            if (response.status === 422) {
                const errs = collectErrors(data.errors);
                showMessage('error', 'Please fix the errors below:', errs.length ? errs : [
                    'Invalid input.'
                ]);
                return;
            }
            showMessage('error', data.message || 'Something went wrong. Please try again.');
            console.log('Error response:', data);
        } catch (err) {
            showMessage('error', 'Network error. Please check your connection and try again.');
            console.error(err);
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerText = oldBtnText || 'Send Message';
            }
        }
    });
</script>

{{-- ══════════════════════════════════════════════════
     INTERSECTION OBSERVER — Scroll reveal animations
══════════════════════════════════════════════════ --}}
<script>
    (function() {
        const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
        if (!els.length) return;
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });
        els.forEach(el => observer.observe(el));
    })();
</script>

{{-- ══════════════════════════════════════════════════
     ACTIVE NAV HIGHLIGHT on scroll
══════════════════════════════════════════════════ --}}
<script>
    (function() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navmenu ul li a');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(a => a.classList.remove('active'));
                    const active = document.querySelector(
                        `.navmenu ul li a[href="#${entry.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, {
            rootMargin: '-40% 0px -55% 0px'
        });
        sections.forEach(s => observer.observe(s));
    })();
</script>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
