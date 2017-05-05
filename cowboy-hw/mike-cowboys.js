function cowboyJson() {
  $.ajax({
    url: '../film/film.json',
    success: (response) => {
      const $characters = $('#characters');
      $.each(response.movies[0].abridged_cast, (x, actor) => {
        $characters.append(`<option value="${actor.name}">${actor.characters[0]}</option>`);
      });
      $characters.change(function () {
        const $actor = $('#actor');
        const optionValue = $characters.val();
        $actor.text(optionValue);
      });
    }
  });
}
// If Node.js then export as public
if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
  module.exports = {
    cowboyJson
  };
}
