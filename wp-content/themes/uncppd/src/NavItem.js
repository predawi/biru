import React from 'react'

function decodeHtml (html) {
  var txt = document.createElement('textarea')
  txt.innerHTML = html
  return txt.value
}

const NavItem = ({id, label, sublabel, handleClick, showBeer, showSpot, showFollow, beer, spot, follow}) => (
  <li>
    <button id={id} onClick={handleClick} className="main-nav__item">
      {showBeer && <span>{decodeHtml(beer)}</span>}
      {showSpot && <span>{decodeHtml(spot)}</span>}
      {showFollow && <span>{decodeHtml(follow)}</span>}
      <span>{label}</span>
      {sublabel}
    </button>
  </li>
)

export default NavItem