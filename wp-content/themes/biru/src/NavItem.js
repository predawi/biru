import React from 'react'

const NavItem = ({id, label, sublabel, handleClick, showBeer, showSpot, showFollow, beer, spot, follow}) => (
  <li>
    <button id={id} onClick={handleClick} className="main-nav__item">
      {showBeer && <span>{beer}</span>}
      {showSpot && <span>{spot}</span>}
      {showFollow && <span>{follow}</span>}
      <span>{label}</span>
      {sublabel}
    </button>
  </li>
)

export default NavItem