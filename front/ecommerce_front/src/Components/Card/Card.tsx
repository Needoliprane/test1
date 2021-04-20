import React from "react";
import Skeleton from "react-loading-skeleton";
import { useHistory } from "react-router";
import "./Card.scss";

type Props = {
    img?: string;
    title?: string;
    price?: number;
    id?: number;
};

const Card: React.FC<Props> = ({ img, title, price, id }) => {
    const history = useHistory();

    const handleClick = () => {
        id && history.push("/product/" + id);
    };

    return (
        <div className="product" onClick={handleClick}>
            {img ? (
                <img className="product-picture" src="" alt="product card" />
            ) : (
                <Skeleton width={200} height={200} />
            )}
            <p className="product-title">{title || <Skeleton width={150} />}</p>
            <p className="product-price">{price || <Skeleton width={75} />}</p>
        </div>
    );
};

export default Card;
