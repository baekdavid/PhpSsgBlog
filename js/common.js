console.clear();

function MobileTopBar__init() {
  $('.mobile-top-bar__btn-toggle-side-bar').click(function () {
    let $this = $(this);

    if ($this.hasClass('active')) {
      $this.removeClass('active');
      $('.mobile-side-bar').removeClass('active');
    } else {
      $this.addClass('active');
      $('.mobile-side-bar').addClass('active');
    }
  });
}

MobileTopBar__init();


/* Toast UI start */

// Youtube plugin start
function youtubePlugin() {
  toastui.Editor.codeBlockManager.setReplacer('youtube', youtubeId => {
    // Indentify multiple code blocks
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);

    return `<div id="${wrapperId}"></div>`;
  });
}

function renderYoutube(wrapperId, youtubeId) {
  const el = document.querySelector(`#${wrapperId}`);

  el.innerHTML = `<div class="toast-ui-youtube-plugin-wrap"><iframe src="https://www.youtube.com/embed/${youtubeId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
}
// Youtube plugin end

// codepen plugin start
function codepenPlugin() {
  toastui.Editor.codeBlockManager.setReplacer('codepen', url => {
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderCodepen.bind(null, wrapperId, url), 0);

    return `<div id="${wrapperId}"></div>`;
  });
}

function renderCodepen(wrapperId, url) {
  const el = document.querySelector(`#${wrapperId}`);

  var urlParams = new URLSearchParams(url.split('?')[1]);
  var height = urlParams.get('height');

  el.innerHTML = `<div class="toast-ui-codepen-plugin-wrap"><iframe height="${height}" scrolling="no" src="${url}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe></div>`;
}
// codepen plugin end

function Editor__init() {
  $('.toast-ui-editor').each(function (index, node) {
    var initialValue = $(node).prev().html().trim().replace(/t-script/gi, 'script');

    var editor = new toastui.Editor({
      el: node,
      previewStyle: 'vertical',
      initialValue: initialValue,
      height: 600,
      plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, codepenPlugin]
    });
  });
}

$(function () {
  Editor__init();
});

function EditorViewer__init() {
  $('.toast-ui-viewer').each(function (index, node) {
    var initialValue = $(node).prev().html().trim().replace(/t-script/gi, 'script');
    var viewer = new toastui.Editor.factory({
      el: node,
      initialValue: initialValue,
      viewer: true,
      plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, codepenPlugin]
    });
  });
}

$(function () {
  EditorViewer__init();
});

/* Toast UI end */