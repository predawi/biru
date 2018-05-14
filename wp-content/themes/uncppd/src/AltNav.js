import React from 'react'

const AltNav = () => {
  return (
    <nav className="alt-nav">
      <ul>
        <li><a href="https://www.instagram.com/uncppd/" target="_blank">Instagram</a></li>
        <li><a href={window.location.origin + '/archives/'}>Archives</a></li>
      </ul>
    </nav>
  )
}

export default AltNav