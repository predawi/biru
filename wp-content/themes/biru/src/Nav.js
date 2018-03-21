import React from 'react'

// Dumb component
const Nav = ({ beerTitle, spotTitle }) => (
  <ul>
    <li>
      <button>
        {beerTitle}
        <span>Bière de la semaine</span>
      </button>
    </li>
    <li>
      <button>
        {spotTitle}
        <span>Spot de la semaine</span>
      </button>
    </li>
    <li>
      <button>
        Le follow
        <span>de la semaine</span>
      </button>
    </li>
    <li>
      <button>
        Packaging
        <span>de la semaine</span>
      </button>
    </li>
    <li>
      <button>
        Le gif
        <span>de la semaine</span>
      </button>
    </li>
  </ul>
)

export default Nav