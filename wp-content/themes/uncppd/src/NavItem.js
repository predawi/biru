import React from 'react'

function decodeHtml (html) {
  var txt = document.createElement('textarea')
  txt.innerHTML = html
  return txt.value
}

const NavItem = ({ id, label, sublabel, handleClick, showBeer, showSpot, showFollow, showPack, beer, beerLink, spot, spotLink, follow, followLink, pack, packLink }) => (
  <li>
    {showBeer &&
      <a href={beerLink} id={id} onClick={handleClick} className="main-nav__item" rel="noopener noreferrer">
        <span>{decodeHtml(beer)}</span>
        {sublabel}
      </a>
    }
    {showSpot &&
      <a href={spotLink} id={id} onClick={handleClick} className="main-nav__item" rel="noopener noreferrer">
        <span>{decodeHtml(spot)}</span>
        {sublabel}
      </a>
    }
    {showFollow &&
      <a href={followLink} id={id} onClick={handleClick} className="main-nav__item" rel="noopener noreferrer">
        <span>{decodeHtml(follow)}</span>
        {sublabel}
      </a>
    }
    {showPack &&
      <a href={packLink} id={id} onClick={handleClick} className="main-nav__item" rel="noopener noreferrer">
        <span>{decodeHtml(pack)}</span>
        {sublabel}
      </a>
    }
  </li>
)

export default NavItem