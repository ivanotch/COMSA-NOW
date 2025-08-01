<?php
  require_once "../../backend/config/session.php";

  if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.html");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>COMSA-NOW - Settings</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/favicon/site.webmanifest">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="../assets/css/search.css">
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/login-form.css">
  <link rel="stylesheet" href="../assets/css/student-dash.css">
  <link rel="stylesheet" href="../assets/css/dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="index-page">
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar (Left Column) -->
      <div class="col-md-2 d-none d-lg-block bg-light min-vh-100">
        <div class="side-nav py-4 px-3 d-flex flex-column justify-content h-100">
          <div>
            <div class="text-center mb-5 side-nav-header">
              <img src="../assets/img/logo.png" class="img-fluid" alt="COMSA Logo">
              <h3 class="fw-bold">COMSA-NOW</h3>
            </div>

            <!-- Nav Menu -->
            <div class="side-nav-menu d-flex flex-column gap-3">
              <a href="../features/student-dashboard.php" class="btn text-start d-flex align-items-center gap-2">
                <i class="ri-home-9-line"></i> <span>Home</span>
              </a>
              <a href="../features/project-studs.php" class="btn text-start d-flex align-items-center gap-2">
                <i class="ri-shapes-line"></i> <span>Projects</span>
              </a>
              <a href="#" id="search-toggle" class="btn text-start d-flex align-items-center gap-2">
                <i class="ri-search-line"></i> <span>Search</span>
              </a>
              <a href="#" class="btn text-start d-flex align-items-center gap-2">
                <i class="ri-notification-3-line"></i> <span>Notification</span>
              </a>
              <a href="../features/settings-studs.php"
                class="btn text-start d-flex align-items-center gap-2 btn-active">
                <i class="ri-settings-line"></i> <span>Settings</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Settings Content (Right Column) -->
      <div class="col-lg-9 p-4">
        <div class="settings-container">
          <div class="settings-header">
            <h2><i class="bi bi-gear-fill"></i> Account Settings</h2>
            <p class="text-muted">Manage your account preferences and security</p>
          </div>

          <!-- Account Settings Section -->
          <div class="settings-section">
            <h3><i class="bi bi-person-circle"></i> Account Information</h3>

            <div class="settings-item">
              <div class="item-info">
                <h4>Profile Picture</h4>
                <p>Update your profile photo</p>
              </div>
              <div class="item-action">
                <button class="btn-settings" data-bs-toggle="modal" data-bs-target="#profilePicModal">Change</button>
              </div>
            </div>

            <div class="settings-item">
              <div class="item-info">
                <h4>Password</h4>
                <p>Last changed 3 months ago</p>
              </div>
              <div class="item-action">
                <button class="btn-settings">Change</button>
              </div>
            </div>
          </div>

          <!-- Privacy & Security Section -->
          <div class="settings-section">
            <h3><i class="bi bi-shield-lock"></i> Privacy & Security</h3>

            <div class="settings-item">
              <div class="item-info">
                <h4>Account Activity</h4>
                <p>View login history and active sessions</p>
              </div>
              <div class="item-action">
                <button class="btn-settings-outline" data-bs-toggle="modal"
                  data-bs-target="#accountActivityModal">View</button>
              </div>
            </div>
          </div>

          <!-- Preferences Section -->
          <div class="settings-section">
            <h3><i class="bi bi-sliders"></i> Preferences</h3>

            <div class="settings-item">
              <div class="item-info">
                <h4>Dark Mode</h4>
                <p>Switch between light and dark theme</p>
              </div>
              <div class="item-action">
                <label class="toggle-switch">
                  <input type="checkbox" id="darkModeToggle">
                  <span class="toggle-slider"></span>
                </label>
              </div>
            </div>
          </div>

          <!-- Support & About Section -->
          <div class="settings-section">
            <h3><i class="bi bi-info-circle"></i> Support & Information</h3>

            <div class="settings-item">
              <div class="item-info">
                <h4>Help Center</h4>
                <p>Get help with using COMSA-NOW</p>
              </div>
              <div class="item-action">
                <button class="btn-settings-outline">Visit</button>
              </div>
            </div>

            <div class="settings-item">
              <div class="item-info">
                <h4>Privacy Policy</h4>
                <p>Read our data privacy guidelines</p>
              </div>
              <div class="item-action">
                <button class="btn-settings-outline" data-bs-toggle="modal"
                  data-bs-target="#privacyPolicyModal">View</button>
              </div>
            </div>

            <div class="settings-item">
              <div class="item-info">
                <h4>Terms of Service</h4>
                <p>Review our terms and conditions</p>
              </div>
              <div class="item-action">
                <button class="btn-settings-outline" data-bs-toggle="modal" data-bs-target="#termsModal">View</button>
              </div>
            </div>

            <div class="settings-item">
              <div class="item-info">
                <h4>Report a Problem</h4>
                <p>Let us know about any issues</p>
              </div>
              <div class="item-action">
                <button class="btn-settings-outline">Contact</button>
              </div>
            </div>
          </div>
          <!-- About COMSA Section -->
          <div class="about-comsa">
            <h4>About COMSA</h4>
            <p>The Computer Science Students' Association (COMSA) is the official organization for Computer Science
              students at our university. We aim to foster a community of tech enthusiasts, provide learning
              opportunities, and bridge the gap between academia and industry through workshops, hackathons, and
              networking events.</p>
            <p>COMSA-NOW is our digital platform designed to connect students, showcase projects, and facilitate
              collaboration within the Computer Science community.</p>
          </div>

          <!-- Account Actions -->
          <div class="d-flex justify-content-end mt-4">
            <button id="logoutBtn" class="btn btn-danger">Log Out</button>
          </div>
        </div>
      </div>

      <!-- Bottom Navigation Bar (for md and below) -->
      <nav class="d-lg-none fixed-bottom bg-light border-top">
        <div class="d-flex justify-content-around py-2">
          <a href="../features/student-dashboard.php" class="text-center mt-2">
            <i class="ri-home-9-line fs-1"></i>
          </a>
          <a href="../features/project-studs.php" class="text-center mt-2">
            <i class="ri-shapes-line fs-1"></i>
          </a>
          <a href="#" class="text-center mt-2">
            <i class="ri-add-circle-line fs-1"></i>
          </a>
          <a href="#" id="createPostTrigger" class="text-center mt-2">
            <i class="ri-notification-3-line fs-1"></i>
          </a>
          <a href="../features/settings-studs.php" class="text-center mt-2 btn-active-mobile">
            <i class="ri-settings-line fs-1"></i>
          </a>
        </div>
      </nav>
    </div>



    <!-- Search modal -->
    <div class="search-popup">
      <div class="search-container">
        <div class="search-input-container">
          <input type="text" placeholder="Search projects..." class="search-input">
          <button class="search-button"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>

    <!-- Profile Picture Modal -->
    <div class="modal fade" id="profilePicModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Change Profile Picture</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img id="profilePicPreview" src="../assets/img/team/sampleTeam.jpg" class="profile-pic-preview"
              alt="Current Profile Picture">
            <div class="mb-3">
              <input type="file" class="form-control" id="profilePicUpload" accept="image/*">
            </div>
            <div class="d-flex justify-content-center gap-2">
              <button class="btn btn-outline-secondary" id="removeProfilePic">Remove Current</button>
              <button class="btn btn-primary" id="saveProfilePic">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Account Activity Modal -->
    <div class="modal fade" id="accountActivityModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Account Activity</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-info">
              <i class="bi bi-info-circle-fill"></i> This shows your recent login activity.
            </div>
            <table class="activity-table">
              <thead>
                <tr>
                  <th>Date & Time</th>
                  <th>Device</th>
                  <th>Location</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Just now</td>
                  <td>Chrome on Windows</td>
                  <td>Manila, PH</td>
                  <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                  <td>2 hours ago</td>
                  <td>Safari on iPhone</td>
                  <td>Quezon City, PH</td>
                  <td><span class="badge bg-secondary">Logged out</span></td>
                </tr>
                <tr>
                  <td>Yesterday, 3:45 PM</td>
                  <td>Firefox on Linux</td>
                  <td>Makati, PH</td>
                  <td><span class="badge bg-secondary">Logged out</span></td>
                </tr>
                <tr>
                  <td>June 15, 10:30 AM</td>
                  <td>Edge on Windows</td>
                  <td>Cavite, PH</td>
                  <td><span class="badge bg-secondary">Logged out</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Privacy Policy Modal -->
    <div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Privacy Policy</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="policy-content">
              <h4>1. Introduction</h4>
              <p>Welcome to COMSA-NOW. We are committed to protecting your personal information and your right to
                privacy. If you have any questions or concerns about this privacy notice, or our practices with regards
                to your personal information, please contact us.</p>

              <h4>2. Information We Collect</h4>
              <p>We collect personal information that you voluntarily provide to us when you register on the platform,
                express an interest in obtaining information about us or our products and services, when you participate
                in activities on the platform, or otherwise when you contact us.</p>

              <h4>3. How We Use Your Information</h4>
              <p>We use personal information collected via our platform for a variety of business purposes described
                below. We process your personal information for these purposes in reliance on our legitimate business
                interests, in order to enter into or perform a contract with you, with your consent, and/or for
                compliance with our legal obligations.</p>

              <h4>4. Will Your Information Be Shared With Anyone?</h4>
              <p>We only share information with your consent, to comply with laws, to provide you with services, to
                protect your rights, or to fulfill business obligations.</p>

              <h4>5. How Long Do We Keep Your Information?</h4>
              <p>We will only keep your personal information for as long as it is necessary for the purposes set out in
                this privacy notice, unless a longer retention period is required or permitted by law.</p>

              <h4>6. How Do We Keep Your Information Safe?</h4>
              <p>We have implemented appropriate technical and organizational security measures designed to protect the
                security of any personal information we process.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Terms of Service Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Terms of Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="policy-content">
              <h4>1. Acceptance of Terms</h4>
              <p>By accessing or using the COMSA-NOW platform, you agree to be bound by these Terms of Service. If you
                do not agree to all the terms and conditions, then you may not access the platform or use any services.
              </p>

              <h4>2. User Responsibilities</h4>
              <p>You are responsible for maintaining the confidentiality of your account and password and for
                restricting access to your computer or device. You agree to accept responsibility for all activities
                that occur under your account or password.</p>

              <h4>3. Content Standards</h4>
              <p>You agree not to post content that is illegal, threatening, defamatory, abusive, harassing, degrading,
                intimidating, fraudulent, deceptive, invasive, racist, or contains any type of suggestive,
                inappropriate, or explicit language.</p>

              <h4>4. Intellectual Property</h4>
              <p>The platform and its original content, features, and functionality are and will remain the exclusive
                property of COMSA and its licensors. The platform is protected by copyright, trademark, and other laws.
              </p>

              <h4>5. Termination</h4>
              <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason
                whatsoever, including without limitation if you breach the Terms.</p>

              <h4>6. Changes to Terms</h4>
              <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. We will
                provide notice of any changes by posting the new Terms on this page.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Agree</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/settings-studs.js"></script>
    <script src="../assets/js/studs-search.js"></script>
    <script src="../assets/js/studs-main-func.js"></script>

    <script>
      // Wait for DOM to be fully loaded
      document.addEventListener('DOMContentLoaded', function () {
        // =============================================
        // DARK MODE FUNCTIONALITY
        // =============================================
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        // Function to set dark mode
        const setDarkMode = (enabled) => {
          if (enabled) {
            body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'dark');
            darkModeToggle.checked = true;
            console.log('Dark mode enabled');
          } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'light');
            darkModeToggle.checked = false;
            console.log('Dark mode disabled');
          }

          // Dispatch custom event for other components to listen to
          document.dispatchEvent(new CustomEvent('darkModeChange', {
            detail: { isDarkMode: enabled }
          }));
        };

        // Check for saved user preference or use system preference
        const initializeDarkMode = () => {
          try {
            const savedMode = localStorage.getItem('darkMode');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedMode === 'dark' || (!savedMode && systemPrefersDark)) {
              setDarkMode(true);
            } else {
              setDarkMode(false);
            }
          } catch (error) {
            console.error('Error initializing dark mode:', error);
            // Fallback to light mode if there's an error
            setDarkMode(false);
          }
        };

        // Initialize dark mode
        initializeDarkMode();

        // Listen for system preference changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
          if (!localStorage.getItem('darkMode')) { // Only auto-change if no explicit preference
            setDarkMode(e.matches);
          }
        });

        // Toggle dark mode
        if (darkModeToggle) {
          darkModeToggle.addEventListener('change', function () {
            setDarkMode(this.checked);
          });
        }

        // =============================================
        // PROFILE PICTURE MODAL FUNCTIONALITY
        // =============================================
        const initializeProfilePictureModal = () => {
          try {
            const profilePicModal = new bootstrap.Modal('#profilePicModal');
            const profilePicUpload = document.getElementById('profilePicUpload');
            const profilePicPreview = document.getElementById('profilePicPreview');
            const removeProfilePic = document.getElementById('removeProfilePic');
            const saveProfilePic = document.getElementById('saveProfilePic');

            if (!profilePicUpload || !profilePicPreview) return;

            // Preview uploaded image
            profilePicUpload.addEventListener('change', function (e) {
              const file = e.target.files[0];
              if (file) {
                // Validate file type and size
                const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
                const maxSize = 5 * 1024 * 1024; // 5MB

                if (!validTypes.includes(file.type)) {
                  alert('Please select a valid image file (JPEG, PNG, GIF)');
                  this.value = '';
                  return;
                }

                if (file.size > maxSize) {
                  alert('Image size must be less than 5MB');
                  this.value = '';
                  return;
                }

                const reader = new FileReader();
                reader.onloadstart = () => {
                  profilePicPreview.src = '../assets/img/loading.gif'; // Show loading indicator
                };
                reader.onload = (event) => {
                  profilePicPreview.src = event.target.result;
                };
                reader.onerror = () => {
                  alert('Error reading image file');
                  profilePicPreview.src = '../assets/img/default-profile.png';
                };
                reader.readAsDataURL(file);
              }
            });

            // Remove current profile picture
            if (removeProfilePic) {
              removeProfilePic.addEventListener('click', function () {
                profilePicPreview.src = '../assets/img/default-profile.png';
                profilePicUpload.value = '';
              });
            }

            // Save profile picture
            if (saveProfilePic) {
              saveProfilePic.addEventListener('click', function () {
                // Simulate upload delay
                this.disabled = true;
                this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';

                // In a real app, you would upload to server here
                setTimeout(() => {
                  // Show success message with Toast
                  const toastHTML = `
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                  <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-success text-white">
                      <strong class="me-auto">Success</strong>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                      Profile picture updated successfully!
                    </div>
                  </div>
                </div>
              `;

                  document.body.insertAdjacentHTML('beforeend', toastHTML);

                  // Remove toast after 3 seconds
                  setTimeout(() => {
                    const toast = document.querySelector('.toast');
                    if (toast) {
                      toast.classList.remove('show');
                      setTimeout(() => toast.remove(), 300);
                    }
                  }, 3000);

                  // Reset button and close modal
                  this.disabled = false;
                  this.textContent = 'Save Changes';
                  profilePicModal.hide();
                }, 1500);
              });
            }
          } catch (error) {
            console.error('Error initializing profile picture modal:', error);
          }
        };

        // =============================================
        // TOOLTIP INITIALIZATION
        // =============================================
        const initializeTooltips = () => {
          try {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
              new bootstrap.Tooltip(tooltipTriggerEl, {
                trigger: 'hover focus'
              });
            });
          } catch (error) {
            console.error('Error initializing tooltips:', error);
          }
        };

        // =============================================
        // MODAL INITIALIZATION
        // =============================================
        const initializeModals = () => {
          try {
            // Initialize all modals with enhanced options
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
              new bootstrap.Modal(modal, {
                backdrop: 'static',
                keyboard: false
              });
            });

            // Add custom behavior to policy modals
            const policyModals = ['#privacyPolicyModal', '#termsModal'];
            policyModals.forEach(modalId => {
              const modalEl = document.querySelector(modalId);
              if (modalEl) {
                modalEl.addEventListener('shown.bs.modal', function () {
                  const policyContent = this.querySelector('.policy-content');
                  if (policyContent) {
                    policyContent.scrollTop = 0; // Reset scroll position
                  }
                });
              }
            });
          } catch (error) {
            console.error('Error initializing modals:', error);
          }
        };

        // =============================================
        // ACCOUNT ACTIVITY TABLE ENHANCEMENTS
        // =============================================
        const enhanceActivityTable = () => {
          try {
            const activityTable = document.querySelector('.activity-table');
            if (activityTable) {
              // Make table rows interactive
              const rows = activityTable.querySelectorAll('tbody tr');
              rows.forEach(row => {
                row.addEventListener('click', function () {
                  rows.forEach(r => r.classList.remove('table-active'));
                  this.classList.add('table-active');
                });
              });
            }
          } catch (error) {
            console.error('Error enhancing activity table:', error);
          }
        };

        // =============================================
        // INITIALIZE ALL COMPONENTS
        // =============================================
        initializeProfilePictureModal();
        initializeTooltips();
        initializeModals();
        enhanceActivityTable();

        // Add resize observer for responsive adjustments
        const resizeObserver = new ResizeObserver(entries => {
          // Handle responsive adjustments here if needed
        });

        resizeObserver.observe(document.body);

        // Cleanup on page unload
        window.addEventListener('beforeunload', function () {
          resizeObserver.disconnect();
        });
      });
    </script>
</body>

</html>