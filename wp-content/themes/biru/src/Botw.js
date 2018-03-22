import React from 'react'

// Dumb component
const Botw = ({ beer: { title, content } }) => (
  <div className="entry">
    <h2 className="entry__title">{title.rendered}</h2>
    {content.rendered}
  </div>
)

export default Botw