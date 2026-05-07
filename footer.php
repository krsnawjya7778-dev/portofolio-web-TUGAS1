<!-- BOOTSTRAP ICON -->
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
  .footer-section {
    background: #0f172a;
    position: relative;
    overflow: hidden;
  }

  .wave svg {
    display: block;
    width: 100%;
    height: 60px;
  }

  .footer-link {
    color: #94a3b8;
    text-decoration: none;
    transition: 0.3s;
  }

  .footer-link:hover {
    color: white;
    padding-left: 5px;
  }

  .social-icon {
    width: 38px;
    height: 38px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    text-decoration: none;
    transition: 0.4s;
  }

  .social-icon:hover {
    transform: translateY(-5px);
    background: #2563eb;
    color: white;
  }
</style>

<!-- FOOTER -->
<footer class="footer-section mt-5">

  <!-- Wave -->
  <div class="wave" style="line-height:0;">
    <svg viewBox="0 0 1440 320">
      <path fill="#0f172a" fill-opacity="1"
        d="M0,128L48,122.7C96,117,192,107,288,122.7C384,139,480,181,576,192C672,203,768,181,864,149.3C960,117,1056,75,1152,80C1248,85,1344,139,1392,165.3L1440,192L1440,320L0,320Z">
      </path>
    </svg>
  </div>

  <div class="container text-light py-4">

    <div class="row g-4">

      <!-- About -->
      <div class="col-md-4">
        <h5 class="fw-bold mb-3">Krisna Wijaya</h5>

        <p class="text-secondary small">
          Informatics Engineering student with a strong interest
          in backend development and web technologies.
        </p>
      </div>

      <!-- Navigation -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-3">Navigation</h6>

        <ul class="list-unstyled small">
          <li class="mb-2">
            <a href="index.php?page=about" class="footer-link">About</a>
          </li>

          <li class="mb-2">
            <a href="index.php?page=studies" class="footer-link">Studies</a>
          </li>

          <li>
            <a href="index.php?page=contact" class="footer-link">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Social -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-3">Connect</h6>

        <div class="d-flex gap-2">

          <a href="index.php?page=contact" class="social-icon">
            <i class="bi bi-instagram"></i>
          </a>

          <a href="index.php?page=contact" class="social-icon">
            <i class="bi bi-whatsapp"></i>
          </a>

        </div>
      </div>

    </div>

    <hr class="border-secondary my-4">

    <div class="text-center text-secondary small">
      © 2026 Krisna Wijaya • All Rights Reserved
    </div>

  </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>