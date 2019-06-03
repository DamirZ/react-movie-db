import React from 'react';
import StarRatings from 'react-star-ratings';
import './index.css';

class ListItem extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
            rating: props.item.rating
        }
    }

    changeRating = (newRating) => {
      this.setState({
        rating: newRating
      });
    }

    render() {
        const { item } = this.props;
        const { rating } = this.state;

        return (
            <div key={item.image} className="RMDB-ListContainer__item">
                <div className="RMDB-List__MovieImage">
                    <img src={item.image} alt={item.title} />
                </div>
                <div className="RMDB-List__InfoWrapper">
                    <div className="RMDB-List__MovieTitle">
                        {item.name}
                    </div>
                    <div className="RMDB-List__MovieDescription">
                        {item.description}
                    </div>
                    <div className="RMDB-List__MovieRating">
                        Rating:
                        <StarRatings
                            className="RMDB-starRating"
                            rating={rating}
                            numberOfStars={5}
                            name='rating'
                            starRatedColor='#f2b01e'
                            starDimension="20px"
                            starSpacing="2px"
                            changeRating={this.changeRating}
                        />
                    </div>
                    <div className="RMDB-List__MovieRelease">
                        Release Date: {item.release_date}
                    </div>
                    <div className="RMDB-List__MovieDirector">
                        Director: {item.director}
                    </div>
                </ div>
            </div>
        );
    }


}

// }

export default ListItem;