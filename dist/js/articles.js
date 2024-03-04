jQuery(document).ready(($) => {
  let selectedCategory = $('.articles-category-button').data('slug');
  const articlesCategoryButton = $('.articles-category-button'),
    loadMoreArticlesButton = $('#load-more-articles'),
    articlesContainer = $('.articles-container');
  let loadMoreOffset = 6;

  const loadInitialArticles = function () {
    articlesContainer.html(
      `
      <div class="row align-items-center justify-content-center" style="height:150px;">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
      </div>
      `
    );
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        action: 'get_initial_articles',
      },
      method: 'POST',
      url: ajaxUrl,
      success: function (response) {
        var lastChar = response.substr(response.length - 1);
        if (parseInt(lastChar) < 6) {
          loadMoreArticlesButton.hide();
        } else {
          loadMoreArticlesButton.show();
        }
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

  loadMoreArticlesButton.on('click', function () {
    $(this).html(
      '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>'
    );
    $(this).attr('disabled', true);
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        offset: loadMoreOffset,
        action: 'get_more_articles',
      },
      method: 'POST',
      url: ajaxUrl,
      success: (response) => {
        var lastChar = response.substr(response.length - 1);
        if (parseInt(lastChar) < 6) {
          loadMoreArticlesButton.hide();
        } else {
          loadMoreOffset += parseInt(lastChar);
        }
        $(this).html('Load More');
        $(this).attr('disabled', false);
        response = response.substring(0, response.length - 1);
        articlesContainer.append(response);
      },
      error: function (err) {
        console.log(err);
      },
    });
  });

  loadInitialArticles();
});
