<?php

// $msg = "";
// if(isset($_GET['message'])){
// include 'register.php';
// $msg = $_GET['message'];
// }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#01426a">
    <meta name="apple-mobile-web-app-status-bar-style" content="#01426a">
    <meta name="description" content="Escrow.com provides the best online escrow transaction services and accounts that facilitate and accelerate e-commerce by assuring a secure settlement.">
    <title>Sign Up: Create an Escrow Account - Escrow.com</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/build/images/favicons/favicon-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="/build/images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/build/images/favicons/favicon-16x16.png" sizes="16x16" />
</head>

<body class="" data-locale="en">

<?php include 'header.php';?>
    <section class="content">
        <main role="main">
            <section class="section signupLogin section--form">
                <div class="section-container">
                    <div class="signupLogin-form section-form defaultForm--light">
                        <!-- login form -->
                        <form class="defaultForm loginForm" action="register.php" method="post">
                            <div class="signupLogin-header">
                                <h2 class="section-formHeading signupLogin-header-heading" data-related-name="signupLogin-title" role="heading">Log in to Escrow.com</h2>
                            </div>
                            <div class="defaultForm-errors loginForm-errors" data-target="form-error"></div>
                            <fieldset class="defaultForm-fieldSet">
                                <div class="field" >
                                    <label class="field-label" for="field-username">
                                        <span data-target="field-label-username">Please enter your email address</span><sup class="field-required"> *</sup>
                                        <span class="field-validIcon">
                                            <svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
                                                        l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z">
                                                </path>
                                            </svg>
                                        </span>

                                    </label>
                                    <div class="field-input">
                                        <div class="field-prefix">
                                            <div class="field-prefix-wrapper">
                                                <span class="field-prefix-label" data-component="field-prefix" data-related-name="username-prefix">
                                                    <svg version="1.1" class="icon icon--email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24.6 20" enable-background="new 0 0 24.6 20" xml:space="preserve">
                                                        <path d="M1.5,0C0.7,0,0,0.7,0,1.5v16.9C0,19.3,0.7,20,1.5,20h21.5c0.8,0,1.5-0.7,1.5-1.5V1.5c0-0.8-0.7-1.5-1.5-1.5H1.5z M22.3,2.3
	                                                        v0.6l-10,8.4l-10-8.4V2.3H22.3z M2.3,17.7V5.9l9,7.6c0.3,0.2,0.6,0.4,1,0.4c0.4,0,0.7-0.1,1-0.4l9-7.6v11.8H2.3z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!--INPUT -->
                                        <input type="email" class="defaultInput" id="email" name="email" required autocomplete="off">
                                    </div>


                                    <div class="field-error field-error--bulleted is-hidden" data-target="field-error" data-attr="error-invalid">
                                        <span class="field-errorMsg" id="error-username">Please enter a valid email address</span>
                                    </div>


                                </div>

                                <div class="field" data-target="field" data-field="password">

                                    <label class="field-label" for="field-password">
                                        <span data-target="field-label-password">Please enter your password</span><sup class="field-required"> *</sup>
                                        <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	                                            l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z"></path>
                                            </svg></span>

                                    </label>
                                    <div class="field-input">
                                        <div class="field-prefix">
                                            <div class="field-prefix-wrapper">
                                                <span class="field-prefix-label" data-component="field-prefix" data-related-name="password-prefix"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.1 24.7" enable-background="new 0 0 20.1 24.7" xml:space="preserve" class="icon icon--secure">
                                                        <path d="M16.2,9.3V6.2C16.2,2.8,13.4,0,10,0C6.6,0,3.9,2.8,3.9,6.2v3.1H1.5C0.7,9.3,0,10,0,10.8v12.3c0,0.9,0.7,1.5,1.5,1.5h17
                                                            c0.9,0,1.5-0.7,1.5-1.5V10.8c0-0.9-0.7-1.5-1.5-1.5H16.2z M6.2,6.2C6.2,4,7.9,2.3,10,2.3c2.1,0,3.9,1.7,3.9,3.9v3.1H6.2V6.2z
                                                            M17.8,22.4H2.3V11.6h15.4V22.4z"></path>
                                                    </svg></span>
                                            </div>
                                        </div>
                                        <input type="password" class="defaultInput" id="password" name="password" required autocomplete="on">
                                    </div>

                                    <a href="#" class="field-link" draggable="true" tabindex="-1">Recover your password</a>


                                </div>
                            </fieldset>

                            <button class="btn btn--secondary  signupLogin-btn" type="submit" id="login" name="login">

                                Secure Login

                            </button>
                            <footer class="signupLogin-footer">

                                <a href="signup.php" class="btn btn--link  signupLogin-footer-link" type="button" data-target="signup.php" >

                                    Register an account

                                </a>
                            </footer>


                        </form>
                        <!-- signup form -->



                    </div>
                </div>
            </section>

        </main>

        <footer class="defaultFooter">
            <div class="defaultFooter-container section-container">
                <div class="defaultFooter-language defaultFooter-item" data-component="languageSelector">
                    <h2 class="defaultFooter-title" role="heading">Language</h2>
                    <div class="defaultSelect defaultSelect--invert defaultSelect--flags">
                        <span class="defaultSelect-flag" data-select-icon="defaultFooter-languageSelect" data-select-value="en"></span> <select class="defaultSelect-select" data-target="field-focusable" name="defaultFooter-languageSelect" id="field-defaultFooter-languageSelect" selected="en">
                            <option value="en" selected>English</option>
                            <option value="zh">中文(简体)</option>
                        </select>
                    </div>
                </div>

                <div class="defaultFooter-nav defaultFooter-item">
                    <a class="defaultFooter-title defaultFooter-title--expand" href="/services" data-target="footer-services">Escrow Services</a>
                    <nav class="defaultFooter-links" aria-label="services navigation">
                        <a class="defaultFooter-link" href="/cars" data-target="footer-vehicle">Vehicle Escrow</a>
                        <a class="defaultFooter-link" href="/domains" data-target="footer-domain-name">Domain and Website Escrow</a>
                        <a class="defaultFooter-link" href="/domain-name-holding" data-target="footer-domain-name-holding">Domain Name Holding Escrow</a>
                        <a class="defaultFooter-link" href="/general-merchandise" data-target="footer-general-merchandise">General Merchandise Escrow</a>
                        <a class="defaultFooter-link" href="/milestones" data-target="footer-milestone">Milestone Escrow</a>
                        <a class="defaultFooter-link" href="/broker" data-target="footer-broker">Broker Escrow</a>
                        <a class="defaultFooter-link" href="/ipv4" data-target="footer-ipv4">IPv4 Escrow</a>
                        <a class="defaultFooter-link" href="/ppe" data-target="footer-ppe">PPE Escrow</a>
                        <a class="defaultFooter-link" href="/art" data-target="footer-art">Art Escrow</a>
                    </nav>
                </div>

                <div class="defaultFooter-nav defaultFooter-item">
                    <a class="defaultFooter-title defaultFooter-title--expand" href="/helpdesk" data-target="footer-support">Support</a>
                    <nav class="defaultFooter-links" aria-label="support navigation">
                        <a class="defaultFooter-link" href="/fee-calculator" data-target="footer-fee-calculator">Fee Calculator</a>
                        <a class="defaultFooter-link" href="/support/payment-options" data-target="footer-payment-options">Payment Options</a>
                        <a class="defaultFooter-link" href="/support/approved-carriers" data-target="footer-approved-carriers">Approved Carriers</a>
                        <a class="defaultFooter-link" href="/why-escrowcom/security" data-target="footer-security">Security</a>
                        <a class="defaultFooter-link" href="/what-is-escrow/fraud-prevention" data-target="footer-fraud-prevention">Fraud Prevention</a>
                        <a class="defaultFooter-link" href="/learn-more" data-target="footer-learn-more">Common Questions</a>
                        <a class="defaultFooter-link" href="#" data-target="footer-report-bug" data-target-modal="bug-report">Report A Bug</a>
                    </nav>
                </div>

                <div class="defaultFooter-nav defaultFooter-item">
                    <a class="defaultFooter-title defaultFooter-title--expand" href="/partners" data-target="footer-partners">Partners</a>
                    <nav class="defaultFooter-links" aria-label="partner navigation">
                        <a class="defaultFooter-link" href="/partners/benefits" data-target="footer-ecart">Benefits</a>
                        <a class="defaultFooter-link" href="/api" data-target="footer-ecart">Get Started</a>
                        <a class="defaultFooter-link" href="/partners/our-partners" data-target="footer-ecart">Our Partners</a>
                        <a class="defaultFooter-link" href="/sales" data-target="footer-sales-form">Partner Enquiry</a>
                        <a class="defaultFooter-link" href="/api/docs" data-target="footer-api-docs">API Guide</a>
                    </nav>

                </div>

                <div class="defaultFooter-contact defaultFooter-item">
                    <nav class="defaultFooter-links" aria-label="company navigation">
                        <a class="defaultFooter-title" href="/contact-us" data-target="footer-company">Company</a>
                        <a class="defaultFooter-link" href="/why-escrowcom/about-us" data-target="footer-leadership">About Us</a>
                        <a class="defaultFooter-link" href="/awards" data-target="footer-awards">Awards</a>
                        <a class="defaultFooter-link" href="/news" data-target="footer-news">In the News</a>
                        <a class="defaultFooter-link" href="/contact-us" data-target="footer-contact-us">Contact Us</a>
                        <a href="tel:+1-415-801-2270" class="defaultFooter-link defaultFooter-link--contact defaultFooter-contactLink" data-tracking-section="footer" data-tracking-label="support-phone-number"><span class="defaultFooter-contactIcon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20.1 20" enable-background="new 0 0 20.1 20" xml:space="preserve" class="icon icon--phone ">
                                    <path d="M14.8,20c-0.5,0-1-0.1-1.5-0.3C7.2,17.6,2.3,12.6,0.3,6.5c-0.6-1.9,0-3.9,1.6-5.1l1-0.8C3.5,0.2,4.1,0,4.8,0
                            C6,0,7,0.7,7.6,1.7l1.7,3.2c0.2,0.3,0.2,0.7,0.2,1c0,0.5-0.2,1.1-0.6,1.5L8.6,7.8C8.2,8.2,8.2,8.7,8.4,9.2c0.6,1.1,1.5,2,2.6,2.6
                            c0.4,0.2,1,0.2,1.4-0.2l0.4-0.3c0.7-0.6,1.7-0.7,2.5-0.3l3.2,1.7c1,0.5,1.7,1.6,1.7,2.8c0,0.8-0.3,1.6-0.9,2.2l-1.1,1.1
                            C17.2,19.5,16,20,14.8,20z M4.8,1.9C4.5,1.9,4.3,2,4.1,2.1l-1,0.8c-0.9,0.7-1.3,1.9-0.9,3C3.9,11.5,8.4,16,13.9,18
                            c1,0.3,2.1,0.1,2.8-0.7l1.1-1.1c0.2-0.2,0.4-0.5,0.4-0.9c0-0.5-0.3-0.9-0.7-1.1l-3.2-1.7c-0.1-0.1-0.3,0-0.4,0l-0.4,0.3
                            c-0.9,0.9-2.4,1.1-3.5,0.5c-1.5-0.7-2.6-1.9-3.4-3.4C6.1,8.9,6.3,7.5,7.2,6.5l0.3-0.4c0,0,0.1-0.1,0.1-0.2c0,0,0-0.1,0-0.1L5.9,2.6
                            C5.7,2.1,5.3,1.9,4.8,1.9z" />
                                </svg></span>+1-415-801-2270</a>
                    </nav>
                </div>
            </div>

            <div class="defaultFooter-corporate section-container">
                <div class="defaultFooter-logo">
                    <svg version="1.1" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 336.2 612 119.4" enable-background="new 0 336.2 612 119.4" xml:space="preserve">
                        <g class="logo-shield">
                            <path class="logo-text--primary" d="M56.6,455.6h-1c-0.5-0.5-56.9-15.5-55.4-99.3v-1.2l7.7-11l1.5-0.2
                                c1-0.2,47.2-7.5,47.2-7.5s46.4,7.2,47.4,7.5l1.2,0.2l7.7,11v1.2c1,43.4-14,68.1-26.7,81.1C72.4,451.6,57.9,455.6,56.6,455.6z
                                M8,357.8c-1,71.4,41.7,87.6,48.7,89.8c7.2-2.2,49.6-18.5,48.7-90.1l-4.7-6.7c-5.2-1.2-25.7-6.2-43.9-6.7
                                c-18.2,0.5-38.4,5.5-43.9,6.7L8,357.8z" />
                            <rect x="37.4" y="388.5" class="logo-text--primary" width="41.9" height="8.2" />
                            <rect x="37.4" y="409.2" class="logo-text--primary" width="41.9" height="8.2" />
                            <rect id="XMLID_39_" x="37.4" y="367.8" class="logo-text--primary" width="41.9" height="8.2" />
                            <path class="logo-text--secondary" d="M37.2,400c-4,0-7.5-3.5-7.5-7.7c0-4,3.2-7.7,7.5-7.7h19.7v-5.7h-20
                                       c-7.5,0-13.2,6-13.2,13.5l0,0c0,7.5,6,13.5,13.2,13.5h20V400H37.2z" />
                        </g>
                        <g class="logo-text">
                            <polygon class="logo-text--primary" points="401.2,417.5 391.7,379.8 382.2,417.5 372,417.5 359.3,366.6 368.7,366.6
                                     377.7,402.5 386.7,366.6 396.9,366.6 405.9,402.5 414.9,366.6 424.4,366.6 411.7,417.5       " />
                            <path class="logo-text--primary" d="M299.6,417.7l-12.5-16.5h-7.2v16.5h-9v-49.6h21c6.2,0,14,5.5,14,16
                                         c0,11.7-8.7,15.2-9.2,15.5l13.2,18.5h-10.2V417.7z M291.2,392.5c2.7,0,6-3,6-8c0-4.7-2.7-7.5-6.2-7.5h-11v15.5H291.2z" />
                            <polygon class="logo-text--primary" points="145.5,417.7 145.5,368.1 177.9,368.1 177.9,375 153.4,375 153.4,389.3
                                                          174.6,389.3 174.6,396.2 153.4,396.2 153.4,410.5 177.9,410.5 177.9,417.7       " />
                            <path class="logo-text--primary" d="M334.8,418.7c-11.5,0-19.2-6.5-19.2-16V382c0-9.2,7.5-15,19.2-15c11.5,0,19.2,6.5,19.2,16
      v20C354,412.2,346,418.7,334.8,418.7z M334.8,374.8c-5.2,0-10.7,2-10.7,8v19c0,5.2,4.5,9,10.7,9c6.2,0,10.7-3.7,10.7-9v-18
      C345.3,378.5,340.8,374.8,334.8,374.8z" />
                            <path class="logo-text--secondary" d="M506.5,418.7c-11,0-18.7-6.5-18.7-16v-21c0-9.2,7.5-15,18.7-15c11,0,18.7,6.5,18.7,16v20
      C525.2,412.2,517.4,418.7,506.5,418.7z M506.5,374.8c-5,0-10.5,2-10.5,8v19c0,5.2,4.2,9,10.5,9c6,0,10.5-3.7,10.5-9v-18
      C516.7,378.5,512.5,374.8,506.5,374.8z" />
                            <path class="logo-text--primary" d="M246.2,418.7c-4.2,0-8.7-0.5-12.5-4c-4-4-5.7-10.5-5.5-22.2c-0.2-11.5,1.5-18.2,5.5-22
      c3.5-3.5,8.2-4,12.5-4c2,0,4,0,6.2,0.2c2.7,0.2,8,1.2,8.2,1.2l0.7,0.2v7v1.5c0,0-0.7,0-1.7-0.2c-1.7-0.2-5.7-1-7.7-1
      c-2.2-0.2-4.2-0.2-5.7-0.2c-3.2,0-5.2,0.5-6.5,1.5c-2,2-3,7.2-3,16v0.2c-0.2,8.5,0.7,14,3,16c1.2,1,3,1.5,6.5,1.5
      c1.7,0,3.7,0,5.7-0.2c2.5-0.2,8.5-1.2,8.5-1.2l1-0.2v8.5l-0.7,0.2c-0.2,0-5.7,1-8.2,1.2C250.2,418.5,248.2,418.7,246.2,418.7z" />
                            <path class="logo-text--secondary" d="M463.1,418.7c-4.2,0-8.7-0.5-12.5-4c-4-4-5.7-10.5-5.5-22.2c-0.2-11.5,1.5-18.2,5.5-22
      c3.5-3.5,8.2-4,12.5-4c2,0,4.2,0,6.5,0.2c2.7,0.2,7.7,1.2,8,1.2l0.7,0.2v8.5c0,0-0.2,0-0.7,0c-1.7-0.2-7-1.2-8.7-1.2
      c-2.2-0.2-4.2-0.2-5.7-0.2c-3.2,0-5.2,0.5-6.5,1.5c-2,2-3,7.2-3,16v0.2c-0.2,8.5,0.7,14,3,16c1.2,1,3,1.5,6.5,1.5
      c1.7,0,3.7,0,5.7-0.2c2.5-0.2,8.5-1.2,8.5-1.2l1-0.2v8.5l-0.7,0.2c-0.2,0-5.7,1-8.2,1.2C467.3,418.7,465.1,418.7,463.1,418.7z" />
                            <polygon class="logo-text--secondary" points="574.1,418.7 572.8,388 563.3,412 553.9,412 544.1,388 543.1,418.7 534.2,418.7
      535.9,366.8 544.6,366.8 558.6,401.5 572.6,366.8 581.1,366.8 583.1,418.7       " />
                            <path class="logo-text--primary" d="M203.1,419c-4.7,0-9.5-1.2-14.2-3.5l-0.7-0.2l3.5-7.5l0.7,0.2c3.7,1.7,7.5,2.7,10.7,2.7
      c8.5,0,9-4.7,9-6c0-2.2-0.2-5.2-3.5-6.5c-0.7-0.2-2.5-1-4.5-1.5c-5.5-1-15.7-3.2-15.7-16c0-4.2,1.5-7.7,4.2-10.2
      c3-2.5,7-3.7,12.7-3.7c3.2,0,6.7,0.5,9.5,0.7c1.2,0.2,4.5,0.5,4.5,0.5l-0.5,8.2c0,0-3.2-0.5-4.7-0.7c-2.5-0.2-5.7-0.5-8.7-0.7
      c-7.7-0.2-8.5,3.7-8.7,5.7c-0.2,1.7,0,5.7,9,7.7c3,0.7,5.7,1.5,8.2,3c6.2,3.5,7.2,9.7,6,16.5c-0.5,3.2-2.5,6.2-6,8.2
      C211.3,418,207.3,419,203.1,419z" />
                            <circle class="logo-text--secondary" cx="431.1" cy="413" r="5.7" />
                            <path class="logo-text--primary" d="M600.8,411.5h-2.5v7.2h-1.5v-7.2h-2.5v-1.2h6.7v1.2H600.8z" />
                            <path class="logo-text--primary" d="M612,410.2v8.5h-1.5v-5.5c0-0.2,0-0.5,0-0.7l-2.5,5c0,0.2-0.2,0.2-0.5,0.2h-0.2
      c-0.2,0-0.5,0-0.5-0.2l-2.7-5c0,0.2,0,0.2,0,0.5s0,0.2,0,0.2v5.5h-1.5v-8.5h1.2h0.2c0,0,0,0,0.2,0l0,0c0,0,0,0,0,0.2l2.5,4.7
      c0,0.2,0.2,0.2,0.2,0.5c0,0.2,0,0.2,0.2,0.5c0-0.2,0-0.2,0.2-0.5c0-0.2,0-0.2,0.2-0.5l2.5-4.7c0,0,0,0,0-0.2l0,0c0,0,0,0,0.2,0
      c0,0,0,0,0.2,0C610.8,410.2,612,410.2,612,410.2z" />
                        </g>
                    </svg>
                </div>
                <nav class="defaultFooter-corporateNav" aria-label="legal navigation">
                    <a class="defaultFooter-corporateLink" href="/legal" data-target="footer-privacy-policy">PRIVACY POLICY</a>
                    <a class="defaultFooter-corporateLink" href="/escrow-licenses" data-target="footer-escrow-licences">LICENSES AND COMPLAINTS</a>
                    <a class="defaultFooter-corporateLink" href="/legal" data-target="footer-legal">LEGAL</a>
                </nav>
                <div role="contentinfo">
                    <div class="defaultFooter-copyright"><a class="defaultFooter-copyrightLink" href="/escrow-101/copyright-and-trademark-information" data-target="footer-copyright">Copyright</a> © 1999-<time>2021</time> Escrow.com, Inc. All rights reserved</a>
                    </div>
                </div>
        </footer>
    </section>
    <div class="touchShelf" data-component="touchShelf" data-target="modal-touchShelf" tabIndex="0">
        <div class="touchShelf-closeContainer" data-target-modal="touchShelf" data-target-modal-toggle>
            <svg version="1.1" class="icon icon--close " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                <path d="M10,8l8-8l2,2l-8,8l8,8l-2,2l-8-8l-8,8l-2-2l8-8L0,2l2-2L10,8z" />
            </svg>
        </div>
        <div class="touchShelf-container">
            <div class="touchShelf-containerInner">
                <div class="touchShelf-user">
                    <div data-target="loggedout-section">
                        <a href="signup.php" class="btn btn--primary  touchShelf-signUp " data-auth-required="transaction-choice" data-e2e-target="touchShelf-register">Register
                        </a>
                        <a href="login.php" class="btn btn--primary  touchShelf-logIn " data-auth-required="loggedin-landing-page" data-e2e-target="touchShelf-login">Log in
                        </a>
                    </div>
                    <div class="touchShelf-loggedIn  is-hidden" data-target="loggedin-section">
                        <button class="btn btn--primary  touchShelf-transactions">My transactions
                        </button>
                        <div class="loggedIn is-hidden" data-component="userHeader-loggedIn">
                            <a href="" class="loggedIn-userEmail"><svg version="1.1" class="icon icon--user" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path d="M14.5,11c0.7-1.1,1.1-2.6,1.1-4.1C15.6,3.1,13.1,0,10,0C6.9,0,4.4,3.1,4.4,6.9c0,1.5,0.4,3,1.1,4.1
  	c-2.9,1.4-4.9,4.1-4.9,7.1v0.6c0,0.7,0.6,1.3,1.2,1.3h16.3c0.7,0,1.2-0.6,1.2-1.3v-0.6C19.4,15,17.4,12.4,14.5,11z M10,1.9
  	c2,0,3.7,2.3,3.7,5c0,2.7-1.7,5-3.7,5c-2,0-3.8-2.3-3.8-5C6.3,4.2,8,1.9,10,1.9z M2.5,18.1c0-2.5,1.7-4.6,4.3-5.6
  	c0.9,0.8,2,1.3,3.2,1.3s2.3-0.5,3.2-1.3c2.5,1,4.3,3.2,4.3,5.6H2.5z" />
                                </svg>
                            </a>
                            <a href="#" class="loggedIn-logout" data-target="logout"><svg version="1.1" class="icon icon--logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0,17.2L0,2.8c0-0.7,0.6-1.2,1.2-1.2h11.3c0.7,0,1.2,0.6,1.2,1.2v3.4
	c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9V3.4h-10v13.1h10v-2.8c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v3.4
	c0,0.7-0.6,1.2-1.2,1.2H1.2C0.6,18.4,0,17.9,0,17.2z M15,13.1c0-0.3,0.1-0.5,0.3-0.7l1.5-1.5H6.6c-0.5,0-0.9-0.4-0.9-0.9
	c0-0.5,0.4-0.9,0.9-0.9h10.2l-1.5-1.5C15.1,7.4,15,7.1,15,6.9c0-0.5,0.4-0.9,0.9-0.9c0.3,0,0.5,0.1,0.7,0.3l3.1,3.1
	C19.9,9.5,20,9.7,20,10c0,0.3-0.1,0.5-0.3,0.7l-3.1,3.1c-0.2,0.2-0.4,0.3-0.7,0.3C15.4,14.1,15,13.6,15,13.1z" />
                                </svg>
                                Log out</a>
                        </div>
                    </div>
                </div>
                <div class="touchShelf-search" data-target="menu-search-container">
                    <form class="touchShelf-searchForm search search--large defaultForm--inline " data-target="searchOverlay-input" role="search">
                        <div class="search-suggestion search-suggestion--light" data-component="searchOverlay-suggestion">Did you mean: </div>
                        <div class="search-container">
                            <svg class="icon icon--search search-icon icon--small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 19.8 20" enable-background="new 0 0 19.8 20" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4,19.6c-0.5,0.5-1.3,0.5-1.7,0l-4.1-4.1c-1.4,1-3.1,1.6-5,1.6
    C3.9,17.1,0,13.3,0,8.6S3.9,0,8.6,0c4.7,0,8.6,3.8,8.6,8.6c0,2-0.7,3.8-1.8,5.3l4.1,4.1C19.9,18.4,19.9,19.2,19.4,19.6z M8.6,2.1
    C5,2.1,2.2,5,2.2,8.6C2.2,12.1,5,15,8.6,15c1.5,0,2.9-0.5,4-1.4c0.1-0.1,0.1-0.3,0.3-0.4c0.1-0.1,0.3-0.2,0.4-0.3
    c1-1.1,1.7-2.6,1.7-4.3C15,5,12.1,2.1,8.6,2.1z" />
                            </svg>
                            <div class="field  field--large     " data-target="field" data-field="touchShelf-search">
                                <label class="field-label" for="field-touchShelf-search">
                                    <span data-target="field-label-touchShelf-search">search</span> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                        </svg></span>
                                </label>
                                <div class="field-input">
                                    <div contentEditable="true" class="defaultInput defaultInput--pseudo touchShelf-search" data-target="field-focusable" id="field-touchShelf-search" name="touchShelf-search" data-component="search-searchBox" aria-describedby=" " data-placeholder="What are you looking for?" data-e2e-target="touchShelf-search-input" />
                                </div>

                                <ul class="dropdown search-searchResults field-dropdown" data-component="search-searchResults">

                                </ul>
                            </div>
                            <div class="field-error" data-target="field-error" data-attr="error-invalid">
                                <span class="field-errorMsg" id="error-touchShelf-search">Please enter a search term</span>
                            </div>
                        </div>
                </div>
                </form>
            </div>
            <nav class="touchShelf-nav" aria-label="main navigation">
                <a href="/what-is-escrow" class="touchShelf-link" data-target="menu-what-is-escrow">
                    What Is Escrow?
                    <span class="touchShelf-linkRubric">Learn how your transaction can be secured with escrow</span>
                </a>
                <a href="/fee-calculator" class="touchShelf-link" data-target="menu-fee-calculator">
                    Fee Calculator
                    <span class="touchShelf-linkRubric">Learn more about our fee structure and processing charges</span>
                </a>
                <a href="/escrow-account" class="touchShelf-link" data-target="menu-escrow-accounts">
                    Escrow Accounts
                    <span class="touchShelf-linkRubric">Secure transactions with licenced trust accounts</span>
                </a>
                <a href="/services" class="touchShelf-link" data-target="menu-services">
                    Services
                    <span class="touchShelf-linkRubric">Confidently buy and sell goods and services online</span>
                </a>
                <a href="/helpdesk" class="touchShelf-link" data-target="menu-help-center">
                    Help Center
                    <span class="touchShelf-linkRubric">Search our knowledge base</span>
                </a>
                <a href="/partners" class="touchShelf-link" data-target="menu-partners">
                    Partners
                    <span class="touchShelf-linkRubric">Our partners work with Escrow.com to make buying and selling easy</span>
                </a>
                <a href="/learn-more" class="touchShelf-link" data-target="menu-learn-more">
                    Learn More
                    <span class="touchShelf-linkRubric">Learn more about transactions, accounts and payments</span>
                </a>
                <a href="/contact-us" class="touchShelf-link" data-target="menu-contact-us">
                    Contact Us
                    <span class="touchShelf-linkRubric">Our customer support team can assist with any problems and questions</span>
                </a>
                </ul>
            </nav>
        </div>
    </div>
    </div>
    <section class="modals">
        <!-- Bug Report Form -->
        <div class="modal  bugReportModal " data-target=modal-bug-report data-component="modal" tabIndex="0" hidden>
            <div class="modal-backdrop" data-target="modal-close"></div>
            <div class="modal-container">
                <button class="modal-contentClose " data-target="modal-close">
                    <svg version="1.1" class="icon icon--close " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M10,8l8-8l2,2l-8,8l8,8l-2,2l-8-8l-8,8l-2-2l8-8L0,2l2-2L10,8z" />
                    </svg>
                </button>
                <div class="modal-content">
                    <div class="modal-copy">
                        <h2 class="modal-title" role="heading">Report A Bug</h2>
                        <form class="defaultForm" data-action="/api/report-bug" data-component="userSubmittedForm" data-success-modal="modal-bug-report-success" novalidate data-form-name="bug-report-form" role="form" aria-label="Bug report form">

                            <div class="defaultForm-errors" data-target="form-error"></div>

                            <fieldset class="defaultForm-fieldSet">
                                <div class="field       " data-target="field" data-field="type">
                                    <label class="field-label" for="field-type">
                                        <span data-target="field-label-type">Please select the type of issue you are experiencing:</span> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                            </svg></span>
                                    </label>
                                    <div class="field-input">
                                        <div class="defaultSelect defaultSelect--form ">
                                            <select class="defaultSelect-select" data-target="field-focusable" name="type" id="field-type">
                                                <option value="general-functionality">General Functionality</option>
                                                <option value="security-vulnerability">Security Vulnerability</option>
                                                <option value="payment-issue">Payment Issue</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="defaultForm-group">
                                    <div class="field      field--minor " data-target="field" data-field="title">
                                        <label class="field-label" for="field-title">
                                            <span data-target="field-label-title">Title</span> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                                </svg></span>
                                        </label>
                                        <div class="field-input">
                                            <div class="defaultSelect defaultSelect--form ">
                                                <select class="defaultSelect-select" data-target="field-focusable" name="title" id="field-title">
                                                    <option value="Mr">Mr.</option>
                                                    <option value="Mrs">Mrs.</option>
                                                    <option value="Ms">Ms.</option>
                                                    <option value="Mx">Mx</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Mister">Mister</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="field       " data-target="field" data-field="first-name">
                                        <label class="field-label" for="field-first-name">
                                            <span data-target="field-label-first-name">First name</span><sup class="field-required"> *</sup> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                                </svg></span>
                                        </label>
                                        <div class="field-input">
                                            <input type="text" class="defaultInput" data-target="field-focusable" id="field-first-name" name="first-name" required aria-describedby=" error-first-name" data-max-length="100" autocomplete="off" />

                                        </div>
                                        <div class="field-error" data-target="field-error" data-attr="error-invalid">
                                            <span class="field-errorMsg" id="error-first-name">Please enter your first name.</span>
                                        </div>
                                    </div>
                                    <div class="field       " data-target="field" data-field="last-name">
                                        <label class="field-label" for="field-last-name">
                                            <span data-target="field-label-last-name">Surname</span><sup class="field-required"> *</sup> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                                </svg></span>
                                        </label>
                                        <div class="field-input">
                                            <input type="text" class="defaultInput" data-target="field-focusable" id="field-last-name" name="last-name" required aria-describedby=" error-last-name" data-max-length="100" autocomplete="off" />

                                        </div>
                                        <div class="field-error" data-target="field-error" data-attr="error-invalid">
                                            <span class="field-errorMsg" id="error-last-name">Please enter your surname.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="field       " data-target="field" data-field="email">
                                    <label class="field-label" for="field-email">
                                        <span data-target="field-label-email">Your email address</span><sup class="field-required"> *</sup> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                            </svg></span>
                                    </label>
                                    <div class="field-input">
                                        <div class="field-prefix">
                                            <div class="field-prefix-wrapper">
                                                <span class="field-prefix-label" data-component="field-prefix" data-related-name="email-prefix"><svg version="1.1" class="icon icon--email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 24.6 20" enable-background="new 0 0 24.6 20" xml:space="preserve">
                                                        <path d="M1.5,0C0.7,0,0,0.7,0,1.5v16.9C0,19.3,0.7,20,1.5,20h21.5c0.8,0,1.5-0.7,1.5-1.5V1.5c0-0.8-0.7-1.5-1.5-1.5H1.5z M22.3,2.3
	v0.6l-10,8.4l-10-8.4V2.3H22.3z M2.3,17.7V5.9l9,7.6c0.3,0.2,0.6,0.4,1,0.4c0.4,0,0.7-0.1,1-0.4l9-7.6v11.8H2.3z" />
                                                    </svg></span>
                                            </div>
                                        </div> <input type="email" class="defaultInput" data-target="field-focusable" id="field-email" name="email" required aria-describedby=" error-email" autocomplete="off" />

                                    </div>
                                    <div class="field-error" data-target="field-error" data-attr="error-invalid">
                                        <span class="field-errorMsg" id="error-email">Please enter a valid email address.</span>
                                    </div>
                                </div>
                                <div class="field       " data-target="field" data-field="detail">
                                    <label class="field-label" for="field-detail">
                                        <span data-target="field-label-detail">Details</span><sup class="field-required"> *</sup> <span class="field-validIcon"><svg version="1.1" class="icon icon--tick " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 25.4 20" enable-background="new 0 0 25.4 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7,4l-15,15c0,0,0,0,0,0c-0.1,0.1-0.1,0.2-0.2,0.3c-0.9,0.9-2.4,0.9-3.2,0
    	l-5.5-4.7c-0.9-0.9-0.9-2.4,0-3.2c0.9-0.9,2.4-0.9,3.2,0l3.7,3.2L21.4,0.7c0.9-0.9,2.4-0.9,3.3,0C25.6,1.6,25.6,3.1,24.7,4z" />
                                            </svg></span>
                                    </label>
                                    <div class="field-input">
                                        <textarea class="defaultTextarea " data-target="field-focusable" name="detail" id="field-detail" required aria-describedby=""></textarea>

                                    </div>
                                </div>
                                <button class="btn btn--secondary  ">Submit
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>


            </div>
        </div>

        <!-- Bug Report Success -->
        <div class="modal  bugReportSuccessModal " data-target=modal-bug-report-success data-component="modal" tabIndex="0" hidden>
            <div class="modal-backdrop" data-target="modal-close"></div>
            <div class="modal-container">
                <button class="modal-contentClose " data-target="modal-close">
                    <svg version="1.1" class="icon icon--close " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M10,8l8-8l2,2l-8,8l8,8l-2,2l-8-8l-8,8l-2-2l8-8L0,2l2-2L10,8z" />
                    </svg>
                </button>
                <div class="modal-content">
                    <div class="modal-copy">
                        <div class="copy">
                            <p>Thank you for your feedback. Our team will investigate the issue.</p>
                            <p>If you require any assistance, please feel free to contact our support team at <a href="mailto:support@escrow.com">support@escrow.com</a>.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- search overlay -->
        <div class="modal modal--top  " data-target=modal-searchOverlay data-component="modal" tabIndex="0" hidden>
            <div class="modal-backdrop" data-target="modal-close"></div>
            <div class="modal-container">
                <button class="modal-contentClose modal-contentClose--outBound" data-target="modal-close">
                    <svg version="1.1" class="icon icon--close " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M10,8l8-8l2,2l-8,8l8,8l-2,2l-8-8l-8,8l-2-2l8-8L0,2l2-2L10,8z" />
                    </svg>
                </button>
                <section class="searchOverlay">
                    <div data-target="searchOverlay-input">
                        <div class="field searchOverlay-search field--huge     " data-target="field" data-field="searchOverlay-search">
                            <div class="field-input">
                                <div class="field-prefix">
                                    <div class="field-prefix-wrapper">
                                        <span class="field-prefix-label" data-component="field-prefix" data-related-name="searchOverlay-search-prefix"><svg class="icon icon--search " version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 19.8 20" enable-background="new 0 0 19.8 20" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4,19.6c-0.5,0.5-1.3,0.5-1.7,0l-4.1-4.1c-1.4,1-3.1,1.6-5,1.6
    C3.9,17.1,0,13.3,0,8.6S3.9,0,8.6,0c4.7,0,8.6,3.8,8.6,8.6c0,2-0.7,3.8-1.8,5.3l4.1,4.1C19.9,18.4,19.9,19.2,19.4,19.6z M8.6,2.1
    C5,2.1,2.2,5,2.2,8.6C2.2,12.1,5,15,8.6,15c1.5,0,2.9-0.5,4-1.4c0.1-0.1,0.1-0.3,0.3-0.4c0.1-0.1,0.3-0.2,0.4-0.3
    c1-1.1,1.7-2.6,1.7-4.3C15,5,12.1,2.1,8.6,2.1z" />
                                            </svg> Search for</span>
                                    </div>
                                </div>
                                <div contentEditable="true" class="defaultInput defaultInput--pseudo searchOverlay-search" data-target="field-focusable" id="field-searchOverlay-search" name="searchOverlay-search" data-component="search-searchBox" aria-describedby=" " data-e2e-target="searchOverlay-search-input" />
                            </div>

                        </div>
                        <div class="field-error" data-target="field-error" data-attr="error-invalid">
                            <span class="field-errorMsg" id="error-searchOverlay-search">Please enter a search term</span>
                        </div>
                    </div>
                    <div class="defaultForm-group search-suggestion search-suggestion--light" data-component="searchOverlay-suggestion">Did you mean: </div>
            </div>

            <div class="searchOverlay-resultsContainer">
                <div class="searchOverlay-results" data-e2e-target="search-results">
                    <div data-component="search-results"></div>
                </div>
                <div class="searchOverlay-results" data-e2e-target="popular-links">
                    <h2 class="searchOverlay-resultsCategory" role="heading">Popular links</h2>

                    <a href="/fee-calculator" class="searchOverlay-result" data-target="searchOverlay-result">
                        <span class="searchOverlay-resultIcon"><svg version="1.1" class="icon icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                <path d="M10,20C4.5,20,0,15.5,0,10C0,4.5,4.5,0,10,0s10,4.5,10,10C20,15.5,15.5,20,10,20z M10,1.9c-4.5,0-8.1,3.6-8.1,8.1
	c0,4.5,3.6,8.1,8.1,8.1s8.1-3.6,8.1-8.1C18.1,5.5,14.5,1.9,10,1.9z M9.1,14.1L9.1,14.1c-0.2,0.2-0.4,0.2-0.6,0.2
	c-0.5,0-0.9-0.4-0.9-0.9c0-0.3,0.1-0.5,0.3-0.7l0,0l3-2.7l-3-2.7l0,0C7.6,7.1,7.5,6.8,7.5,6.6c0-0.5,0.4-0.9,0.9-0.9
	c0.2,0,0.5,0.1,0.6,0.2l0,0l3.8,3.4c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7L9.1,14.1z" />
                            </svg></span>
                        <div class="searchOverlay-resultTitle">Fees</div>
                        <div class="searchOverlay-more" data-e2e-target="searchOverlay-learn-more">Learn more</div>
                    </a>
                    <a href="/what-is-escrow" class="searchOverlay-result" data-target="searchOverlay-result">
                        <span class="searchOverlay-resultIcon"><svg version="1.1" class="icon icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                <path d="M10,20C4.5,20,0,15.5,0,10C0,4.5,4.5,0,10,0s10,4.5,10,10C20,15.5,15.5,20,10,20z M10,1.9c-4.5,0-8.1,3.6-8.1,8.1
	c0,4.5,3.6,8.1,8.1,8.1s8.1-3.6,8.1-8.1C18.1,5.5,14.5,1.9,10,1.9z M9.1,14.1L9.1,14.1c-0.2,0.2-0.4,0.2-0.6,0.2
	c-0.5,0-0.9-0.4-0.9-0.9c0-0.3,0.1-0.5,0.3-0.7l0,0l3-2.7l-3-2.7l0,0C7.6,7.1,7.5,6.8,7.5,6.6c0-0.5,0.4-0.9,0.9-0.9
	c0.2,0,0.5,0.1,0.6,0.2l0,0l3.8,3.4c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7L9.1,14.1z" />
                            </svg></span>
                        <div class="searchOverlay-resultTitle">What Is Escrow?</div>
                        <div class="searchOverlay-more" data-e2e-target="searchOverlay-learn-more">Learn more</div>
                    </a>
                    <a href="/support/payment-options" class="searchOverlay-result" data-target="searchOverlay-result">
                        <span class="searchOverlay-resultIcon"><svg version="1.1" class="icon icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                <path d="M10,20C4.5,20,0,15.5,0,10C0,4.5,4.5,0,10,0s10,4.5,10,10C20,15.5,15.5,20,10,20z M10,1.9c-4.5,0-8.1,3.6-8.1,8.1
	c0,4.5,3.6,8.1,8.1,8.1s8.1-3.6,8.1-8.1C18.1,5.5,14.5,1.9,10,1.9z M9.1,14.1L9.1,14.1c-0.2,0.2-0.4,0.2-0.6,0.2
	c-0.5,0-0.9-0.4-0.9-0.9c0-0.3,0.1-0.5,0.3-0.7l0,0l3-2.7l-3-2.7l0,0C7.6,7.1,7.5,6.8,7.5,6.6c0-0.5,0.4-0.9,0.9-0.9
	c0.2,0,0.5,0.1,0.6,0.2l0,0l3.8,3.4c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7L9.1,14.1z" />
                            </svg></span>
                        <div class="searchOverlay-resultTitle">Payment types</div>
                        <div class="searchOverlay-more" data-e2e-target="searchOverlay-learn-more">Learn more</div>
                    </a>
                    <a href="/support/faqs/how-quickly-are-incoming-payments-processed" class="searchOverlay-result" data-target="searchOverlay-result">
                        <span class="searchOverlay-resultIcon"><svg version="1.1" class="icon icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                <path d="M10,20C4.5,20,0,15.5,0,10C0,4.5,4.5,0,10,0s10,4.5,10,10C20,15.5,15.5,20,10,20z M10,1.9c-4.5,0-8.1,3.6-8.1,8.1
	c0,4.5,3.6,8.1,8.1,8.1s8.1-3.6,8.1-8.1C18.1,5.5,14.5,1.9,10,1.9z M9.1,14.1L9.1,14.1c-0.2,0.2-0.4,0.2-0.6,0.2
	c-0.5,0-0.9-0.4-0.9-0.9c0-0.3,0.1-0.5,0.3-0.7l0,0l3-2.7l-3-2.7l0,0C7.6,7.1,7.5,6.8,7.5,6.6c0-0.5,0.4-0.9,0.9-0.9
	c0.2,0,0.5,0.1,0.6,0.2l0,0l3.8,3.4c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7L9.1,14.1z" />
                            </svg></span>
                        <div class="searchOverlay-resultTitle">Payments processing time</div>
                        <div class="searchOverlay-more" data-e2e-target="searchOverlay-learn-more">Learn more</div>
                    </a>
                    <a href="/contact-us" class="searchOverlay-result" data-target="searchOverlay-result">
                        <span class="searchOverlay-resultIcon"><svg version="1.1" class="icon icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                <path d="M10,20C4.5,20,0,15.5,0,10C0,4.5,4.5,0,10,0s10,4.5,10,10C20,15.5,15.5,20,10,20z M10,1.9c-4.5,0-8.1,3.6-8.1,8.1
	c0,4.5,3.6,8.1,8.1,8.1s8.1-3.6,8.1-8.1C18.1,5.5,14.5,1.9,10,1.9z M9.1,14.1L9.1,14.1c-0.2,0.2-0.4,0.2-0.6,0.2
	c-0.5,0-0.9-0.4-0.9-0.9c0-0.3,0.1-0.5,0.3-0.7l0,0l3-2.7l-3-2.7l0,0C7.6,7.1,7.5,6.8,7.5,6.6c0-0.5,0.4-0.9,0.9-0.9
	c0.2,0,0.5,0.1,0.6,0.2l0,0l3.8,3.4c0.2,0.2,0.3,0.4,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7L9.1,14.1z" />
                            </svg></span>
                        <div class="searchOverlay-resultTitle">Contact Us</div>
                        <div class="searchOverlay-more" data-e2e-target="searchOverlay-learn-more">Learn more</div>
                    </a>
                </div>
            </div>
    </section>

    </div>
    </div>


    </section>
   


</body>

</html>