import React from 'react'

// Dumb component
const Beer = ({ beer: { title, content } }) => (
  <ul className="posts-list container">
    <h2 className="post-item__title">{title.rendered}</h2>
    {content.rendered}
  </ul>
)

export default Beer