import React from 'react'
import NavItem from './NavItem.js'
import navitems from './navitems.json'

const Nav = ({ beerTitle, beerLink, spotTitle, spotLink, followTitle, followLink, packTitle, packLink, handleClick }) => {
  return (
    <div className="main-nav">
      <ul>
        {navitems.map((item, index) => (
          <NavItem
            key={index}
            id={item.id}
            label={item.label}
            sublabel={item.sublabel}
            handleClick={handleClick}
            showBeer={index === 0 ? true : false}
            beer={beerTitle}
            beerLink={beerLink}
            showSpot={index === 1 ? true : false}
            spot={spotTitle}
            spotLink={spotLink}
            showFollow={index === 2 ? true : false}
            follow={followTitle}
            followLink={followLink}
            pack={packTitle}
            packLink={packLink}
            showPack={index === 3 ? true : false}
          />
        ))}
      </ul>
    </div>
  )
}

export default Nav