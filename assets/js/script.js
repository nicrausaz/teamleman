$(document).ready(function () {
  setAdminTabsClicks()
  $('#playersadmin').hide()
  $('#shopadmin').hide()
})


function setAdminTabsClicks() {

  $('#tabTournament').click(function () {
    $('#playersadmin').hide()
    $('#shopadmin').hide()
    $('#tournamentsadmin').show()
  })

  $('#tabPlayers').click(function () {
    $('#tournamentsadmin').hide()
    $('#shopadmin').hide()
    $('#playersadmin').show()
  })

  $('#tabShop').click(function () {
    $('#tournamentsadmin').hide()
    $('#playersadmin').hide()
    $('#shopadmin').show()
  })
}