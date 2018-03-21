import React from 'react'

// Dumb component
const Post = ({post: {published_at, picture_url, title, description, author_influence}}) => (
  <li className="post-item">
    {/* Picture */}
    { picture_url ? <img src={picture_url} alt="img" className="post-item__img" /> : <img src={require('./assets/img/mention_logo.svg')} alt="img" className="post-item__img" /> }
    {/* Content */}
    <div className="post-item__content">
      {/* Url */}
      {author_influence ? <a href={author_influence.original_url} target="_blank" className="post-item__link">{author_influence.url}</a> : null}
      {/* Title */}
      <h2 className="post-item__title">{title}</h2>
      {/* Description */}
      <p className="post-item__description">{description}</p>
    </div>
  </li>
)

export default Post