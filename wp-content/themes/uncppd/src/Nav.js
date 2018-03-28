import React from 'react'
import NavItem from './NavItem.js'
import navitems from './navitems.json'

const Nav = ({ beerTitle, spotTitle, followTitle, handleClick }) => {
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
            showSpot={index === 1 ? true : false}
            spot={spotTitle}
            showFollow={index === 2 ? true : false}
            follow={followTitle}
          />
        ))}
      </ul>
    </div>
  )
}

export default Nav