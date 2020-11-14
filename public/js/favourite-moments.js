// document
//   .querySelector('.all-moments-settings')
//   .addEventListener('click', function () {
//     console.log(1);
//     document.querySelector('.moment-category-selection').classList.toggle =
//       'moment-category-selection-visible';
//   });

$(document).ready(function () {
  $('.all-moments-settings').click(
    function () {
      $('.moment-category-selection').toggleClass(
        'moment-category-selection-visible'
      );
    },
    function () {
      $('.moment-category-selection').toggleClass(
        'moment-category-selection-visible'
      );
    }
  );
});
