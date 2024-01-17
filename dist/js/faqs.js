jQuery(document).ready(($) => {
  let selectedCategory = $('.faq-category-button').data('slug');
  const faqCategoryButton = $('.faq-category-button'),
    faqsContainer = $('.faqs-tab-container');
  loadFaqs = function () {
    faqsContainer.html(
      `
              <div class="row align-items-center justify-content-center" style="height:150px;">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
              </div>
              `
    );
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        postPerPage: 4,
        action: 'load_faqs',
      },
      method: 'POST',
      url: ajaxUrl,
      success: function (response) {
        faqsContainer.html(response);
      },
      error: function (err) {
        console.log(err);
      },
    });
  };

  faqCategoryButton.on('click', function () {
    selectedCategory = $(this).data('slug');
    loadFaqs();
  });
  loadFaqs();
});
