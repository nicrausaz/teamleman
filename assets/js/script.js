$(document).ready(function () {
  setAdminTabsClicks()
  $('#playersadmin').hide()
})

function setAdminTabsClicks() {

  $('#tabTournament').click(function () {
    $('#playersadmin').hide()
    $('#tournamentsadmin').show()
  })

  $('#tabPlayers').click(function () {
    $('#tournamentsadmin').hide()
    $('#playersadmin').show()
  })
}