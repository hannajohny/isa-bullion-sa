jQuery(document).ready(($) => {
  var fd_form = '09590f44-76ec-4463-8976-d4f27fcf5e1c';
  var fdjah_form = 'eabe4b88-5451-4d49-b1d7-54d21fc99fe8';
  var du_form = 'ffbe81ce-d7d1-421d-8d2c-f6c0b8b40a45';

  $.urlParam = function (name) {
    var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(
      window.location.search
    );

    return results !== null ? results[1] || 0 : false;
  };
  var eml_val = $.urlParam('email');
  var jah = $.urlParam('jah');
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
  if (jah == 'yes') {
    fd_form = fdjah_form;
  }

  const forms = ['ec4c33fe-f3ce-4aeb-8652-7f20e8d2689d', fd_form, du_form];
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
});
