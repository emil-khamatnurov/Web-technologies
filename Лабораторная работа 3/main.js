Файл main.js
let current = 0;
let id = 0;


function loadData() {
  $.get("3.php", {
      kol: 3,
      tek: current
    },
    function (data) {
      let result = JSON.parse(data);

      for (let art in result) {
        console.log(result)

        $('<div>', {
          class: 'newsbox',
          id: `${id}`
        }).appendTo('.wrap');

        $('<div>', {
          class: 'newsbox__img',
        }).appendTo(`#${id}`);

        $('<img>', {
          src: 'imgs/' + result[art].img
        }).appendTo(`#${id} .newsbox__img`);

        $('<h1>', {
          text: result[art].title
        }).appendTo(`#${id}`);

        $('<div>', {
          class: "newsbox__content"
        }).appendTo(`#${id}`);

        $('<p>', {
          text: result[art].text
        }).appendTo(`#${id} .newsbox__content`);

        id++;
      }

      let len = Object.keys(result).length;
      current += len;
      id = current;

    });

}


loadData()

$('.read-more').click(function (){loadData()})