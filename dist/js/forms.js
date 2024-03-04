jQuery(document).ready(($) => {
  var sendContactUsFormButton = $('#submit-contact-us'),
    contactUsSuccessModal = $('#contact-us-success-modal');

  // Handle Contact us form email sent event
  var requestContactUsElm = document.querySelector('#wpcf7-f928-o1');
  var requestContactUsElmArabic = document.querySelector('#wpcf7-f929-o1');
  // Verify element exist
  if (requestContactUsElm) {
    requestContactUsElm.addEventListener(
      'wpcf7mailsent',
      function (event) {
        animateContactUsForm();
      },
      false
    );
  }

  if (requestContactUsElmArabic) {
    requestContactUsElmArabic.addEventListener(
      'wpcf7mailsent',
      function (event) {
        animateContactUsForm();
      },
      false
    );
  }

  function animateContactUsForm() {
    sendContactUsFormButton.prop('disabled', true);
    // load spinner
    sendContactUsFormButton.html('');
    sendContactUsFormButton.append("<div class='loading-spinner'></div>");
    // wait for 1.5 sec
    setTimeout(function () {
      contactUsSuccessModal.modal('show');
      sendContactUsFormButton.html('Send');
      sendContactUsFormButton.prop('disabled', false);
    }, 1500);
  }
});
