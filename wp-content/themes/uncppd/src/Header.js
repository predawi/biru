import React, { Fragment } from 'react'

const logo = `${process.env.PUBLIC_URL}/src/assets/img/uncppd_logo.svg`
// Dumb component
const Header = () => (
  <Fragment>
    <h1 className="visuallyhidden">Uncppd</h1>
    <a href="/"><img src={logo} className="header__logo" alt="Bïru" /></a>
  </Fragment>
)

export default Header