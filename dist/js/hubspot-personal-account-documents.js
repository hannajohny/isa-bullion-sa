jQuery(document).ready(($) => {
  const forms = ['ffbe81ce-d7d1-421d-8d2c-f6c0b8b40a45'];
  const portalId = '25666200';
  const target = '#multistep-form';

  /*No need to worry about stuff below this point*/
  const data = [];
  const options = [];

  const generateFormOptions = (form, index) => {
    return {
      portalId,
      formId: form,
      target,
      onFormReady: function (form) {
        if (index !== 0) {
          form.find('input[name="email"]').val(data[0].value).change();
        }
      },
      onFormSubmit: function (form) {
        if (data.length === 0) {
          const incoming = $(form).serializeArray();
          data.push(incoming[0]);
        }
      },
      onFormSubmitted: function () {
        if (index !== forms.length - 1) {
          $(target).empty();
          hbspt.forms.create(options[index + 1]);
        }
      },
    };
  };

  const multiStepForm = () => {
    forms.forEach((form, index) => {
      options.push(generateFormOptions(form, index));
    });
    hbspt.forms.create(options[0]);
  };

  multiStepForm();

  $.urlParam = function (name) {
    var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(
      window.location.search
    );

    return results !== null ? results[1] || 0 : false;
  };
  var eml_val = $.urlParam('email');
  var domain_name = $(location).attr('host');
  var http_val = $(location).attr('protocol');
  var basedomain = http_val + '//' + domain_name;

  if (eml_val == '') {
    // Check the environment
    if (window.location.host.includes('localhost')) {
      // Running on localhost
      window.location.replace(
        basedomain + '/isa-bullion/sign-up/lets-get-started'
      );
    } else {
      // Running on production
      window.location.replace(basedomain + '/sign-up/lets-get-started');
    }
  }
});
