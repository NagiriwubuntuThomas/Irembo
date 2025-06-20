<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Irembo Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="announcement-bar text-center">
  <i class="bi bi-bell-fill"></i>
  <strong>New!</strong> The fiscal year 2025/2026 has started. Pay for your family’s mutuelle coverage 
  <a href="#">here</a>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">irembo<span class="text-dark">Gov</span></a>

    <div class="d-flex align-items-center ms-auto">
      <a href="#" class="btn btn-link me-3"><i class="bi bi-question-circle"></i> Support Center</a>
      <a href="auth/register.php" class="btn btn-link me-3"><i class="bi bi-person-plus"></i> Sign Up</a>
      <a href="auth/login.php" class="btn btn-link me-3"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
      <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" id="langDropdownBtn">
    <i class="bi bi-globe2"></i> <span id="currentLang">English</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item lang-option" href="#" data-lang="en">English</a></li>
    <li><a class="dropdown-item lang-option" href="#" data-lang="rw">Kinyarwanda</a></li>
    <li><a class="dropdown-item lang-option" href="#" data-lang="fr">French</a></li>
  </ul>
</div>

    </div>
  </div>
</nav>


<div class="hero-section">
  <h1 class="display-5">Welcome</h1>
  <div class="search-bar">
    <input type="text" class="form-control" placeholder="🔍 Search for services">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include('includes/footer.php'); ?>

<div class="container mt-4">
  <div class="bg-light rounded-4 p-4 shadow-sm d-flex flex-column flex-md-row align-items-start justify-content-between">
    
    <div class="d-flex">
      <div class="me-3">
        <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
          <i class="bi bi-megaphone-fill fs-4"></i>
        </div>
      </div>
      <div>
        <h5 class="fw-bold">Services on the upgraded IremboGov</h5>
        <p class="mb-1">Experience the upgraded IremboGov! With new features and a smoother experience shaped by your feedback, the journey just keeps getting better—stay tuned for more!</p>
        <div class="row">
          <div class="col-md-12 mt-2">
            <a href="#" class="me-4 text-primary text-decoration-none fw-semibold">RICTA - RW Domain Registration</a>
            <a href="#" class="me-4 text-primary text-decoration-none fw-semibold">IPOSITA - Register an ePoBox Address</a>
            <a href="#" class="me-4 text-primary text-decoration-none fw-semibold">IPOSITA - Renew an ePoBox Address</a>
            <a href="#" class="text-primary text-decoration-none fw-semibold d-block d-md-inline">IPOSITA - Change ePoBox Postal Office</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="mt-4 mt-md-0">
      <a href="#" class="btn btn-primary btn-lg px-4" style="background: linear-gradient(to right, #00c6ff, #0072ff); border: none;">
        Explore <i class="bi bi-box-arrow-up-right ms-1"></i>
      </a>
    </div>
  </div>
</div>

<div class="services-wrapper">
  <div class="container mt-4">
    <div class="bg-light rounded-4 p-4 shadow-sm">
      <div class="family-section">
        <h4>Family</h4>
        <div class="family-services">
          <ul>
            <li><a href="#">Authentication for an orphan's status</a></li>
            <li><a href="#">Certificate of Needy Survivor of the Genocide Perpetrated against
          <li><a href="#">Gender and Family Promotion MoUs</a></li>
          <li><a href="#">Recommendation Letter for Persons with Disabilities</a></li>
          <li><a href="#">Request for an identification number for a survivor of the 1994 Genocide against the Tutsi in need</a></li>
        </ul>
        <ul>
          <li><a href="#">Certificate of Cohabitation</a></li>
          <li><a href="#">Certificate for Widow/Widower</a></li>
          <li><a href="#">Certificate of Residence</a></li>
          <li><a href="#">Certificate of Genocide Survivors</a></li>
          <li><a href="#">Certificate of Being Single</a></li>
          <li><a href="#">Divorce Services</a></li>
        </ul>
        <ul>
          <li><a href="#">Birth Services</a></li>
          <li><a href="#">Marriage Services</a></li>
          <li><a href="#">Death Services</a></li>
          <li><a href="#">Adoption Record</a></li>
          <li><a href="#">Record of Recognition</a></li>
          <li><a href="#">Certificate of Succession</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="bg-light rounded-4 p-4 shadow-sm">
    <div class="identification-section family-section">
      <h4>Identification</h4>
      <div class="family-services">
        <ul>
          <li><a href="#">Change of name</a></li>
          <li><a href="#">Application for National ID Correction</a></li>
          <li><a href="#">Application for National ID</a></li>
          <li><a href="#">National ID Replacement</a></li>
        </ul>
        <ul>
          <li><a href="#">Certificate for Replacement of National Identity Card</a></li>
          <li><a href="#">Certificate of Full Identity</a></li>
        </ul>
        <ul>
          <li><a href="#">Certificate of Nationality</a></li>
          <li><a href="#">Certificate of Being Alive</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="services-wrapper">
  <div class="container mt-4">
    <div class="bg-light rounded-4 p-4 shadow-sm">
      <div class="family-section">
        <h4>Foreign Affairs Consular Services</h4>
        <div class="family-services">
          <ul>
            <li><a href="#">Request for Tax Exemption on Personal Belongings for Rwandans Returning Permanently from Abroad</a></li>
            <li><a href="#">Issuance of recommendation letter for Visa or Permit</a></li>
            <li><a href="#">Issuance of recommendation letter for Diplomatic and Service E-Passport</a></li>
          </ul>
          <ul>
            <li><a href="#">Legalization of public documents from Rwanda to be used abroad/Apostille</a></li>
            <li><a href="#">Legalization of documents from abroad to be used in Rwanda</a></li>
            <li><a href="#">Legalization of Power of Attorney for transfer of property</a></li>
          </ul>
          <ul>
            <li><a href="#">Issuance of recommendation letters to Rwandans living abroad for land-related services</a></li>
            <li><a href="#">Issuance of Note-Verbales to Rwandan officials travelling on official missions</a></li>
            <li><a href="#">Facilitation of issuance of plate numbers</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="bg-light rounded-4 p-4 shadow-sm">
      <div class="family-section">
        <h4>Agriculture & Livestock</h4>
        <div class="family-services">
          <ul>
            <li><a href="#">Purchase the vaccines</a></li>
            <li><a href="#">Purchase the Forage Seed</a></li>
          </ul>
          <ul>
            <li><a href="#">Purchase the bovine semen</a></li>
            <li><a href="#">Livestock Relocation</a></li>
          </ul>
          <ul>
            <li><a href="#">Recommendation Letter for VAT Exemption</a></li>
            <li><a href="#">Recommendation Letter to NGOs in Agriculture Sector</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer-irembo mt-5">
  <div class="container py-4">
    <div class="row align-items-center">
      <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
       
        <span class="ms-2 fw-bold" style="color:#0080dc;font-size:1.2rem;">irembo<span style="color:#222;">Gov</span></span>
      </div>
      <div class="col-md-4 text-center mb-3 mb-md-0">
        <a href="#" class="footer-link mx-2">Terms of Use</a>
        <a href="#" class="footer-link mx-2">Privacy Policy</a>
        <a href="#" class="footer-link mx-2">Help</a>
      </div>
      <div class="col-md-4 text-center text-md-end">
        <a href="#" class="footer-social mx-1" title="Instagram"><i class="bi bi-inst
        <a href="#" class="footer-social mx-1" title="Twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="footer-social mx-1" title="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="footer-social mx-1" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
        <span class="footer-copy ms-2">&copy; <?php echo date('Y'); ?> IremboGov. All rights reserved.</span>
      </div>
    </div>
  </div>
</footer>

<script>
const translations = {
  en: {
    welcome: "Welcome to IremboGov",
    desc: "Please register or login to continue.",
    lang: "English"
  },
  rw: {
    welcome: "Murakaza neza kuri IremboGov",
    desc: "Mwiyandikishe cyangwa winjire kugira ngo ukomeze.",
    lang: "Kinyarwanda"
  },
  fr: {
    welcome: "Bienvenue sur IremboGov",
    desc: "Veuillez vous inscrire ou vous connecter pour continuer.",
    lang: "French"
  }
};

document.querySelectorAll('.lang-option').forEach(function(item) {
  item.addEventListener('click', function(e) {
    e.preventDefault();
    const lang = this.getAttribute('data-lang');
    
    document.querySelectorAll('[data-i18n]').forEach(function(el) {
      const key = el.getAttribute('data-i18n');
      el.textContent = translations[lang][key];
    });

    document.getElementById('currentLang').textContent = translations[lang].lang;
  });
});
</script>

</body>
</html>
