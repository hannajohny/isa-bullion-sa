jQuery(document).ready(($) => {
  const forms = [
    'c9628aed-87b4-48ea-afb8-e90656566f86',
    'ec4c33fe-f3ce-4aeb-8652-7f20e8d2689d',
    '09590f44-76ec-4463-8976-d4f27fcf5e1c',
    'ffbe81ce-d7d1-421d-8d2c-f6c0b8b40a45',
  ];
  const portalId = '25666200';
  const target = '#multistep-form';
  // No need to worry about stuff below this point
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
