import React, { Component } from 'react';
// import { API_KEY, PATH_BASE, PATH_TOP_RATED, PATH_MOVIE, PATH_SHOW } from '../../api';
import { PATH_MOVIE, PATH_SHOW } from '../../api';
import Header from '../Header';
import List from '../List';
import Loading from '../Loading'
// import Movies from '../../mockup/db/movies/movies.json';
// import Shows from '../../mockup/db/shows/shows.json';

import './index.css';


class Main extends Component {

    constructor(props) {
        super(props);
        var updateList  = this.updateList.bind(this);

        this.state = {
            topRated: {},
            originalList: {},
            activeTopRated: PATH_MOVIE,
            isLoading: false,
            error: null,
        };
    }

    componentDidMount = () => {

        let movies, shows = []

        let sortMethod = function(a, b) {
            if (a.rating > b.rating) {
                return -1;
            }
            if (a.rating < b.rating) {
                return 1;
            }
            return 0;
        }

        this.setState({isLoading: true})
        fetch('https://rmdb-damir.herokuapp.com/rest/getmovies.php', {method: 'GET'})
            .then(response => response.json())
            .then(data => {
                movies = data.sort(sortMethod)
                this.setState({ topRated: movies, originalList: movies, isLoading: false})
                this.getTopRated(this.state.activeTopRated)
            })
            .catch(function(err) {
                this.setState({isLoading: false})
                console.log(err)
            })
        

        // Movies.sort(sortMethod)


    }

    getTopRated = (active) => {

        let movies, shows = []

        let sortMethod = function (a, b) {
            if (a.rating > b.rating) {
                return -1;
            }
            if (a.rating < b.rating) {
                return 1;
            }
            return 0;
        }

        this.setState({activeTopRated: active, isLoading: true})
        if(active === '/movie') {
            fetch('https://rmdb-damir.herokuapp.com/rest/getmovies.php', { method: 'GET' })
                .then(response => response.json())
                .then(data => {
                    movies = data.sort(sortMethod)
                    this.setState({ topRated: movies, originalList: movies, isLoading: false })
                    // this.getTopRated(this.state.activeTopRated)
                    // console.log("movies", movies)
                })
                .catch(function (err) {
                    this.setState({ isLoading: false })
                    console.log(err)
                })
            // this.setState(
            //     {
            //         topRated: movies,
            //         originalList: movies,
            //         isLoading: false
            //     }
            // )
        }
        if(active === '/tv') {
            fetch('https://rmdb-damir.herokuapp.com/rest/getshows.php', { method: 'GET' })
                .then(response => response.json())
                .then(data => {
                    shows = data.sort(sortMethod)
                    this.setState({ topRated: shows, originalList: shows, isLoading: false })
                    // this.getTopRated(this.state.activeTopRated)
                    // console.log("shows", shows)
                })
                .catch(function (err) {
                    this.setState({ isLoading: false })
                    // console.log(err)
                })
        }
        console.log("state on end of getTopRated", this.state)
    }

    updateList(updatedList) {
        this.setState({
            topRated: updatedList
        })
    }

    render() {

        const { topRated, originalList } = this.state;

        return (
            <React.Fragment>
                {/* {console.log("topRated in my component", topRated)}
                {console.log("originalList in my unit", originalList)} */}
                <Header searchList={ topRated } updateList={this.updateList.bind(this)} originalList={originalList} />

                {this.state.isLoading && <Loading />}
                <div className="RMDB-AppMain">
                    <h1 className={this.state.activeTopRated === PATH_MOVIE ? "RMDB-AppMainTitle-movie RMDB-AppMainTitle-active" : "RMDB-AppMainTitle-movie"} onClick={() => this.getTopRated(PATH_MOVIE)}>Popular movies</h1>
                    <h1 className={this.state.activeTopRated === PATH_SHOW ? "RMDB-AppMainTitle-show RMDB-AppMainTitle-active" : "RMDB-AppMainTitle-show"} onClick={() => this.getTopRated(PATH_SHOW)}>Popular shows</h1>
                </div>
                {topRated && <List list={topRated} />}
            </React.Fragment>
        );

    }
}

export default Main;