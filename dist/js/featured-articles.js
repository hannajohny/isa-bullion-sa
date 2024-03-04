jQuery(document).ready(($) => {
  let selectedCategory = $('.featured-articles-category-button').data('slug');
  const articlesCategoryButton = $('.featured-articles-category-button'),
    articlesContainer = $('.featured-articles-container');

  loadInitialArticles = function () {
    articlesContainer.html(
      `
      <div class="bg-white box-shadow h-100 p-0">
          <div class="article-card-image bg-primary">
              <div class="h-100 p-30">
                  <div class="d-flex justify-content-start align-items-end h-100">
                      <div class="placeholder-glow">
                          <div class="placeholder bp-chip bg-white mr-10 text-transparent">.</div>
                      </div>
                      <div class="placeholder-glow">
                          <div class="placeholder bp-chip bg-white text-transparent">.</div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="p-30">
              <div class="row mt-20">
                  <div class="col">
                      <div class="placeholder-glow">
                          <span class="placeholder bp-placeholder col-2"></span>
                      </div>
                  </div>
              </div>
              <div class="row mb-30">
                  <div class="col">
                      <div class="placeholder-glow">
                          <span class="placeholder bp-placeholder col-2"></span>
                      </div>
                  </div>
              </div>
              <div class="placeholder-glow">
                  <span class="placeholder bp-placeholder col-12"></span>
              </div>
              <div class="placeholder-glow">
                  <span class="placeholder bp-placeholder col-12"></span>
              </div>
            <div class="col-2 mt-40">
            <div class="placeholder-glow">
              <div class="placeholder bp-chip bg-primary text-transparent">.</div>
            </div>
            </div>
          </div>
      </div>  
      `
    );
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        action: 'get_featured_articles',
      },
      method: 'POST',
      url: ajaxUrl,
      success: function (response) {
        response = response.substring(0, response.length - 1);
        articlesContainer.html(response);
      },
      error: function (err) {
        console.log(err);
      },
    });
  };

  articlesCategoryButton.on('click', function () {
    selectedCategory = $(this).data('slug');
    loadInitialArticles();
  });

  loadInitialArticles();
});
