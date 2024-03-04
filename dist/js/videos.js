jQuery(document).ready(($) => {
  let selectedCategory = $('.videos-category-button').data('slug');
  const articlesCategoryButton = $('.videos-category-button'),
    loadMoreVideosButton = $('#load-more-videos'),
    videosContainer = $('.videos-container');
  let loadMoreOffset = 6;

  loadInitialVideos = function () {
    videosContainer.html(
      `
        <div class="row align-items-center justify-content-center" style="height:150px;">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
      </div>
          `
    );
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        action: 'get_initial_videos',
      },
      method: 'POST',
      url: ajaxUrl,
      success: function (response) {
        var lastChar = response.substr(response.length - 1);
        if (parseInt(lastChar) < 6) {
          loadMoreVideosButton.hide();
        } else {
          loadMoreVideosButton.show();
        }
        response = response.substring(0, response.length - 1);
        videosContainer.html(response);
      },
      error: function (err) {
        console.log(err);
      },
    });
  };

  articlesCategoryButton.on('click', function () {
    selectedCategory = $(this).data('slug');
    loadInitialVideos();
  });

  loadMoreVideosButton.on('click', function () {
    $(this).html(
      '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>'
    );
    $(this).attr('disabled', true);
    $.ajax({
      data: {
        selectedCategory: selectedCategory,
        offset: loadMoreOffset,
        action: 'get_more_videos',
      },
      method: 'POST',
      url: ajaxUrl,
      success: (response) => {
        var lastChar = response.substr(response.length - 1);
        if (parseInt(lastChar) < 6) {
          loadMoreVideosButton.hide();
        } else {
          loadMoreOffset += parseInt(lastChar);
        }
        $(this).html('Load More');
        $(this).attr('disabled', false);
        response = response.substring(0, response.length - 1);
        videosContainer.append(response);
      },
      error: function (err) {
        console.log(err);
      },
    });
  });

  loadInitialVideos();
});
