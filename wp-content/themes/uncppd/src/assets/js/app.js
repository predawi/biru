const masterContainer = document.getElementById('master-container')
const entry = document.getElementById('entry')
const entryInner = document.getElementById('entry__inner')
const timer = 500

let firstClick = true

$('.main-nav a').on('click', function (e) {
  // Open entry wrapper and add active class to nav
  if (firstClick) {
    firstClick = false
  } else {
    entry.classList.add('closing')
    setTimeout(() => {
      masterContainer.classList.remove('reading')
      entry.classList.remove('opening')
      entry.classList.remove('opened')
    }, timer)
  }

  $(this).addClass('active')
  setTimeout(() => {
    entry.classList.remove('closing')
    entry.classList.add('opening')
  }, timer)
  setTimeout(() => {
    masterContainer.classList.add('reading')
    entry.classList.add('opened')
  }, timer + 300)

  let targetId = $(this).attr('id')

  switch (targetId) {
    case 'botw':
      entryInner.classList.add('entry__inner--beer')
      break
    case 'sotw':
      entryInner.classList.add('entry__inner--spot')
      break
    case 'fotw':
      entryInner.classList.add('entry__inner--follow')
      break
    case 'potw':
      entryInner.classList.add('entry__inner--packaging')
      break
  }

  setTimeout(() => {
    entry.classList.remove('opening')
    entry.classList.remove('opened')
    masterContainer.classList.remove('reading')
  }, timer)

  e.preventDefault()

})
