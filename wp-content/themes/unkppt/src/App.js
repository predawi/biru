import React, { Component, Fragment } from 'react'
import './assets/css/App.min.css'

/* Components */
import Header from './Header'
import Nav from './Nav'

class App extends Component {
  state = {
    beer: [],
    spot: [],
    loading: false
  }
  componentWillMount = async () => {
    this.setState({loading: true})
    const beerRes = await fetch('http://localhost/biru/wp-json/wp/v2/biere?_embed')
    const beerData = await beerRes.json()

    const spotRes = await fetch('http://localhost/biru/wp-json/wp/v2/spot?_embed')
    const spotData = await spotRes.json()

    const followRes = await fetch('http://localhost/biru/wp-json/wp/v2/follow?_embed')
    const followData = await followRes.json()

    const packRes = await fetch('http://localhost/biru/wp-json/wp/v2/packaging?_embed')
    const packData = await packRes.json()

    const gifRes = await fetch('http://localhost/biru/wp-json/wp/v2/gif')
    const gifData = await gifRes.json()

    this.setState({
      beer: beerData[0],
      beerBg: beerData[0]._embedded['wp:featuredmedia']['0'].source_url,
      beerTitle: beerData[0].title.rendered,
      spot: spotData[0],
      spotTitle: spotData[0].title.rendered,
      follow: followData[0],
      followTitle: followData[0].title.rendered,
      pack: packData[0],
      gif: gifData[0],
      loading: false
    })
  }
  handleClick = (e) => {
    const { beer, spot, follow, pack, gif } = this.state
    let content
    let id = e.currentTarget.id
    let entry = document.getElementById('entry')

    let navItems = document.getElementsByClassName('main-nav__item')
    for (var i = 0; i < navItems.length; i++) {
      navItems[i].classList.remove('active')
    }

    e.currentTarget.classList.add('active')

    switch (id) {
      case 'botw':
        content = beer.content.rendered +
                  '<span class="entry__note__wrapper"><span class="entry__note">' + beer.note + '</span> / 10</span>'
        break
      case 'sotw':
        content = '<img src=' + spot._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '>' +
                  spot.content.rendered
        break
      case 'fotw':
        content = '<img src=' + follow._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '>' +
                  follow.content.rendered
        break
      case 'potw':
        content = '<img src=' + pack._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '>' +
                  pack.content.rendered
        break
      case 'gotw':
        content = gif.content.rendered
        break
      default:
        break
    }
    entry.innerHTML = content
  }
  render () {
    const { loading, beerBg, beerTitle, spotTitle, followTitle } = this.state
    const divStyle = {
      backgroundImage: 'url(' + beerBg + ')'
    }

    return (
      <Fragment>
        {loading && <p>Fetching...</p>}
        {!loading &&
          <div className="master-container" style={divStyle}>
            <div className="container">
              <div className="header">
                <Header />
                <Nav beerTitle={beerTitle} spotTitle={spotTitle} followTitle={followTitle} handleClick={this.handleClick} />
              </div>
              <div id="entry" className="entry"></div>
            </div>
          </div>
        }
      </Fragment>
    )
  }
}

export default App