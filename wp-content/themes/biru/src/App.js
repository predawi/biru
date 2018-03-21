import React, { Component, Fragment } from 'react'
// import axios from 'axios';
import './assets/css/App.min.css'
import beerDdata from './assets/json/beer.json'
import spotData from './assets/json/spot.json'

/* Components */
import Header from './Header'
import Nav from './Nav'
import Beer from './Beer'

class App extends Component {
  state = {
    loading: false,
    beer: [],
    spot: []
  }
  componentWillMount = async () => {
    this.setState({
      loading: true
    })
    this.setState({
      beer: beerDdata[0],
      beerBg: beerDdata[0]._embedded['wp:featuredmedia']['0'].source_url,
      beerTitle: beerDdata[0].title.rendered,
      spot: spotData[0],
      spotTitle: spotData[0].title.rendered,
      loading: false
    })
  }
  render () {
    const { beer, beerBg, beerTitle, spotTitle, loading } = this.state
    const divStyle = {
      backgroundImage: 'url(' + beerBg + ')'
    }
    return (
      <Fragment>
        <div className="master-container" style={divStyle}>
          <div className="container">
            <div className="header">
              <Header />
              <Nav className="main-nav" beerTitle={beerTitle} spotTitle={spotTitle}/>
              {loading ? 'Fetching posts ...' : <Beer beer={beer}/> }
            </div>
          </div>
        </div>
      </Fragment>
    )
  }
}

export default App