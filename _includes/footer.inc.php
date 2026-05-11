<footer class="py-5">
    <div class="container">
        <div class="quick-links mt-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <!-- <h2>EMMAOJEKS</h2> -->
                        <div>
                            <img src="<?= $assetsPath ?? '' ?>assets/img/white-logo.png" class="img-fluid" alt="Emmatech Logo">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact mb-3">
                            <h5>Get in Touch With Us</h5>
                        </div>
                        <address>
                            <?= $companyAddress ?>
                        </address>
                        <a class="phone" href="tel:<?= $companyPhone ?>"><?= $companyPhone ?></a>
                        <a href="mailto:<?= $companyEmail ?>"><?= $companyEmail ?></a>
                    </div>
                    <div class="col-lg-4">
                        <div class="social-links d-flex gap-2">
                            <a href="https://web.facebook.com/profile.php?id=100088521400367" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://x.com/emmaojeks" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/emmaojekstech/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://wa.me/2349063982322" class="social-icon"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.threads.com/@emmaojekstech" class="social-icon"><i class="fa-brands fa-threads"></i></a>
                            <a href="https://www.tiktok.com/@emmaojekstech" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright-text text-center mt-4">
            <p>&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Emmaojeks. All rights reserved.</p>
        </div>
    </div>
    <a href="https://wa.me/2349063982322" class="floating-whatsapp" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</footer>