import React, { Component, Fragment } from 'react'
import './assets/css/App.min.css'

/* Components */
import Header from './Header'
import Nav from './Nav'
import AltNav from './AltNav'

const cap = `${process.env.PUBLIC_URL}/src/assets/img/cap.svg`
const close = `${process.env.PUBLIC_URL}/src/assets/img/close.svg`
const baseFetch = '/wp-json/wp/v2/'
// For developpement only
// const baseFetch = 'http://localhost/biru/wp-json/wp/v2/'

const limitFetch = '?per_page=1&_embed'
let firstClick = true
let $timer = 0

class App extends Component {
  state = {
    beer: [],
    spot: [],
    loading: false,
    show: false
  }
  componentWillMount = async () => {
    this.setState({loading: true})
    const beerRes = await fetch(baseFetch + 'biere' + limitFetch)
    const beerData = await beerRes.json()

    const spotRes = await fetch(baseFetch + 'spot' + limitFetch)
    const spotData = await spotRes.json()

    const followRes = await fetch(baseFetch + 'follow' + limitFetch)
    const followData = await followRes.json()

    const packRes = await fetch(baseFetch + 'packaging' + limitFetch)
    const packData = await packRes.json()

    // const gifRes = await fetch(baseFetch + 'gif' + limitFetch)
    // const gifData = await gifRes.json()

    this.setState({
      beer: beerData[0],
      beerBg: beerData[0]._embedded['wp:featuredmedia']['0'].source_url,
      beerTitle: beerData[0].title.rendered,
      spot: spotData[0],
      spotTitle: spotData[0].title.rendered,
      follow: followData[0],
      followTitle: followData[0].title.rendered,
      pack: packData[0],
      // gif: gifData[0],
      loading: false
    })
  }

  componentDidMount () {
    this.setState({ show: true })
  }

  handleClick = (e) => {
    const { beer, spot, follow, pack } = this.state
    let content
    let id = e.currentTarget.id
    const entry = document.getElementById('entry')
    const entryInner = document.getElementById('entry__inner')

    let navItems = document.getElementsByClassName('main-nav__item')
    for (var i = 0; i < navItems.length; i++) {
      navItems[i].classList.remove('active')
    }

    // Open entry wrapper and add active class to nav
    if (firstClick) {
      firstClick = false
    } else {
      $timer = 500
      entry.classList.add('closing')
      setTimeout(() => {
        entry.classList.remove('opening')
        entry.classList.remove('opened')
      }, $timer)
    }

    e.currentTarget.classList.add('active')
    setTimeout(() => {
      entry.classList.remove('closing')
      entry.classList.add('opening')
    }, $timer)
    setTimeout(() => {
      entry.classList.add('opened')
    }, $timer + 300)

    switch (id) {
      case 'botw':
        content = beer.content.rendered +
                  '<p class="entry__note__wrapper"><span class="entry__note">' + beer.note + '</span> / 10</p>'
        break
      case 'sotw':
        content = '<p class="entry__thumbnail"><img src=' + spot._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '></p>' +
                  spot.content.rendered
        break
      case 'fotw':
        content = '<p class="entry__thumbnail"><img src=' + follow._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '></p>' +
                  follow.content.rendered
        break
      case 'potw':
        content = '<p class="entry__thumbnail"><img src=' + pack._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url + '></p>' +
                  pack.content.rendered
        break
      /* case 'gotw':
        content = gif.content.rendered
        break */
      default:
        break
    }
    setTimeout(() => {
      entryInner.innerHTML = content
    }, $timer)

    e.preventDefault()
  }

  closeClick = (e) => {
    const entry = document.getElementById('entry')
    $timer = 500

    entry.classList.add('closing')
    setTimeout(() => {
      entry.classList.remove('opening')
      entry.classList.remove('opened')
    }, $timer)

    e.preventDefault()
  }

  render () {
    const { loading, show, beerBg, beerTitle, spotTitle, followTitle } = this.state
    const divStyle = {
      backgroundImage: 'url(' + beerBg + ')'
    }

    return (
      <Fragment>
        {loading &&
          <div className="loading">
            <div className="translater">
              <img src={cap} className="loading__cap" alt="" />
            </div>
            <p>Décapsulage...</p>
          </div>
        }
        {!loading &&
          <div className="master-container">
            <div className={show ? 'background-cover loaded' : null} style={divStyle}></div>
            <div className="container">
              <div className="header">
                <Header />
                <Nav beerTitle={beerTitle} spotTitle={spotTitle} followTitle={followTitle} handleClick={this.handleClick} />
                <AltNav />
              </div>
              <div id="entry" className="entry">
                <button id="entry__close" className="entry__close" onClick={this.closeClick}>
                  <img src={close} alt="Close" />
                </button>
                <div id="entry__inner" className="entry__inner"></div>
              </div>
            </div>
          </div>
        }
      </Fragment>
    )
  }
}

export default App