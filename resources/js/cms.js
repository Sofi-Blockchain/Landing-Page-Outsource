const FILEMANAGER_PREFIX = '/cms/finder';
const FILEMANAGER_TYPES = ['file', 'image'];
const VIDEO_EXTENSIONS = ['mp4', 'mov', 'webm', 'ogv', 'avi'];
const FONTS = `Arial=arial,helvetica,sans-serif;
  Verdana=verdana,geneva;
  System Font=system-ui,sans-serif;
  Helvetica=helvetica,arial,sans-serif;
  Georgia=georgia,times new roman,serif;
  Tahoma=tahoma,arial,helvetica,sans-serif;
  Times New Roman="times new roman",times,serif;
  Palatino="palatino linotype","book antiqua",palatino,serif;
  Courier New="courier new",courier,monospace;
  Comic Sans MS="comic sans ms",cursive,fantasy;
  Trebuchet MS="trebuchet ms",sans-serif;
  Arial Black="arial black",gadget,sans-serif;
  Impact=impact,arial black,sans-serif;
  Lucida Sans Unicode="lucida sans unicode","lucida grande",sans-serif;
  Garamond=garamond,serif;
  Bookman="bookman old style",serif;
  Avant Garde="gill sans","gill sans mt",calibri,sans-serif;
  Lucida Console="lucida console","courier new",monospace;
  Copperplate="copperplate gothic light",fantasy;
  Brush Script="brush script mt",cursive;
  Franklin Gothic="franklin gothic medium",arial,sans-serif;
  Century Gothic="century gothic",arial,sans-serif;
  Gill Sans="gill sans","gill sans mt",sans-serif;
  Cambria=cambria,georgia,serif;
  Calibri=calibri,arial,sans-serif;
  Candara=candara,arial,sans-serif;
  Futura="avenir next","avenir",sans-serif;
  Optima="optima","gill sans",arial,sans-serif;
  Didot="didot lt std","hoefler text",serif;
  ITC Franklin Gothic="franklin gothic medium","arial narrow",sans-serif;
  Rockwell="rockwell std","rockwell",serif;
  Helvetica Neue="helvetica neue",arial,sans-serif;
  Arial Narrow="arial narrow",arial,sans-serif;
  MS Sans Serif="ms sans serif",sans-serif;
  MS Serif="ms serif",serif;`;


$(document).ready(function () {
  if ($('.lfm').length > 0) {
    lfm(FILEMANAGER_TYPES[0], { prefix: FILEMANAGER_PREFIX });
  }
  tinymce.init({
    selector: 'textarea.ta-short', // Replace this CSS selector to match the placeholder element for TinyMCE
    menubar: false,
    plugins: [
      'searchreplace autolink directionality visualchars fullscreen link media template table hr advlist lists wordcount textpattern noneditable',
    ],
    toolbar:
      'undo redo | bold italic underline strikethrough link | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat',
    font_formats: FONTS,
    branding: false,
  });
});

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox({
    alwaysShowClose: true,
  });
});

var lfm = function (type, options) {
  $(document).on('click', '.lfm', function () {
    const button = $(this);
    const routePrefix = (options && options.prefix) ? options.prefix : '/filemanager';
    let inputName = button.data('input-name') ?? 'files';
    const isMultiple = button.attr('multiple');
    const holder = button.parents('.lfm-box').find('.lfm-holder');
    const isOnlyImage = button.attr('only-image');

    window.open(routePrefix + '?type=' + type || 'file', 'FileManager', 'width=1140,height=600');

    window.SetUrl = function (items) {
      var html = '';
      var error = '';
      if (isMultiple && isMultiple != false) {
        inputName += '[]';
        // set or change the preview image src
        items.forEach(function (item) {
          const parts = item.name.split('.');
          const extension = parts[parts.length - 1];
          if (isOnlyImage && isOnlyImage != false && $.inArray(extension, VIDEO_EXTENSIONS) !== -1) {
            error += ' 1';
          } else {
            html += renderEkkoItem({ inputName: inputName, item: item, many: true });
          }
        });
      } else {
        holder.empty();
        html += renderEkkoItem({ inputName: inputName, item: items[0] });
      }
      holder.append(html);
    };
  });
};

function renderEkkoItem({ inputName, item, many = false }) {
  var modify = many ? 'filtr-item--many' : 'filtr-item--one';
  const parts = item.name.split('.');
  const extension = parts[parts.length - 1];
  let source = '';

  if ($.inArray(extension, VIDEO_EXTENSIONS) !== -1){
    source = `<video id="logo-intro" preload="true" playsinline controls muted style="width: 100%">
                <source src="${item.url}" type="video/${extension}" />
              </video>`;
  } else {
    source = `<a href="${item.url}" data-toggle="lightbox" style="width: 100%" data-title="${item.name}">
                <img src="${item.url}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
              </a>`
  }
  return `<div class="filtr-item ${modify}">
              ${source}
              <input type="hidden" name="${inputName}" value="${item.url}">
              <button type="button" class="btn bg-gradient-danger btn-sm filtr-item__btn-delete"><i class="fa fa-times" aria-hidden="true"></i></button>
          </div>`;
}

$(document).on('click', '.filtr-item__btn-delete', function () {
  $(this).parents('.filtr-item').remove();
});

$(document).on('click', '.btn-confirm', function (e) {
  e.preventDefault();
  var title = $(this).attr('confirm-title');
  var msg = $(this).attr('confirm-message');
  var href = $(this).attr('href');
  var modal = $('#confirm_modal');
  modal.find('.modal__title').text(title);
  modal.find('.modal__message').text(msg);
  modal.find('.modal__redirect').attr('href', href);
  modal.modal('show');
});

