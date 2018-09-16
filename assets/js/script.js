$(document).ready(function () {
  setAdminTabsClicks()
  $('#players').hide()
})

function setAdminTabsClicks() {

  $('#tabTournament').click(function () {
    $('#players').hide()
    $('#tournaments').show()
  })

  $('#tabPlayers').click(function () {
    $('#tournaments').hide()
    $('#players').show()
  })
}